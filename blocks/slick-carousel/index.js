(()=>{"use strict";var e,t={674:()=>{const e=window.wp.blocks,t=window.React,r=window.wp.i18n,l=window.wp.blockEditor,s=window.wp.data,o=window.wp.components,n=JSON.parse('{"UU":"slick-carousel/slick-carousel"}');(0,e.registerBlockType)(n.UU,{edit:function({attributes:e,setAttributes:n}){const{selectedPosts:i=[]}=e,c=(0,s.useSelect)((e=>e("core").getEntityRecords("postType","progetti",{per_page:-1,_embed:!0})));return(0,t.createElement)(t.Fragment,null,(0,t.createElement)(l.InspectorControls,null,(0,t.createElement)(o.PanelBody,{title:(0,r.__)("Select Posts","custom-carousel")},c&&c.length>0?c.map((e=>(0,t.createElement)(o.PanelRow,{key:e.id},(0,t.createElement)(o.Button,{isSecondary:!0,isPressed:i.includes(e.id),onClick:()=>{return i.includes(e.id)?(t=e.id,void n({selectedPosts:i.filter((e=>e!==t))})):(e=>{i.includes(e)||n({selectedPosts:[...i,e]})})(e.id);var t}},i.includes(e.id)?(0,r.__)("Remove","custom-carousel"):(0,r.__)("Add","custom-carousel")," ",e.title.rendered)))):(0,t.createElement)("p",null,(0,r.__)("No posts available.","custom-carousel")))),(0,t.createElement)("div",{className:"carousel-block"},i.map((e=>{const r=c?.find((t=>t.id===e));if(!r)return null;const l=r._embedded?.["wp:featuredmedia"]?.[0]?.media_details.sizes.thumbnail.source_url;return(0,t.createElement)("div",{key:r.id,className:"carousel-item"},(0,t.createElement)("img",{src:l,alt:r.title.rendered}),(0,t.createElement)("h4",null,r.title.rendered))}))))}})}},r={};function l(e){var s=r[e];if(void 0!==s)return s.exports;var o=r[e]={exports:{}};return t[e](o,o.exports,l),o.exports}l.m=t,e=[],l.O=(t,r,s,o)=>{if(!r){var n=1/0;for(d=0;d<e.length;d++){r=e[d][0],s=e[d][1],o=e[d][2];for(var i=!0,c=0;c<r.length;c++)(!1&o||n>=o)&&Object.keys(l.O).every((e=>l.O[e](r[c])))?r.splice(c--,1):(i=!1,o<n&&(n=o));if(i){e.splice(d--,1);var a=s();void 0!==a&&(t=a)}}return t}o=o||0;for(var d=e.length;d>0&&e[d-1][2]>o;d--)e[d]=e[d-1];e[d]=[r,s,o]},l.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={609:0,21:0};l.O.j=t=>0===e[t];var t=(t,r)=>{var s,o,n=r[0],i=r[1],c=r[2],a=0;if(n.some((t=>0!==e[t]))){for(s in i)l.o(i,s)&&(l.m[s]=i[s]);if(c)var d=c(l)}for(t&&t(r);a<n.length;a++)o=n[a],l.o(e,o)&&e[o]&&e[o][0](),e[o]=0;return l.O(d)},r=self.webpackChunkblock_theme=self.webpackChunkblock_theme||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})();var s=l.O(void 0,[21],(()=>l(674)));s=l.O(s)})();