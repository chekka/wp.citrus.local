"use strict";(self.webpackChunkrealCookieBanner_name_=self.webpackChunkrealCookieBanner_name_||[]).push([[184],{5979:function(e,t,a){a.r(t),a.d(t,{TcfRouter:function(){return le}});var n=a(9591),r=a(7363),c=a(3554),o=a(6711),l=a(3612),i=a(4614),s=a(9455),u=a(7228),d=a(9631),m=a(5071),f=a(6142),p=function(e){var t=e.count,a=(0,r.useMemo)((function(){for(var e=[],a=0;a<t;a++)e.push({key:a});return e}),[t]);return React.createElement(s.ZP,{dataSource:a,renderItem:function(){return React.createElement(s.ZP.Item,null,React.createElement(f.Z,{loading:!0,active:!0,paragraph:{rows:1}}))}})},v=a(1857),R=a(6107),E=a(9943),h=a(1313),_=a(4713),g=(0,c.Pi)((function(e){var t,a,c=e.item,o=(0,d.g)().editLink,l=(0,_.w)(),u=l.addLink,f=l.editLink,p=c.key,g=c.busy,b=c.data,y=c.stats,k=y.activeFeatures,Z=y.activePurposes,C=c.hasVendor;if(C){var P=c.vendorModel.data;t=P.name,a=P.policyUrl}var S=b.status,w=b.meta,x=w.ePrivacyUSA,I=w.vendorId,T=b.blocker,F=(0,i.m)().optionStore.ePrivacyUSA,N=(0,r.useMemo)((function(){return T?f(new h.p(void 0,{id:T})):"".concat(u,"?force=scratch&attributes=").concat(JSON.stringify({name:t,tcfVendors:[p],criteria:"tcf"}))}),[T,t,p]);return React.createElement(s.ZP.Item,{itemID:p.toString(),actions:[C&&React.createElement("a",{key:"contentBlocker",href:N,style:{textDecoration:"none"}},T?(0,m.__)("Edit Content Blocker"):(0,m.__)("Create Content Blocker")),C&&React.createElement("a",{key:"edit",href:o(c),style:{textDecoration:"none"}},(0,m.__)("Edit")),React.createElement(E.Z,{key:"delete",title:(0,m.__)("Are you sure you want to delete this vendor?"),placement:"bottomRight",onConfirm:function(){return c.delete({force:!0})},okText:(0,m.__)("Delete"),cancelText:(0,m.__)("Cancel"),overlayStyle:{maxWidth:350}},React.createElement("a",{style:{cursor:"pointer"}},(0,m.__)("Delete")))].filter(Boolean)},React.createElement(n.Z,{spinning:g},React.createElement(s.ZP.Item.Meta,{title:React.createElement("span",null,t," ",React.createElement(R.Z,null,(0,m.__)("Vendor ID: %d",I)),"draft"===S?React.createElement(R.Z,{color:"orange"},(0,m.__)("Draft")):"private"===S?React.createElement(R.Z,{color:"red"},(0,m.__)("Disabled")):null,!!x&&F&&React.createElement(R.Z,null,(0,m.__)("US data processing")),!C&&React.createElement(v.Z,{title:(0,m.__)("This vendor is no longer available and/or has been removed from the list of available vendors by the GVL. For this vendor, you can no longer request a consent from your visitors.")},React.createElement(R.Z,{color:"error"},(0,m.__)("Abandoned")))),description:React.createElement("div",null,React.createElement("div",null,(0,m.__)("Privacy policy"),":"," ",React.createElement("a",{href:a,target:"_blank",rel:"noreferrer"},a)),React.createElement("div",{style:{paddingTop:5}},React.createElement(R.Z,null,(0,m._n)("%d purpose enabled","%d purposes enabled",Z,Z)),k>0&&React.createElement(R.Z,null,(0,m._n)("%d feature enabled","%d features enabled",k,k))))})))})),b=a(1944),y=(0,c.Pi)((function(){var e=(0,d.g)().addLink;return React.createElement(b.Z,{description:(0,m.__)("You have not yet created a TCF vendor configuration.")},React.createElement("a",{className:"button button-primary",href:e},(0,m.__)("Create TCF vendor configuration")))})),k=(0,c.Pi)((function(){var e=(0,r.useState)(!1),t=(0,u.Z)(e,2),a=t[0],n=t[1],c=(0,d.g)().addLink,o=(0,i.m)().tcfStore,l=o.vendorConfigurations,f=o.vendorConfigurationCount,v=l.busy,R=l.entries;return(0,r.useEffect)((function(){f>0&&!a&&(o.fetchVendorConfigurations(),n(!0))}),[f,a]),f?React.createElement(React.Fragment,null,React.createElement("div",{className:"wp-clearfix"},React.createElement("a",{href:c,className:"button button-primary right",style:{marginBottom:10}},(0,m.__)("Add TCF vendor"))),v?React.createElement(p,{count:f}):React.createElement("div",null,React.createElement(s.ZP,null,Array.from(R.values()).sort((function(e,t){if(!e.hasVendor||!t.hasVendor)return 1;var a=e.vendorModel.data.name,n=t.vendorModel.data.name;return a<n?-1:a>n?1:0})).map((function(e){return React.createElement(g,{item:e,key:e.key})}))))):React.createElement(y,null)})),Z=a(2982),C=a(2519),P=(0,c.Pi)((function(e){var t=e.item,a=e.onSelect,n=t.vendorConfiguration,r=t.data,c=r.id,o=r.name,l=r.policyUrl;return React.createElement(s.ZP.Item,{itemID:c.toString(),actions:[a&&!n&&React.createElement("a",{className:"button",key:"select",style:{textDecoration:"none",cursor:"pointer"},onClick:function(){return a(t)}},(0,m.__)("Add vendor"))].filter(Boolean),style:n?{opacity:.7}:{}},React.createElement(s.ZP.Item.Meta,{title:React.createElement("span",null,o," ",!!n&&React.createElement(R.Z,null,(0,m.__)("Already exists")),React.createElement(R.Z,null,(0,m.__)("Vendor ID: %d",c))),description:React.createElement("div",null,React.createElement("div",null,(0,m.__)("Privacy policy"),":"," ",React.createElement("a",{href:l,target:"_blank",rel:"noreferrer"},l)))}))})),S=a(2936),w=(0,c.Pi)((function(e){var t=e.onSelect,a=(0,i.m)().tcfStore,n=a.busyVendors,c=a.vendors,o=(0,r.useState)(""),l=(0,u.Z)(o,2),d=l[0],f=l[1],v=(0,r.useState)([]),R=(0,u.Z)(v,2),E=R[0],h=R[1],_=(0,r.useCallback)((function(e){return Array.from(c.values()).filter((function(t){var a=t.data,n=a.id,r=a.name,c=a.policyUrl;return!e.trim().length||e.split(" ").filter(Boolean).filter((function(e){return"".concat(r," ").concat(c," ").concat(n).toLowerCase().indexOf(e.trim().toLowerCase())>-1})).length>0})).sort((function(e,t){var a=e.data.name,n=t.data.name;return a<n?-1:a>n?1:0}))}),[]);return(0,r.useEffect)((function(){a.fetchedAllVendorConfigurations||a.fetchVendorConfigurations(),a.fetchVendors().then((function(){h(_(""))}))}),[]),(0,S.N)(d,""===d?0:800,(function(e){h(_(e))})),React.createElement("div",null,React.createElement("div",{className:"wp-clearfix",style:{marginBottom:15}},React.createElement(C.Z.Search,{autoFocus:!0,style:{maxWidth:400,float:"right"},placeholder:(0,m.__)("Search vendor by name or ID..."),onChange:function(e){return f(e.target.value)}})),n?React.createElement(p,{count:10}):React.createElement(s.ZP,null,E.map((function(e){return React.createElement(P,{item:e,key:"".concat(e.data.id),onSelect:t})}))))})),x=a(4741),I=a(3306),T=a(2711),F=a(8782),N=a(4115),A=a(7938),D=a(6315),B=a(5450),L=a.n(B),V=a(2200),U=a(6215),M=a(8920),O=a(8618),q=(0,c.Pi)((function(e){var t=e.vendor.data,a=t.id,n=t.name,r=t.policyUrl,c=(0,i.m)().optionStore.ePrivacyUSA;return React.createElement(React.Fragment,null,React.createElement(O.C,{offset:ne.labelCol.span},(0,m.__)("General vendor configuration")),React.createElement(D.Z.Item,{label:(0,m.__)("Provider")},React.createElement(C.Z,{value:n,readOnly:!0,addonAfter:(0,m.__)("Vendor ID: %d",a)})),React.createElement(D.Z.Item,{label:(0,m.__)("Status"),required:!0},React.createElement(D.Z.Item,{name:"status",noStyle:!0,rules:[{required:!0,message:(0,m.__)("Please choose a status!")}]},React.createElement(M.ZP.Group,null,React.createElement(M.ZP.Button,{value:"publish"},(0,m.__)("Enabled")),React.createElement(M.ZP.Button,{value:"private"},(0,m.__)("Disabled")),React.createElement(M.ZP.Button,{value:"draft"},(0,m.__)("Draft")))),React.createElement("p",{className:"description"},(0,m.__)('Vendor configurations with the status "Draft" or "Disabled" are not visible to the public. In addition, a draft is highlighted in the table of vendor configurations so that you do not forget to complete it.'))),React.createElement(D.Z.Item,{label:(0,m.__)("Privacy policy of the provider")},React.createElement(C.Z,{value:r,readOnly:!0})),React.createElement(D.Z.Item,{label:(0,m.__)("US data processing"),style:{display:c?void 0:"none"}},React.createElement(D.Z.Item,{name:"ePrivacyUSA",noStyle:!0},React.createElement(M.ZP.Group,null,React.createElement(M.ZP.Button,{value:2},(0,m.__)("Unknown")),React.createElement(M.ZP.Button,{value:1},(0,m.__)("Yes")),React.createElement(M.ZP.Button,{value:0},(0,m.__)("No")))),React.createElement("p",{className:"description"},(0,m.__)("This vendor processes data in the USA or transfers data to US companies or servers."))))})),j=a(3055),W={icon:{tag:"svg",attrs:{viewBox:"64 64 896 896",focusable:"false"},children:[{tag:"path",attrs:{d:"M909.1 209.3l-56.4 44.1C775.8 155.1 656.2 92 521.9 92 290 92 102.3 279.5 102 511.5 101.7 743.7 289.8 932 521.9 932c181.3 0 335.8-115 394.6-276.1 1.5-4.2-.7-8.9-4.9-10.3l-56.7-19.5a8 8 0 00-10.1 4.8c-1.8 5-3.8 10-5.9 14.9-17.3 41-42.1 77.8-73.7 109.4A344.77 344.77 0 01655.9 829c-42.3 17.9-87.4 27-133.8 27-46.5 0-91.5-9.1-133.8-27A341.5 341.5 0 01279 755.2a342.16 342.16 0 01-73.7-109.4c-17.9-42.4-27-87.4-27-133.9s9.1-91.5 27-133.9c17.3-41 42.1-77.8 73.7-109.4 31.6-31.6 68.4-56.4 109.3-73.8 42.3-17.9 87.4-27 133.8-27 46.5 0 91.5 9.1 133.8 27a341.5 341.5 0 01109.3 73.8c9.9 9.9 19.2 20.4 27.8 31.4l-60.2 47a8 8 0 003 14.1l175.6 43c5 1.2 9.9-2.6 9.9-7.7l.8-180.9c-.1-6.6-7.8-10.3-13-6.2z"}}]},name:"reload",theme:"outlined"},Y=a(3751),G=function(e,t){return r.createElement(Y.Z,Object.assign({},e,{ref:t,icon:W}))};G.displayName="ReloadOutlined";var H=r.forwardRef(G),J=(0,c.Pi)((function(e){var t=e.vendor.deviceStorageDisclosure,a=(0,i.m)().tcfStore.purposes;return React.createElement(React.Fragment,null,React.createElement(O.C,{offset:ne.labelCol.span,description:(0,m.__)("It should be specified all cookies, which are used by using a service of a TCF vendor. There are several types of cookies and that the law requires that you inform your visitors not only about (HTTP) cookies, but also about cookie-like information. This data, if specified, is given by the TCF Vendor and is not mutable. If the information is incomplete, you will need to contact the TCF vendor to request the information be completed.")},(0,m.__)("Device Storage Disclosure")," (",(0,m.__)("Technical cookie information"),")"),React.createElement("table",{className:"wp-list-table widefat fixed striped table-view-list",style:{marginBottom:25}},React.createElement("thead",null,React.createElement("tr",null,React.createElement("td",null,(0,m.__)("Cookie type")),React.createElement("td",null,(0,m.__)("Identifier")),React.createElement("td",null,(0,m.__)("Domain")),React.createElement("td",null,(0,m.__)("Duration")),React.createElement("td",null,(0,m.__)("Purposes")))),React.createElement("tbody",null,t.length?t.map((function(e){var t=e.type,n=e.identifier,r=e.domain,c=e.maxAgeSeconds,o=e.cookieRefresh,l=e.purposes;return React.createElement("tr",{key:"".concat(t).concat(n)},React.createElement("td",null,function(e){switch(e){case j.r.Cookie:return"HTTP Cookie";case j.r.Web:return"LocalStorage, Session Storage, IndexDB";case j.r.App:return"App";default:return e}}(t)),React.createElement("td",null,n?React.createElement("code",null,n):(0,m.__)("Not defined")),React.createElement("td",null,r?React.createElement("code",null,r):(0,m.__)("Not defined")),React.createElement("td",null,null!==c?React.createElement(React.Fragment,null,c<=0?React.createElement(v.Z,{title:(0,m.__)("This cookie is active as long as the session is active")},React.createElement("span",null,(0,m.__)("Session"))):React.createElement("span",null,c," ",(0,m.__)("second(s)")),o&&React.createElement(R.Z,{icon:React.createElement(H,null)},(0,m.__)("Refresh"))):(0,m.__)("Not defined")),React.createElement("td",null,l?l.length?React.createElement(v.Z,{title:React.createElement("ul",{style:{margin:0,padding:0}},l.map((function(e){return React.createElement("li",{key:e},a.get("".concat(e)).data.name)})))},React.createElement(R.Z,null,(0,m._n)("%d purpose","%d purposes",l.length,l.length))):(0,m.__)("None"):(0,m.__)("Unknown")))})):React.createElement("tr",null,React.createElement("td",{colSpan:5},(0,m.__)("This vendor does not provide any device storage disclosure."))))))})),z=a(3828),K=a(6478),X=a(8081),Q={labelCol:{span:0},wrapperCol:{span:24},style:{margin:0}},$=(0,c.Pi)((function(e){var t=e.vendor,a=t.allPurposes,n=t.flexiblePurposes,r="global"===(0,i.m)().optionStore.tcfScopeOfConsent;return React.createElement(React.Fragment,null,React.createElement(O.C,{offset:ne.labelCol.span,description:(0,m._i)((0,m.__)('The vendor specifies for which defined purposes he wants to process (personal) data of your visitors and use cookies. These can be deselected if consent should not be obtained for certain purposes. The vendor specifies the legal basis for data processing and whether you as the website operator can change this. "Legitimate Interest" means that this purpose is pre-selected on the basis of a legally designated legitimate interest, and the visitor to your website must actively object to it, if an objection is possible. "Consent" means that your visitors must explicitly agree to this purpose. The default settings are provided by the vendor, but do not have to match how you use the vendor on your website. In particular, you may need to make adjustments, if possible, in the "Legal basis" column. {{strong}}A legitimate interest exists only in a very few cases. If you are not sure, it is better to obtain consent.{{/strong}}'),{strong:React.createElement("strong",null)})},(0,m.__)("Purposes and special purposes")),r&&React.createElement("div",{className:"notice notice-info inline below-h2 notice-alt",style:{margin:"0 0 10px 0"}},React.createElement("p",null,(0,m.__)('You are using the TCF integration in the "Global Scope". Therefore, according to the TCF specification, it is not possible to deselect purposes.'))),React.createElement("table",{className:"wp-list-table widefat fixed striped table-view-list",style:{marginBottom:25}},React.createElement("thead",null,React.createElement("tr",null,React.createElement("td",{width:100},(0,m.__)("Enabled")),React.createElement("td",null,(0,m.__)("Description")),React.createElement("td",{width:210,align:"right"},(0,m.__)("Legal basis")))),React.createElement("tbody",null,a.map((function(e){var t=e.data,a=t.id,c=t.description,o=t.descriptionLegal,l=e.special,i=n.indexOf(e)>-1,s=l?"special":"normal",u=a.toString(),d=["restrictivePurposes",s,u],f=d.join(".");return React.createElement("tr",{key:f,"data-key":f},React.createElement("td",null,React.createElement(D.Z.Item,(0,x.Z)({},Q,{name:"special"===s?void 0:[].concat(d,["enabled"]),valuePropName:"checked"}),React.createElement(K.Z,{disabled:r||"normal"!==s,defaultChecked:"special"===s||void 0}))),React.createElement("td",null,React.createElement("strong",null,c," ",l&&React.createElement(R.Z,{color:"warning"},(0,m.__)("Special purpose"))),React.createElement("br",null),(0,X.E)(o)),React.createElement("td",null,React.createElement(D.Z.Item,{noStyle:!0,shouldUpdate:function(e,t){var a,n;return(null===(a=e.restrictivePurposes[s])||void 0===a?void 0:a[+u].enabled)!==(null===(n=t.restrictivePurposes[s])||void 0===n?void 0:n[+u].enabled)}},(function(e){var t=e.getFieldValue;return React.createElement(D.Z.Item,(0,x.Z)({},Q,{name:"special"===s?void 0:[].concat(d,["legInt"])}),React.createElement(z.Z,{disabled:!i||r||!t([].concat(d,["enabled"])),defaultValue:"special"===s?"no":void 0},React.createElement(z.Z.Option,{value:"yes"},(0,m.__)("Legitimate interest")),React.createElement(z.Z.Option,{value:"no"},(0,m.__)("Consent"))))}))))})))))})),ee={labelCol:{span:0},wrapperCol:{span:24},style:{margin:0}},te=(0,c.Pi)((function(e){var t=e.vendor.allFeatures;return React.createElement(React.Fragment,null,React.createElement(O.C,{offset:ne.labelCol.span,description:(0,m.__)("Features are specified by the vendor and are immutable. They describe the characteristics of how personal data is processed in order to achieve one or more purposes.")},(0,m.__)("Features and special features")),React.createElement("table",{className:"wp-list-table widefat fixed striped table-view-list",style:{marginBottom:25}},React.createElement("thead",null,React.createElement("tr",null,React.createElement("td",{width:100},(0,m.__)("Enabled")),React.createElement("td",null,(0,m.__)("Description")))),React.createElement("tbody",null,t.map((function(e){var t=e.data,a=t.id,n=t.description,r=t.descriptionLegal,c=e.special;return React.createElement("tr",{key:"".concat(c?"special":"normal","-").concat(a)},React.createElement("td",null,React.createElement(D.Z.Item,ee,React.createElement(K.Z,{disabled:!0,defaultChecked:!0}))),React.createElement("td",null,React.createElement("strong",null,n," ",c&&React.createElement(R.Z,{color:"warning"},(0,m.__)("Special feature"))),React.createElement("br",null),(0,X.E)(r)))})),0===t.length&&React.createElement("tr",null,React.createElement("td",{colSpan:2,style:{textAlign:"center"}},(0,m.__)("This vendor has not listed any used features."))))))})),ae=a(4342),ne={labelCol:{span:6},wrapperCol:{span:16}},re=(0,c.Pi)((function(e){var t=e.vendor,a=e.navigateAfterCreation,c=void 0===a||a,l=(0,d.g)(),s=l.vendorConfiguration,p=l.id,v=l.queried,R=l.fetched,E=l.link,h=(0,o.useHistory)(),_=D.Z.useForm(),g=(0,u.Z)(_,1)[0],b=(0,r.useState)(!1),y=(0,u.Z)(b,2),k=y[0],Z=y[1],C=(0,r.useState)(!1),P=(0,u.Z)(C,2),S=P[0],w=P[1],B=(0,i.m)(),M=B.tcfStore,O=B.optionStore.tcfScopeOfConsent,j=M.vendorConfigurations,W=(0,r.useState)(t),Y=(0,u.Z)(W,2),G=Y[0],H=Y[1],z=R?{status:s.data.status,restrictivePurposes:s.restrictivePurposes,ePrivacyUSA:s.data.meta.ePrivacyUSA,presetCheck:!0}:{status:"publish",restrictivePurposes:null==G?void 0:G.restrictivePurposes,ePrivacyUSA:2,presetCheck:!1};(0,r.useEffect)((function(){s.vendorModel&&H(s.vendorModel)}),[s]),(0,r.useEffect)((function(){v&&!R&&j.getSingle({params:{id:p,context:"edit"}})}),[v,R]),(0,r.useEffect)((function(){(0,V.X)(0)}),[]);var K=(0,r.useCallback)(function(){var e=(0,A.Z)(L().mark((function e(t){var a,n,r,o,l;return L().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(a=t.status,n=t.restrictivePurposes,r=(0,N.Z)(t,["status","restrictivePurposes"]),0!==Object.values(n.normal).filter((function(e){return e.enabled})).length+G.specialPurposes.length){e.next=5;break}throw F.ZP.error("You need to enable at least one purpose!"),new Error;case 5:if(e.prev=5,delete(o=(0,T.Z)((0,T.Z)({},r),{},{vendorId:G.data.id,restrictivePurposes:JSON.stringify(n)})).presetCheck,!v){e.next=16;break}return"global"===O&&(o.restrictivePurposes=s.data.meta.restrictivePurposes),s.setStatus(a),s.setMeta(o),e.next=14,s.patch();case 14:e.next=19;break;case 16:return l=new U.S(j,{status:a,meta:(0,T.Z)({},o)}),e.next=19,l.persist();case 19:w(!1),F.ZP.success((0,m.__)("You successfully saved the TCF vendor configuration.")),c&&setTimeout((function(){return h.push(E.slice(1))}),0),e.next=28;break;case 24:throw e.prev=24,e.t0=e.catch(5),F.ZP.error(e.t0.responseJSON.message),e.t0;case 28:case"end":return e.stop()}}),e,null,[[5,24]])})));return function(t){return e.apply(this,arguments)}}(),[v,s,M,G,O]),X=(0,r.useCallback)(function(){var e=(0,A.Z)(L().mark((function e(t){return L().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return Z(!0),e.prev=1,e.next=4,K(t);case 4:e.next=8;break;case 6:e.prev=6,e.t0=e.catch(1);case 8:return e.prev=8,Z(!1),e.finish(8);case 11:case"end":return e.stop()}}),e,null,[[1,6,8,11]])})));return function(t){return e.apply(this,arguments)}}(),[g,K]),Q=(0,r.useCallback)((function(e){F.ZP.error((0,m.__)("The TCF vendor configuration could not be saved due to missing/invalid form values.")),e.errorFields.length&&g.scrollToField(e.errorFields[0].name,{behavior:"smooth",block:"center"})}),[]),ee=(0,r.useCallback)((function(){return!S||(0,m.__)('You have unsaved changes. If you click on "confirm", your changes will be discarded.')}),[g,z]);return v&&!R||!G?React.createElement(f.Z,{active:!0,paragraph:{rows:8}}):React.createElement(n.Z,{spinning:k},React.createElement(o.Prompt,{message:ee}),React.createElement(D.Z,(0,x.Z)({name:"blocker-".concat(p),form:g},ne,{initialValues:z,onFinish:X,onFinishFailed:Q,onValuesChange:function(){return w(!0)}}),React.createElement(q,{vendor:G}),React.createElement(J,{vendor:G}),React.createElement($,{vendor:G}),React.createElement(te,{vendor:G}),!v&&React.createElement(D.Z.Item,{name:"presetCheck",valuePropName:"checked",required:!0,rules:[{type:"boolean",required:!0,transform:function(e){return e||void 0},message:(0,m.__)("Please confirm that you have checked the information.")}],wrapperCol:{offset:ne.labelCol.span}},React.createElement(I.Z,null,(0,m.__)("I have checked the information in the TCF vendor configuration myself and corrected any information that does not fit to my use case.")," ",React.createElement(ae.r,{url:(0,m.__)("https://devowl.io/knowledge-base/is-real-cookie-banner-legally-compliant/")}))),React.createElement(D.Z.Item,{className:"rcb-form-sticky-submit"},React.createElement("span",null,React.createElement("input",{type:"submit",className:"button button-primary right",value:(0,m.__)("Save")})))))})),ce=(0,c.Pi)((function(){var e=(0,r.useState)(),t=(0,u.Z)(e,2),a=t[0],n=t[1];return void 0===a?React.createElement(Z.f,null,React.createElement(w,{onSelect:n})):React.createElement(Z.f,{maxWidth:"fixed"},React.createElement(re,{vendor:a}))})),oe=a(8439),le=(0,c.Pi)((function(){var e=(0,o.useRouteMatch)().path,t=(0,i.m)().tcfStore,a=t.purposes;(0,r.useEffect)((function(){t.fetchDeclarations()}),[]);var c=(0,l.v)("tcf-vendor");return 0===a.size?React.createElement(n.Z,{style:{margin:"auto",marginTop:15}}):React.createElement(React.Fragment,null,React.createElement(oe.K,{identifier:"tcf-vendor"}),React.createElement(o.Switch,null,React.createElement(o.Route,{path:e,exact:!0},React.createElement(k,null),React.createElement("p",{className:"description",style:{maxWidth:800,margin:"30px auto 0",textAlign:"center"}},c)),React.createElement(o.Route,{path:"".concat(e,"/new")},React.createElement(ce,null)),React.createElement(o.Route,{path:"".concat(e,"/edit/:vendorConfiguration")},React.createElement(Z.f,{maxWidth:"fixed"},React.createElement(re,null)))))}))},4713:function(e,t,a){a.d(t,{w:function(){return l}});var n=a(6711),r=a(4614),c=a(7363),o=a(1313),l=function(){var e=(0,n.useRouteMatch)().params,t=(0,r.m)().cookieStore,a=+e.blocker,l=isNaN(+a)?0:+a,i=!!a,s=t.blockers.entries.get(l)||new o.p(t.blockers,{id:0}),u=(0,c.useCallback)((function(e){var t=e.key;return"#/blocker/edit/".concat(t)}),[s]);return{blocker:s,id:l,queried:i,fetched:0!==s.key,link:"#/blocker",editLink:u,addLink:"#/blocker/new"}}},9631:function(e,t,a){a.d(t,{g:function(){return l}});var n=a(6711),r=a(4614),c=a(7363),o=a(6215),l=function(){var e=(0,n.useRouteMatch)().params,t=(0,r.m)().tcfStore,a=+e.vendorConfiguration,l=isNaN(+a)?0:+a,i=!!a,s=t.vendorConfigurations.entries.get(l)||new o.S(t.vendorConfigurations,{id:0}),u=(0,c.useCallback)((function(e){var t=e.key;return"#/cookies/tcf-vendors/edit/".concat(t)}),[s]);return{vendorConfiguration:s,id:l,queried:i,fetched:0!==s.key,link:"#/cookies/tcf-vendors",editLink:u,addLink:"#/cookies/tcf-vendors/new"}}}}]);
//# sourceMappingURL=chunk-config-tab-tcf.lite.js.map?ver=50de7d6c77c0289f21ef