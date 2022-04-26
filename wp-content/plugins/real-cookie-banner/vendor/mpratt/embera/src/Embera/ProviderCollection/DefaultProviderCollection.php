<?php

/**
 * DefaultProviderCollection.php
 *
 * @package Embera
 * @author Michael Pratt <yo@michael-pratt.com>
 * @link   http://www.michael-pratt.com/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace DevOwl\RealCookieBanner\Vendor\Embera\ProviderCollection;

/**
 * Basically its a wrapper for the ProvidercollectionAdapter but defines the
 * default providers supported by the library
 */
class DefaultProviderCollection extends \DevOwl\RealCookieBanner\Vendor\Embera\ProviderCollection\ProviderCollectionAdapter
{
    /** inline {@inheritdoc} */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
        $this->registerProvider(['TwentyThreeHq', 'ActBlue', 'Adways', 'Afreecatv', 'Altru', 'Altium', 'AmCharts', 'Amtraker', 'Animoto', 'AnnieMusic', 'Apester', 'Archivos', 'Audioboom', 'AudioClip', 'Audiomack', 'Audiomeans', 'Avocode', 'Backtracks', 'BeautifulAI', 'BlackfireIO', 'Blogcast', 'Buttondown', 'Byzart', 'Ceros', 'Chainflix', 'ChartBlocks', 'Chirbit', 'Chroco', 'CircuitLab', 'Clyp', 'CodeHS', 'CodePen', 'Codepoints', 'CodeSandbox', 'Commaful', 'Coub', 'Crumbs', 'Cueup', 'Curated', 'Dadan', 'Datawrapper', 'DailyMotion', 'Dalexni', 'Deseretnews', 'Deviantart', 'Didacte', 'Digiteka', 'DocDroid', 'DotSUB', 'EduMedia', 'Embedery', 'EnystreMusic', 'Ethfiddle', 'EventLive', 'Eyrie', 'Facebook', 'Fader', 'FaithLifeTV', 'Fitapp', 'FITE', 'Flickr', 'Flourish', 'Framer', 'GeographUk', 'GeographCI', 'GeographDE', 'GetShow', 'GettyImages', 'Gfycat', 'Giphy', 'GloriaTV', 'Gong', 'Gmetri', 'Grain', 'Gyazo', 'Hash', 'Hearthis', 'HiHaHo', 'HippoVideo', 'Huffduffer', 'iFixit', 'IHeartRadio', 'Imgur', 'Infogram', 'Infoveave', 'Injurymap', 'Inoreader', 'Instagram', 'InsticatorContentEngagementUnit', 'Issuu', 'Jovian', 'KakaoTV', 'Kickstarter', 'KirimEmail', 'Kit', 'Kooapp', 'Kmdr', 'Knacki', 'LearningApps', 'Libsyn', 'LillePod', 'Livestream', 'Loom', 'LottieFiles', 'Ludus', 'Lumiere', 'Matterport', 'MediaLab', 'MedienArchivKuenste', 'MermaidInk', 'MessesInfo', 'MicrosoftStream', 'Minerva', 'MixCloud', 'MusicboxManiacs', 'Namchey', 'Nanoo', 'NaturalAtlas', 'Nfb', 'NFTndx', 'NoPaste', 'Odysee', 'OmnyStudio', 'OnSizzle', 'OraTV', 'Orbitvu', 'Outplayed', 'OverflowIO', 'Padlet', 'Pastery', 'Pinpoll', 'Pinterest', 'Pitchhub', 'Playbuzz', 'Podbean', 'Polldaddy', 'Portfolium', 'Prezi', 'RadioPublic', 'Rcvis', 'Reddit', 'ReleaseWire', 'Replit', 'ReverbNation', 'Roomshare', 'RoosterTeeth', 'Rumble', 'RunKit', 'Saooti', 'SapoVideos', 'ScreenNine', 'Screencast', 'ScribbleMaps', 'Scribd', 'SendToNews', 'Shoudio', 'ShowTheWay', 'Sketchfab', 'Slideshare', 'SmashNotes', 'Smrthi', 'Smugmug', 'SocialExplorer', 'SongLink', 'SoundCloud', 'SpeakerDeck', 'Spotify', 'Spreaker', 'SproutVideo', 'StandfordDigitalRepository', 'Streamable', 'Streamio', 'Subscribi', 'Sudomemo', 'Sutori', 'Sway', 'Synthesia', 'Ted', 'TheNewYorkTimes', 'Tickcounter', 'TikTok', 'Toornament', 'TrinityAudio', 'Tumblr', 'Tuxx', 'Tvcf', 'Twitter', 'Typecast', 'Typlog', 'UAPod', 'UniversitePantheonSorbonne', 'UniversityCambridgeMap', 'UpecPod', 'UstreamTV', 'Ustudio', 'Veer', 'Verse', 'VidMount', 'Videfit', 'Vidyard', 'Vimeo', 'Viously', 'Vlipsy', 'Vlive', 'WaveVideo', 'Waltrack', 'WolframCloud', 'VoxSnap', 'Wistia', 'Wizer', 'Wokwi', 'Wordpress', 'Wordwall', 'Youtube', 'Zeplin', 'Zingsoft', 'ZnipeTV', 'Zoomable']);
    }
}