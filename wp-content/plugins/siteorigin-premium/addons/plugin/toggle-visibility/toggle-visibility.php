<?php
/*
Plugin Name: SiteOrigin Toggle Visibility
Description: Toggle the visibility of Page Builder rows and widgets based on device.
Version: 1.0.0
Author: SiteOrigin
Author URI: https://siteorigin.com
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.txt
Documentation: https://siteorigin.com/premium-documentation/plugin-addons/toggle-visibility
Tags: Page Builder
Requires: siteorigin-panels
*/

class SiteOrigin_Premium_Plugin_Toggle_Visibility {

	function __construct() {
		add_filter( 'siteorigin_panels_row_style_groups', array($this, 'style_group'), 10, 3 );
		add_filter( 'siteorigin_panels_row_style_fields', array( $this, 'style_fields' ), 10, 3 );
		add_filter( 'siteorigin_panels_widget_style_groups', array($this, 'style_group'), 10, 3 );
		add_filter( 'siteorigin_panels_widget_style_fields', array($this, 'style_fields'), 10, 3 );
		add_filter( 'siteorigin_panels_css_object', array( $this, 'attributes' ), 10, 4 );
		add_filter( 'siteorigin_panels_layout_data', array( $this, 'layout_data_filter' ), 10, 2 );
	}

	public static function single() {
		static $single;

		return empty( $single ) ? $single = new self() : $single;
	}

	function style_group( $groups, $post_id, $args ) {
		$groups['toggle'] = array(
			'name' => __( 'Toggle Visibility', 'siteorigin-premium' ),
			'priority' => 30
		);

		return $groups;
	}

	function style_fields( $fields, $post_id, $args ) {
		if ( current_filter() == 'siteorigin_panels_row_style_fields' ) {
			$fields['disable_row'] = array(
				// Adding empty 'name' field to avoid 'Undefined index' notices in PB due to always expecting
				// name 'field' in siteorigin-panels\inc\styles-admin.php:L145
				'name' => '',
				'label' => __( 'Hide Row', 'siteorigin-premium' ),
				'type' => 'checkbox',
				'group' => 'toggle',
				'description' => __( 'Disable row on all devices.', 'siteorigin-premium' ),
				'priority' => 10,
			);
		} else {
			$fields['disable_widget'] = array(
				'name' => '',
				'label' => __( 'Hide Widget', 'siteorigin-premium' ),
				'type' => 'checkbox',
				'group' => 'toggle',
				'description' => __( 'Disable widget on all devices.', 'siteorigin-premium' ),
				'priority' => 10,
			);
		}

		$fields['disable_desktop'] = array(
			'name' => '',
			'label' => __( 'Hide on Desktop', 'siteorigin-premium' ),
			'type' => 'checkbox',
			'group' => 'toggle',
			'priority' => 20,
		);
		$fields['disable_tablet'] = array(
			'name' => '',
			'label' => __( 'Hide on Tablet', 'siteorigin-premium' ),
			'type' => 'checkbox',
			'group' => 'toggle',
			'priority' => 30,
		);
		$fields['disable_mobile'] = array(
			'name' => '',
			'label' => __( 'Hide on Mobile', 'siteorigin-premium' ),
			'type' => 'checkbox',
			'group' => 'toggle',
			'priority' => 40,
		);

		$fields['disable_logged_out'] = array(
			'name' => '',
			'label' => __( 'Hide When Logged Out', 'siteorigin-premium' ),
			'type' => 'checkbox',
			'group' => 'toggle',
			'priority' => 50,
		);
		$fields['disable_logged_in'] = array(
			'name' => '',
			'label' => __( 'Hide When Logged In', 'siteorigin-premium' ),
			'type' => 'checkbox',
			'group' => 'toggle',
			'priority' => 60,
		);

		return $fields;
	}

	/**
	 * Handle row/widget CSS for device specific viability.
	 */
	function attributes( $css, $panels_data, $post_id, $layout_data ) {
		$panels_tablet_width = siteorigin_panels_setting( 'tablet-width' );
		$panels_mobile_width = siteorigin_panels_setting( 'mobile-width' );
		$desktop_breakpoint = ( $panels_tablet_width === '' ? $panels_mobile_width : $panels_tablet_width ) + 1;
		$tablet_min_width = $panels_mobile_width + 1;

		foreach ( $layout_data as $ri => $row ) {
			// Check if row is disabled on desktop
			if ( ! empty( $row['style']['disable_desktop'] ) ) {
				$css->add_row_css( $post_id, $ri, null, array(
					'display' => 'none',
				), ":$desktop_breakpoint" );
			}

			// Check if row is disabled on tablet
			if ( ! empty( $row['style']['disable_tablet'] ) && $panels_tablet_width > $panels_mobile_width ) {
				$css->add_row_css( $post_id, $ri, null, array(
					'display' => 'none',
				), "$panels_tablet_width:$tablet_min_width" );
			}

			// Check if row is disabled on mobile
			if ( ! empty( $row['style']['disable_mobile'] ) ) {
				$css->add_row_css( $post_id, $ri, null, array(
					'display' => 'none',
				), $panels_mobile_width );
			}

			foreach ( $row['cells'] as $ci => $cell ) {
				foreach ( $cell['widgets'] as $wi => $widget ) {
					// Check if widet is disabled on desktop
					if ( ! empty( $widget['panels_info']['style']['disable_desktop'] ) ) {
						$css->add_widget_css( $post_id, $ri, $ci, $wi, null, array(
							'display' => 'none',
						), ":$desktop_breakpoint" );
					}

					// Check if widget is disabled on tablet
					if ( ! empty( $widget['panels_info']['style']['disable_tablet'] ) && $panels_tablet_width > $panels_mobile_width ) {
						$css->add_widget_css( $post_id, $ri, $ci, $wi, null, array(
							'display' => 'none',
						), "$panels_tablet_width:$tablet_min_width" );
					}

					// Check if widget is disabled on mobile
					if ( ! empty( $widget['panels_info']['style']['disable_mobile'] ) ) {
						$css->add_widget_css( $post_id, $ri, $ci, $wi, null, array(
							'display' => 'none',
						), $panels_mobile_width );
					}
				}
			}
		}
		return $css;
	}

	/**
	 * Conditionally filter row/widget from layout depending on row/widget hidden status and logged in status.
	 */
	function layout_data_filter( $layout_data, $post_id ) {
		foreach ( $layout_data as $ri => $row ) {
			// Check if row is disabled on all devices, or for the users current login status.
			if (
				! empty( $row['style']['disable_row'] ) ||
				(
					! empty( $row['style']['disable_logged_out'] ) &&
					! is_user_logged_in()
				) ||
				(
					! empty( $row['style']['disable_logged_in'] ) &&
					is_user_logged_in()
				)
			) {
				// Prevent row output.
				unset( $layout_data[ $ri ] );
			}

			foreach ( $row['cells'] as $ci => $cell ) {
				foreach ( $cell['widgets'] as $wi => $widget ) {
					// Check if widget is disabled on all devices, or for the users current login status.
					if (
						! empty( $widget['panels_info']['style']['disable_widget'] ) ||
						(
							! empty( $widget['panels_info']['style']['disable_logged_out'] ) &&
							! is_user_logged_in()
						) ||
						(
							! empty( $widget['panels_info']['style']['disable_logged_in'] ) &&
							is_user_logged_in()
						)
					) {
						// Prevent widget output.
						unset( $layout_data[ $ri ]['cells'][ $ci ]['widgets'][ $wi ] );
					}
				}
			}
		}

		return $layout_data;
	}
}
