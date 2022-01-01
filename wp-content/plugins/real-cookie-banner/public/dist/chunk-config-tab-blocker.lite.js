"use strict";(self.webpackChunkrealCookieBanner_name_=self.webpackChunkrealCookieBanner_name_||[]).push([[478],{3368:function(e,t,n){n.d(t,{X:function(){return o}});var a=n(3554),r=n(5071),c=n(4614),o=(0,a.Pi)((function(e){var t=e.style,n=(0,c.m)().optionStore,a=n.blockerActive,o=n.allBlockerCount;return!a&&o>0&&React.createElement("div",{className:"notice notice-warning inline below-h2 notice-alt",style:t},React.createElement("p",null,(0,r.__)("Content Blockers are globally deactivated in the settings and are therefore not displayed on your website.")," ","• ",React.createElement("a",{href:"#/settings"},(0,r.__)("Enable now"))))}))},4362:function(e,t,n){n.r(t),n.d(t,{BlockerRouter:function(){return re}});var a=n(3554),r=n(6711),c=n(8439),o=n(2982),l=n(9455),i=n(7363),s=n(6142),u=function(e){var t=e.count,n=(0,i.useMemo)((function(){for(var e=[],n=0;n<t;n++)e.push({key:n});return e}),[t]);return React.createElement(l.ZP,{dataSource:n,renderItem:function(){return React.createElement(l.ZP.Item,null,React.createElement(s.Z,{loading:!0,active:!0,paragraph:{rows:1}}))}})},d=n(9591),m=n(6107),p=n(5235),f=n(9943),h=n(7228),v=n(4713),b=n(5071),k=n(8081),R=n(4632),E=(0,a.Pi)((function(e){var t=e.item,n=(0,v.w)().editLink,a=(0,i.useState)(!1),r=(0,h.Z)(a,2),c=r[0],o=r[1],s=t.key,u=t.busy,E=t.data,_=t.hosts,y=t.cookies,g=t.tcfVendors,Z=t.presetModel,w=E.title,C=E.content,S=E.status,x=E.meta,P=x.criteria,I=x.presetId,N=x.visual;return React.createElement(l.ZP.Item,{itemID:s.toString(),actions:[React.createElement("a",{key:"edit",href:n(t),style:{textDecoration:"none"}},(0,b.__)("Edit")),React.createElement(f.Z,{key:"delete",title:(0,b.__)("Are you sure that you want to delete this content blocker?"),placement:"bottomRight",onConfirm:function(){return t.delete({force:!0})},okText:(0,b.__)("Delete"),cancelText:(0,b.__)("Cancel"),overlayStyle:{maxWidth:350}},React.createElement("a",{style:{cursor:"pointer"}},(0,b.__)("Delete")))]},React.createElement(d.Z,{spinning:u},React.createElement(l.ZP.Item.Meta,{avatar:Z?React.createElement(p.C,{size:"large",src:Z.fullLogoUrl,shape:"square"}):React.createElement(p.C,{size:"large",shape:"circle"},w.raw.toUpperCase()[0]),title:React.createElement("span",null,w.raw," ","draft"===S?React.createElement(m.Z,{color:"orange"},(0,b.__)("Draft")):"private"===S?React.createElement(m.Z,{color:"red"},(0,b.__)("Disabled")):null,"cookies"===P&&0===y.length&&React.createElement(m.Z,{color:"red"},(0,b.__)("No connected services defined")," ",React.createElement(R.Z,null)," ",(0,b.__)("Disabled")),"tcfVendors"===P&&0===g.length&&React.createElement(m.Z,{color:"red"},(0,b.__)("No connected TCF Vendors defined")," ",React.createElement(R.Z,null)," ",(0,b.__)("Disabled")),!!I&&React.createElement(m.Z,null,(0,b.__)("Created from template"))),description:React.createElement("div",null,!!C.raw&&React.createElement("div",null,(0,k.E)(C.raw)),React.createElement("div",{style:{paddingTop:5}},(0,b.__)("URLs / Elements to block"),":"," ",_.slice(0,c?_.length:5).map((function(e,t){return React.createElement(m.Z,{key:"".concat(e,"-").concat(t)},e)})),_.length>5&&!c&&React.createElement(m.Z,{onClick:function(){return o(!0)},style:{cursor:"pointer",textDecoration:"underline"}},(0,b._n)("+ %d element","+ %d elements",_.length-5,_.length-5))),React.createElement("div",{style:{paddingTop:5}},(0,b.__)("Visual Content Blocker"),": ",React.createElement(m.Z,null,N?(0,b.__)("Yes, if possible"):(0,b.__)("No"))))})))})),_=n(1944),y=n(238),g=n(4614),Z=(0,a.Pi)((function(){var e=(0,v.w)().addLink,t=(0,y.R)().link,n=(0,g.m)().cookieStore.cookiesCount;return React.createElement(_.Z,{description:n>0?(0,b.__)("You have not yet created a content blocker."):(0,b.__)("Because a content blocker must be associated with a service, you must create a service first.")},React.createElement("a",{className:"button button-primary",href:n>0?e:t},(0,b.__)("Create content blocker")))})),w=(0,a.Pi)((function(){var e=(0,v.w)().addLink,t=(0,g.m)().cookieStore,n=t.blockers,a=t.blockersCount,r=n.busy,c=n.entries;return(0,i.useEffect)((function(){t.fetchBlockers(),t.fetchGroups()}),[]),a?React.createElement(React.Fragment,null,React.createElement("div",{className:"wp-clearfix"},React.createElement("a",{href:e,className:"button button-primary right",style:{marginBottom:10}},(0,b.__)("Add content blocker"))),r?React.createElement(u,{count:a}):React.createElement("div",null,React.createElement(l.ZP,null,Array.from(c.values()).map((function(e){return React.createElement(E,{item:e,key:e.key})}))))):React.createElement(Z,null)})),C=n(2711),S=n(4115),x=n(7938),P=n(5450),I=n.n(P),N=n(4453),T=n(4741),F=n(3306),V=n(6478),B=n(6069),D=n(8920),A=n(2519),q=n(8782),L=n(7870),U=n(3429),H=n(6315),M=n(8618),Y=n(4342),z=n(8240),G=n(2200),j=n(2185),O=n(1313),W=n(9372),X=function(e){var t=e.noneExistingCookies,n=e.onCreated,a=(0,i.useState)(),r=(0,h.Z)(a,2),c=r[0],o=r[1],l=(0,i.useState)([]),s=(0,h.Z)(l,2),u=s[0],d=s[1],m=(t||[]).filter((function(e){var t=e.id;return-1===u.indexOf(t)})),p=null==t?void 0:t.map((function(e){var t=e.id,a=e.attributes,r=e.version;return React.createElement(B.Z,{key:t,visible:c===t,title:(0,b.__)("Add service"),width:"calc(100% - 50px)",bodyStyle:{paddingBottom:0},footer:null,onCancel:function(){return o(void 0)}},React.createElement(W.ZG,{navigateAfterCreation:!1,scrollToTop:!1,attributes:a,preset:{identifier:t,version:r,contentBlockerPresets:{}},onCreated:function(e){o(void 0),d([].concat((0,L.Z)(u),[c])),n(e)}}))}));return React.createElement(React.Fragment,null,p,0===m.length?null:React.createElement("div",{className:"notice notice-warning below-h2 notice-alt"},React.createElement("p",null,(0,b.__)("Some services from the template could not be found. Please select (or create if not already exist) the following services:",m.join(", "))),React.createElement("ul",{style:{margin:"0 0 10px"}},m.map((function(e){var t=e.id,n=e.name;return React.createElement("li",{key:t},React.createElement("strong",null,n)," • ",React.createElement("a",{onClick:function(e){o(t),e.preventDefault()},style:{cursor:"pointer"}},(0,b.__)("Create now")))})))))},J={labelCol:{span:6},wrapperCol:{span:16}},K=(0,a.Pi)((function(e){var t,n,a,c,o=e.preset,l=e.attributes,u=e.navigateAfterCreation,m=void 0===u||u,p=e.cookieCreationPrompt,f=void 0!==p&&p,k=(0,v.w)(),R=k.blocker,E=k.id,_=k.queried,y=k.fetched,Z=k.link,w=(0,r.useHistory)(),P=H.Z.useForm(),N=(0,h.Z)(P,1)[0],K=(0,i.useState)(!1),Q=(0,h.Z)(K,2),$=Q[0],ee=Q[1],te=(0,i.useState)(!1),ne=(0,h.Z)(te,2),ae=ne[0],re=ne[1],ce=(0,i.useState)(f),oe=(0,h.Z)(ce,2),le=oe[0],ie=oe[1],se=(0,g.m)(),ue=se.cookieStore,de=se.optionStore.tcf,me=ue.blockers,pe=ue.essentialGroup,fe=(0,j.u)().openDialog,he=y?{name:R.data.title.raw,status:R.data.status,description:R.data.content.raw,criteria:R.data.meta.criteria,hosts:R.data.meta.hosts,tcfVendors:R.tcfVendors,cookies:R.cookies,visual:R.data.meta.visual,forceHidden:R.data.meta.forceHidden}:{name:(null==l?void 0:l.name)||"",status:"publish",description:(null==l?void 0:l.description)||"",criteria:de&&!o?"tcfVendors":"cookies",hosts:(null==l||null===(t=l.hosts)||void 0===t?void 0:t.join("\n"))||"",tcfVendors:(null==l||null===(n=l.tcfVendors)||void 0===n?void 0:n.filter(Number))||[],cookies:(null==l||null===(a=l.cookies)||void 0===a?void 0:a.filter(Number))||[],visual:"boolean"!=typeof(null==l?void 0:l.visual)||l.visual,forceHidden:(null==l?void 0:l.forceHidden)||!1,presetCheck:!o},ve=null==l||null===(c=l.cookies)||void 0===c?void 0:c.filter((function(e){return"object"===(0,U.Z)(e)})),be=(0,i.useCallback)((function(e){N.setFieldsValue({cookies:[].concat((0,L.Z)(N.getFieldValue("cookies")),[e.key])})}),[N]);(0,i.useEffect)((function(){_&&!y&&me.getSingle({params:{id:E,context:"edit"}})}),[_,y]),(0,i.useEffect)((function(){(0,G.X)(0),pe||ue.fetchGroups()}),[]);var ke=(0,i.useCallback)(function(){var e=(0,x.Z)(I().mark((function e(t){var n,a,r,c,l,i,s,u;return I().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(e.prev=0,r=t.name,c=t.status,l=t.description,i=(0,S.Z)(t,["name","status","description"]),delete(s=(0,C.Z)((0,C.Z)({},i),{},{criteria:i.criteria,tcfVendors:(null===(n=i.tcfVendors)||void 0===n?void 0:n.join(","))||"",cookies:(null===(a=i.cookies)||void 0===a?void 0:a.join(","))||"",visual:"cookies"===i.criteria&&i.visual})).presetCheck,!_){e.next=13;break}return R.setName(r),R.setStatus(c),R.setDescription(l),R.setMeta(s),e.next=11,R.patch();case 11:e.next=16;break;case 13:return u=new O.p(me,{title:{rendered:r},content:{rendered:l,protected:!1},status:c,meta:(0,C.Z)((0,C.Z)({},s),{},{presetId:null==o?void 0:o.identifier,presetVersion:null==o?void 0:o.version})}),e.next=16,u.persist();case 16:ie(!1),q.ZP.success((0,b.__)("You have successfully saved the content blocker.")),m&&setTimeout((function(){return"string"==typeof m?window.location.href=m:w.push(Z.slice(1))}),0),e.next=25;break;case 21:throw e.prev=21,e.t0=e.catch(0),q.ZP.error(e.t0.responseJSON.message),e.t0;case 25:case"end":return e.stop()}}),e,null,[[0,21]])})));return function(t){return e.apply(this,arguments)}}(),[_,R,ue]),Re=(0,i.useCallback)(function(){var e=(0,x.Z)(I().mark((function e(t){return I().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return ee(!0),e.prev=1,e.next=4,ke(t);case 4:e.next=8;break;case 6:e.prev=6,e.t0=e.catch(1);case 8:return e.prev=8,ee(!1),e.finish(8);case 11:case"end":return e.stop()}}),e,null,[[1,6,8,11]])})));return function(t){return e.apply(this,arguments)}}(),[N,ke]),Ee=(0,i.useCallback)((function(e){q.ZP.error((0,b.__)("The content blocker could not be saved due to missing/invalid form values.")),e.errorFields.length&&N.scrollToField(e.errorFields[0].name,{behavior:"smooth",block:"center"})}),[]),_e=(0,i.useCallback)((function(){return!le||(f?(0,b.__)("You have already created a service. Are you sure that you don't want to create the corresponding content blocker?"):(0,b.__)('You have unsaved changes. If you click on "confirm", your changes will be discarded.'))}),[N,he]);return _&&!y?React.createElement(s.Z,{active:!0,paragraph:{rows:8}}):React.createElement(d.Z,{spinning:$},React.createElement(r.Prompt,{message:_e}),React.createElement(H.Z,(0,T.Z)({name:"blocker-".concat(E),form:N},J,{initialValues:he,onFinish:Re,onFinishFailed:Ee,onValuesChange:function(){return ie(!0)}}),React.createElement(M.C,{offset:J.labelCol.span},(0,b.__)("General content blocker configuration")," ",React.createElement(Y.r,{url:(0,b.__)("https://devowl.io/knowledge-base/real-cookie-banner-create-individual-content-blocker/")})),React.createElement(H.Z.Item,{label:(0,b.__)("Name"),required:!0},React.createElement(H.Z.Item,{name:"name",noStyle:!0,rules:[{required:!0,message:(0,b.__)("Please provide a name!")}]},React.createElement(A.Z,null)),React.createElement("p",{className:"description"},(0,b.__)('Each content blocker should have a descriptive name that is understandable to a non-professional user, e.g. "Google Maps".'))),React.createElement(H.Z.Item,{label:(0,b.__)("Status"),required:!0},React.createElement(H.Z.Item,{name:"status",noStyle:!0,rules:[{required:!0,message:(0,b.__)("Please choose a status!")}]},React.createElement(D.ZP.Group,null,React.createElement(D.ZP.Button,{value:"publish"},(0,b.__)("Enabled")),React.createElement(D.ZP.Button,{value:"private"},(0,b.__)("Disabled")),React.createElement(D.ZP.Button,{value:"draft"},(0,b.__)("Draft")))),React.createElement("p",{className:"description"},(0,b.__)('Content Blockers with the status "Draft" or "Disabled" are not visible to the public. In addition, a draft will be highlighted in the content blocker table so that you do not forget to configure it.'))),React.createElement(H.Z.Item,{label:(0,b.__)("Description")},React.createElement(H.Z.Item,{name:"description",noStyle:!0},React.createElement(A.Z.TextArea,{autoSize:{minRows:3}})),React.createElement("p",{className:"description"},(0,b.__)("You can give your visitors further explanations why a content has been blocked or, for example, how they can contact you alternatively instead of agreeing to load the contact form. The description is displayed only in visual content blockers."))),React.createElement(M.C,{offset:J.labelCol.span},(0,b.__)("Technical Definition")),React.createElement(H.Z.Item,{label:(0,b.__)("URLs / Elements to block"),required:!0},React.createElement(H.Z.Item,{name:"hosts",noStyle:!0,rules:[{required:!0,message:(0,b.__)("Please provide at least one URL/element!")}]},React.createElement(A.Z.TextArea,{autoSize:{minRows:3}})),React.createElement("p",{className:"description"},(0,b._i)((0,b.__)("Enter one URL per line, whose content will be replaced by the content blocker. You can block all available URLs on your website including Videos, Iframes, Scripts, Inline Scripts and Stylesheets. Please use an asterisk ({{code}}*{{/code}}) as a wildcard (placeholder)."),{code:React.createElement("code",null)})," • ",React.createElement("button",{type:"button",className:"button-link",onClick:fe},(0,b.__)("Can't handle it? Let a Cookie Expert help you!")),React.createElement("br",null),React.createElement("br",null),(0,b._i)((0,b.__)('{{strong}}Pro tip:{{/strong}} Use the following syntax to create the content blocker on a custom HTML element: {{code}}div[id="my-embed"]{{/code}}. This also works with a contains-syntax: {{code}}div[class*="my-embed"]{{/code}}'),{strong:React.createElement("strong",null),code:React.createElement("code",null)}))),React.createElement(H.Z.Item,{label:(0,b.__)("Block by"),required:!0,style:{display:de?void 0:"none"}},React.createElement(H.Z.Item,{name:"criteria",noStyle:!0,rules:[{required:!0}]},React.createElement(D.ZP.Group,null,React.createElement(D.ZP.Button,{value:"cookies"},(0,b.__)("Services")),React.createElement(D.ZP.Button,{value:"tcfVendors"},(0,b.__)("TCF Vendors")))),React.createElement("p",{className:"description"},(0,b.__)("You can block content through non-standard services or TCF vendors. If you want to block it through TCF vendors, then the visual content blocker cannot be displayed because TCF is usually used to obtain consent for ad networks. Moreover, after the initial consents in the cookie banner, users will probably never consent to the ad."))),React.createElement(H.Z.Item,{noStyle:!0,shouldUpdate:function(e,t){return e.criteria!==t.criteria}},(function(e){switch((0,e.getFieldValue)("criteria")){case"cookies":return React.createElement(H.Z.Item,{label:(0,b.__)("Connected services"),required:!0},React.createElement(H.Z.Item,{name:"cookies",noStyle:!0,rules:[{type:"array",required:!0,message:(0,b.__)("Please provide at least one service!")}]},React.createElement(z.m,{postType:"rcb-cookie",multiple:!0,filter:function(e){return e["rcb-cookie-group"][0]!==(null==pe?void 0:pe.key)}})),React.createElement("p",{className:"description"},(0,b._i)((0,b.__)("A content blocker is displayed until the user has agreed to all necessary services that would be used by loading the content. {{strong}}You must define all services that are loaded as soon as the user wants to see the blocked content.{{/strong}}"),{strong:React.createElement("strong",null)})),React.createElement("button",{type:"button",className:"button",onClick:function(){return re(!0)}},(0,b.__)("Create new service")),React.createElement(B.Z,{key:E,visible:ae,title:(0,b.__)("Add service"),width:"calc(100% - 50px)",bodyStyle:{paddingBottom:0},footer:null,onCancel:function(){return re(!1)}},React.createElement(W.ZG,{navigateAfterCreation:!1,scrollToTop:!1,onCreated:function(e){re(!1),be(e)}})),React.createElement(X,{noneExistingCookies:ve,onCreated:be}));case"tcfVendors":return React.createElement(H.Z.Item,{label:(0,b.__)("Connected TCF Vendors"),required:!0},React.createElement(H.Z.Item,{name:"tcfVendors",noStyle:!0,rules:[{type:"array",required:!0,message:(0,b.__)("Please provide at least one vendor!")}]},React.createElement(z.m,{postType:"rcb-tcf-vendor-conf",multiple:!0,titleRender:function(e){return e.vendor.name}})),React.createElement("p",{className:"description"},(0,b._i)((0,b.__)("A content blocker is displayed until the user has agreed to all necessary TCF vendors that would be used by loading the content. {{strong}}You must define all TCF vendors that are loaded based on legitimate interest or consent as soon as the user wants to see the blocked content.{{/strong}}"),{strong:React.createElement("strong",null)})));default:return null}})),React.createElement(H.Z.Item,{noStyle:!0,shouldUpdate:function(e,t){return e.criteria!==t.criteria}},(function(e){return"cookies"===(0,e.getFieldValue)("criteria")&&React.createElement(React.Fragment,null,React.createElement(M.C,{offset:J.labelCol.span,description:(0,b.__)("For each content blocker it can be defined if it should be visually visible. This means that if the user has not agreed to the respective services, a box with a button is displayed to adjust the privacy settings so that the actual content can be loaded. The design of the box is copied from the cookie banner.")},(0,b.__)("Visual")),React.createElement(H.Z.Item,{wrapperCol:{offset:J.labelCol.span}},React.createElement("span",null,React.createElement(H.Z.Item,{name:"visual",valuePropName:"checked",noStyle:!0},React.createElement(V.Z,null)),React.createElement("span",null,"  ",(0,b.__)("Show the visual content blocker, if possible")))),React.createElement(H.Z.Item,{noStyle:!0,shouldUpdate:function(e,t){return e.visual!==t.visual}},(function(e){return!!(0,e.getFieldValue)("visual")&&React.createElement(H.Z.Item,{wrapperCol:{offset:J.labelCol.span}},React.createElement("span",null,React.createElement(H.Z.Item,{name:"forceHidden",valuePropName:"checked",noStyle:!0},React.createElement(V.Z,null)),React.createElement("span",null,"  ",(0,b.__)("Force visual content blocker for hidden elements"),React.createElement("br",null),(0,b.__)("In rare cases, visual content blockers are not displayed because the main element of the blocked content is not visible either. Enable this option if this is the case and you want to force to display a content blocker for non-visible elements."))))})))})),!!o&&React.createElement(H.Z.Item,{name:"presetCheck",valuePropName:"checked",required:!0,rules:[{type:"boolean",required:!0,transform:function(e){return e||void 0},message:(0,b.__)("Please confirm that you have checked the content of the content blocker.")}],wrapperCol:{offset:J.labelCol.span}},React.createElement(F.Z,null,(0,b.__)("I have checked the information in the content blocker template myself and added any missing information or corrected any information that does not fit to my use case.")," ",React.createElement(Y.r,{url:(0,b.__)("https://devowl.io/knowledge-base/is-real-cookie-banner-legally-compliant/")}))),React.createElement(H.Z.Item,{className:"rcb-form-sticky-submit"},React.createElement("span",null,React.createElement("input",{type:"submit",className:"button button-primary right",value:(0,b.__)("Save")})))))})),Q=n(7802),$=n(9033),ee=n(2965),te=(0,a.Pi)((function(){var e=(0,g.m)(),t=e.cookieStore,n=e.checklistStore,a=t.presetsBlocker,r=t.busyPresetsBlocker,c=(0,i.useState)(),l=(0,h.Z)(c,2),s=l[0],u=l[1],m=(0,i.useState)(!1),p=(0,h.Z)(m,2),f=p[0],v=p[1],k=(0,j.u)(),R=k.logoUrl,E=k.openDialog,_=(0,Q.y)(),y=_.force,Z=_.cookieCreationPrompt,w=_.attributes,P=_.navigateAfterCreation,T=void 0===P||P,F=(0,i.useCallback)(function(){var e=(0,x.Z)(I().mark((function e(n){var a,r,c,o,l;return I().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return v(!0),a=t.presetsBlocker.get(n),e.next=4,a.fetchAttributes();case 4:r=a.data,c=r.identifier,o=r.version,l=a.attributes,u({identifier:c,version:o,attributes:l}),v(!1);case 7:case"end":return e.stop()}}),e)})));return function(t){return e.apply(this,arguments)}}(),[t]),V=(0,i.useCallback)((function(e){!1===e?u(!1):F(e.identifier)}),[F]);return(0,i.useEffect)((function(){function e(){return(e=(0,x.Z)(I().mark((function e(){return I().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,t.fetchPresetsBlocker();case 2:y&&("scratch"===y?u(!!w&&{attributes:JSON.parse(w),identifier:void 0,version:void 0}):F(y));case 3:case"end":return e.stop()}}),e)})))).apply(this,arguments)}!function(){e.apply(this,arguments)}(),n.toggleChecklistItem("add-blocker",!0)}),[]),void 0===s?React.createElement(o.f,null,y?React.createElement(d.Z,{spinning:!0}):React.createElement(d.Z,{spinning:f},React.createElement(N.j,{type:"contentBlocker",presets:Array.from(a.values()).map((function(e){var t=e.data,n=(t.logoFile,(0,S.Z)(t,["logoFile"])),a=e.fullLogoUrl;return(0,C.Z)((0,C.Z)({},n),{},{logoUrl:a})})),fetchingPresets:r,onSelect:V,quickLinks:[{id:"from-scratch",cover:React.createElement($.Z,{style:{paddingTop:25,fontSize:70}}),title:(0,b.__)("Create from scratch"),description:(0,b.__)("an individual content blocker"),onClick:function(){return V(!1)}},{id:"scanner",cover:React.createElement(ee.Z,{style:{paddingTop:25,fontSize:70}}),title:(0,b.__)("Scan website"),description:(0,b.__)("and find used service"),onClick:function(){return window.location.hash="#/scanner"}},{id:"cookie-experts",cover:React.createElement("img",{src:R,style:{display:"block",paddingTop:15,margin:"auto",height:95}}),title:"Cookie Experts",description:(0,b.__)("help you with the setup"),onClick:E}]},React.createElement("h1",{style:{margin:"20px 0"}},(0,b.__)("...or create it from one of our templates"))))):React.createElement(o.f,{maxWidth:"fixed"},React.createElement(K,{cookieCreationPrompt:"1"===Z,preset:!1===s?void 0:{identifier:s.identifier,version:s.version},navigateAfterCreation:T,attributes:!1===s?void 0:s.attributes}))})),ne=n(3368),ae=n(3612),re=(0,a.Pi)((function(){var e=(0,r.useRouteMatch)().path,t=(0,ae.v)("blocker");return React.createElement(React.Fragment,null,React.createElement(ne.X,{style:{margin:"10px 0 0 0"}}),React.createElement(r.Switch,null,React.createElement(React.Fragment,null,React.createElement(c.K,{identifier:"blocker"}),React.createElement(r.Route,{path:e,exact:!0},React.createElement(o.f,null,React.createElement(w,null),React.createElement("p",{className:"description",style:{maxWidth:800,margin:"30px auto 0",textAlign:"center"}},t))),React.createElement(r.Route,{path:"".concat(e,"/new")},React.createElement(te,null)),React.createElement(r.Route,{path:"".concat(e,"/edit/:blocker")},React.createElement(o.f,{maxWidth:"fixed"},React.createElement(K,null))))))}))},4713:function(e,t,n){n.d(t,{w:function(){return l}});var a=n(6711),r=n(4614),c=n(7363),o=n(1313),l=function(){var e=(0,a.useRouteMatch)().params,t=(0,r.m)().cookieStore,n=+e.blocker,l=isNaN(+n)?0:+n,i=!!n,s=t.blockers.entries.get(l)||new o.p(t.blockers,{id:0}),u=(0,c.useCallback)((function(e){var t=e.key;return"#/blocker/edit/".concat(t)}),[s]);return{blocker:s,id:l,queried:i,fetched:0!==s.key,link:"#/blocker",editLink:u,addLink:"#/blocker/new"}}},4290:function(e,t,n){n.d(t,{Z:function(){return l}});var a=n(7363),r={icon:{tag:"svg",attrs:{viewBox:"64 64 896 896",focusable:"false"},children:[{tag:"path",attrs:{d:"M360 184h-8c4.4 0 8-3.6 8-8v8h304v-8c0 4.4 3.6 8 8 8h-8v72h72v-80c0-35.3-28.7-64-64-64H352c-35.3 0-64 28.7-64 64v80h72v-72zm504 72H160c-17.7 0-32 14.3-32 32v32c0 4.4 3.6 8 8 8h60.4l24.7 523c1.6 34.1 29.8 61 63.9 61h454c34.2 0 62.3-26.8 63.9-61l24.7-523H888c4.4 0 8-3.6 8-8v-32c0-17.7-14.3-32-32-32zM731.3 840H292.7l-24.2-512h487l-24.2 512z"}}]},name:"delete",theme:"outlined"},c=n(3751),o=function(e,t){return a.createElement(c.Z,Object.assign({},e,{ref:t,icon:r}))};o.displayName="DeleteOutlined";var l=a.forwardRef(o)}}]);
//# sourceMappingURL=chunk-config-tab-blocker.lite.js.map?ver=0af56cc79214713e392f