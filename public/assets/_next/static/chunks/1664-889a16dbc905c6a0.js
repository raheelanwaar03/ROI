(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[1664],{13991:function(e,t){"use strict";var n,r;Object.defineProperty(t,"__esModule",{value:!0}),function(e,t){for(var n in t)Object.defineProperty(e,n,{enumerable:!0,get:t[n]})}(t,{PrefetchKind:function(){return n},ACTION_REFRESH:function(){return o},ACTION_NAVIGATE:function(){return l},ACTION_RESTORE:function(){return u},ACTION_SERVER_PATCH:function(){return f},ACTION_PREFETCH:function(){return a},ACTION_FAST_REFRESH:function(){return i},ACTION_SERVER_ACTION:function(){return c}});let o="refresh",l="navigate",u="restore",f="server-patch",a="prefetch",i="fast-refresh",c="server-action";(r=n||(n={})).AUTO="auto",r.FULL="full",r.TEMPORARY="temporary",("function"==typeof t.default||"object"==typeof t.default&&null!==t.default)&&void 0===t.default.__esModule&&(Object.defineProperty(t.default,"__esModule",{value:!0}),Object.assign(t.default,t),e.exports=t.default)},81516:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),Object.defineProperty(t,"getDomainLocale",{enumerable:!0,get:function(){return o}});let r=n(82387);function o(e,t,o,l){{let u=n(13162).normalizeLocalePath,f=n(2249).detectDomainLocale,a=t||u(e,o).detectedLocale,i=f(l,void 0,a);if(i){let t="http"+(i.http?"":"s")+"://",n=a===i.defaultLocale?"":"/"+a;return""+t+i.domain+(0,r.normalizePathTrailingSlash)(""+n+e)}return!1}}("function"==typeof t.default||"object"==typeof t.default&&null!==t.default)&&void 0===t.default.__esModule&&(Object.defineProperty(t.default,"__esModule",{value:!0}),Object.assign(t.default,t),e.exports=t.default)},95569:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),Object.defineProperty(t,"default",{enumerable:!0,get:function(){return g}});let r=n(38754),o=r._(n(67294)),l=n(14532),u=n(83353),f=n(61410),a=n(79064),i=n(370),c=n(69955),s=n(24224),d=n(80508),p=n(81516),b=n(64266),y=n(13991),h=new Set;function _(e,t,n,r,o,l){if(!l&&!(0,u.isLocalURL)(t))return;if(!r.bypassPrefetchedCheck){let o=void 0!==r.locale?r.locale:"locale"in e?e.locale:void 0,l=t+"%"+n+"%"+o;if(h.has(l))return;h.add(l)}let f=l?e.prefetch(t,o):e.prefetch(t,n,r);Promise.resolve(f).catch(e=>{})}function v(e){return"string"==typeof e?e:(0,f.formatUrl)(e)}let O=o.default.forwardRef(function(e,t){let n,r;let{href:f,as:h,children:O,prefetch:g=null,passHref:P,replace:m,shallow:C,scroll:E,locale:j,onClick:M,onMouseEnter:T,onTouchStart:R,legacyBehavior:L=!1,...A}=e;n=O,L&&("string"==typeof n||"number"==typeof n)&&(n=o.default.createElement("a",null,n));let k=o.default.useContext(c.RouterContext),I=o.default.useContext(s.AppRouterContext),S=null!=k?k:I,N=!k,x=!1!==g,U=null===g?y.PrefetchKind.AUTO:y.PrefetchKind.FULL,{href:w,as:K}=o.default.useMemo(()=>{if(!k){let e=v(f);return{href:e,as:h?v(h):e}}let[e,t]=(0,l.resolveHref)(k,f,!0);return{href:e,as:h?(0,l.resolveHref)(k,h):t||e}},[k,f,h]),F=o.default.useRef(w),H=o.default.useRef(K);L&&(r=o.default.Children.only(n));let z=L?r&&"object"==typeof r&&r.ref:t,[D,V,q]=(0,d.useIntersection)({rootMargin:"200px"}),B=o.default.useCallback(e=>{(H.current!==K||F.current!==w)&&(q(),H.current=K,F.current=w),D(e),z&&("function"==typeof z?z(e):"object"==typeof z&&(z.current=e))},[K,z,w,q,D]);o.default.useEffect(()=>{S&&V&&x&&_(S,w,K,{locale:j},{kind:U},N)},[K,w,V,j,x,null==k?void 0:k.locale,S,N,U]);let G={ref:B,onClick(e){L||"function"!=typeof M||M(e),L&&r.props&&"function"==typeof r.props.onClick&&r.props.onClick(e),S&&!e.defaultPrevented&&function(e,t,n,r,l,f,a,i,c,s){let{nodeName:d}=e.currentTarget,p="A"===d.toUpperCase();if(p&&(function(e){let t=e.currentTarget,n=t.getAttribute("target");return n&&"_self"!==n||e.metaKey||e.ctrlKey||e.shiftKey||e.altKey||e.nativeEvent&&2===e.nativeEvent.which}(e)||!c&&!(0,u.isLocalURL)(n)))return;e.preventDefault();let b=()=>{let e=null==a||a;"beforePopState"in t?t[l?"replace":"push"](n,r,{shallow:f,locale:i,scroll:e}):t[l?"replace":"push"](r||n,{forceOptimisticNavigation:!s,scroll:e})};c?o.default.startTransition(b):b()}(e,S,w,K,m,C,E,j,N,x)},onMouseEnter(e){L||"function"!=typeof T||T(e),L&&r.props&&"function"==typeof r.props.onMouseEnter&&r.props.onMouseEnter(e),S&&(x||!N)&&_(S,w,K,{locale:j,priority:!0,bypassPrefetchedCheck:!0},{kind:U},N)},onTouchStart(e){L||"function"!=typeof R||R(e),L&&r.props&&"function"==typeof r.props.onTouchStart&&r.props.onTouchStart(e),S&&(x||!N)&&_(S,w,K,{locale:j,priority:!0,bypassPrefetchedCheck:!0},{kind:U},N)}};if((0,a.isAbsoluteUrl)(K))G.href=K;else if(!L||P||"a"===r.type&&!("href"in r.props)){let e=void 0!==j?j:null==k?void 0:k.locale,t=(null==k?void 0:k.isLocaleDomain)&&(0,p.getDomainLocale)(K,e,null==k?void 0:k.locales,null==k?void 0:k.domainLocales);G.href=t||(0,b.addBasePath)((0,i.addLocale)(K,e,null==k?void 0:k.defaultLocale))}return L?o.default.cloneElement(r,G):o.default.createElement("a",{...A,...G},n)}),g=O;("function"==typeof t.default||"object"==typeof t.default&&null!==t.default)&&void 0===t.default.__esModule&&(Object.defineProperty(t.default,"__esModule",{value:!0}),Object.assign(t.default,t),e.exports=t.default)},13162:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),Object.defineProperty(t,"normalizeLocalePath",{enumerable:!0,get:function(){return r}});let r=(e,t)=>n(34842).normalizeLocalePath(e,t);("function"==typeof t.default||"object"==typeof t.default&&null!==t.default)&&void 0===t.default.__esModule&&(Object.defineProperty(t.default,"__esModule",{value:!0}),Object.assign(t.default,t),e.exports=t.default)},80508:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),Object.defineProperty(t,"useIntersection",{enumerable:!0,get:function(){return a}});let r=n(67294),o=n(10029),l="function"==typeof IntersectionObserver,u=new Map,f=[];function a(e){let{rootRef:t,rootMargin:n,disabled:a}=e,i=a||!l,[c,s]=(0,r.useState)(!1),d=(0,r.useRef)(null),p=(0,r.useCallback)(e=>{d.current=e},[]);(0,r.useEffect)(()=>{if(l){if(i||c)return;let e=d.current;if(e&&e.tagName){let r=function(e,t,n){let{id:r,observer:o,elements:l}=function(e){let t;let n={root:e.root||null,margin:e.rootMargin||""},r=f.find(e=>e.root===n.root&&e.margin===n.margin);if(r&&(t=u.get(r)))return t;let o=new Map,l=new IntersectionObserver(e=>{e.forEach(e=>{let t=o.get(e.target),n=e.isIntersecting||e.intersectionRatio>0;t&&n&&t(n)})},e);return t={id:n,observer:l,elements:o},f.push(n),u.set(n,t),t}(n);return l.set(e,t),o.observe(e),function(){if(l.delete(e),o.unobserve(e),0===l.size){o.disconnect(),u.delete(r);let e=f.findIndex(e=>e.root===r.root&&e.margin===r.margin);e>-1&&f.splice(e,1)}}}(e,e=>e&&s(e),{root:null==t?void 0:t.current,rootMargin:n});return r}}else if(!c){let e=(0,o.requestIdleCallback)(()=>s(!0));return()=>(0,o.cancelIdleCallback)(e)}},[i,n,t,c,d.current]);let b=(0,r.useCallback)(()=>{s(!1)},[]);return[p,c,b]}("function"==typeof t.default||"object"==typeof t.default&&null!==t.default)&&void 0===t.default.__esModule&&(Object.defineProperty(t.default,"__esModule",{value:!0}),Object.assign(t.default,t),e.exports=t.default)},41664:function(e,t,n){e.exports=n(95569)}}]);