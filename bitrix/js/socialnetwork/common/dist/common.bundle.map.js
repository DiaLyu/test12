{"version":3,"file":"common.bundle.map.js","names":["this","BX","Socialnetwork","exports","main_popup","ui_buttons","ui_popupcomponentsmaker","main_core","Waiter","babelHelpers","createClass","key","value","getInstance","Type","isNull","instance","classCallCheck","waitTimeout","waitPopup","show","timeout","_this","setTimeout","PopupWindow","window","autoHide","lightShadow","zIndex","content","create","props","className","children","html","message","setBindElement","hide","clearTimeout","close","defineProperty","SonetGroupMenu","menuPopup","menuItem","favoritesValue","setItemTitle","isDomNode","innerHTML","Loc","getMessage","addCustomEvent","params","RecallJoinRequest","successPopup","groupId","isUndefined","GROUP_ID","Number","relationId","RELATION_ID","urls","rejectOutgoingRequest","isStringFilled","URL_REJECT_OUTGOING_REQUEST","groupsList","URL_GROUPS_LIST","project","isBoolean","PROJECT","scrum","SCRUM","showPopup","recallTitle","recallText","Popup","width","overlay","cachable","Dom","text","buttons","Button","size","Size","MEDIUM","events","click","button","onClose","getContainer","color","Color","LINK","onCancelRequest","closeByEsc","closeIcon","_this2","showButtonWait","ajax","runAction","data","then","response","hideButtonWait","_this3","errorNode","document","getElementById","hideError","userId","parseInt","destroy","top","location","href","reload","showError","buttonNode","classList","add","disabled","style","cursor","remove","errorText","Common","showGroupMenuPopup","bindElement","currentUserId","sonetGroupMenu","tagName","menu","itemTitle","push","title","id","onclick","setFavoritesAjax","callback","success","onCustomEvent","name","NAME","url","URL","extranet","EXTRANET","SidePanel","Instance","postMessageAll","code","ID","RESULT","failure","perms","canInitiate","isScrumProject","isProject","requestUser","canModify","edit","hideArchiveLinks","featuresItem","editFeaturesAllowed","features","B24","licenseInfoPopup","concat","canModerate","members","canProcessRequestsIn","requests","requestsOut","copyGroupItem","copyFeatureAllowed","copy","UI","InfoHelper","isLimit","limitAnalyticsLabels","module","source","userRole","initiatedByType","userRequestItem","isOpened","sendJoinRequest","userRequestGroup","initiatedByUserId","cancelIncomingRequest","canLeave","userIsMember","userIsAutoMember","userLeaveGroup","canPickTheme","Intranet","Bitrix24","ThemePicker","Singleton","showDialog","popup","MenuManager","offsetTop","offsetLeft","offsetWidth","angle","onPopupClose","item","getMenuItem","layout","popupWindow","method","dataType","groupID","MESSAGE","ajax_request","save","sessid","onsuccess","responseData","onfailure","getAdditionalResultData","analyticsLabel","b24statAction","ERROR","errors","getSliderByWindow","showLoader","isOpen","getPageUrl","reloadBlock","isPlainObject","blockId","promise","BLOCK_RELOAD","BLOCK_ID","CONTENT","processRequestData","closeGroupCardMenu","node","doc","ownerDocument","win","defaultView","parentWindow","UIGroupMenu","Widget","widget","targetNode","isShown","getData","getWidget","_templateObject","_templateObject2","_templateObject3","WorkgroupWidget","_Widget","inherits","possibleConstructorReturn","getPrototypeOf","call","avatarPath","avatarType","projectTypeCode","getAttribute","JSON","parse","err","PopupComponentsMaker","target","renderAbout","renderMembers","renderRoles","avatar","encodeURI","description","toLowerCase","Tag","render","taggedTemplateLiteral","join","Event","bind","card","open","loader","_this4","canOpen","hint","SocialnetworkUICommon","UIWorkgroupWidget","Main"],"sources":["common.bundle.js"],"mappings":"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"}