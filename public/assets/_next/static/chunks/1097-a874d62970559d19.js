"use strict";(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[1097],{83204:function(e,t,s){var r=s(85893),n=s(90133),a=s(51233),i=s(90948);let o=(0,i.ZP)("header")(e=>{let{theme:t}=e;return{zIndex:9,lineHeight:0,width:"100%",display:"flex",alignItems:"center",padding:t.spacing(3),justifyContent:"space-between",[t.breakpoints.down("sm")]:{display:"none"}}});t.Z=e=>{let{children:t}=e;return(0,r.jsxs)(a.Z,{component:"main",sx:{minHeight:"100vh"},children:[(0,r.jsx)(o,{children:(0,r.jsx)(n.Z,{})}),(0,r.jsx)(r.Fragment,{children:t})]})}},1097:function(e,t,s){s.r(t),s.d(t,{default:function(){return N}});var r=s(85893),n=s(26950),a=s(83204),i=s(91408),o=s(8164),l=s(37719),d=s(47995),c=s(54184),m=s(38725),u=s(24201),p=s(49806),x=s(74205),h=s(60831),b=s(56312),g=s(87357),Z=s(87109),f=s(23795),w=s(51233),j=s(15861),y=s(41664),A=s.n(y),v=s(87536),R=()=>{let e=(0,u.T)(),{loginPage:{data:t}}=(0,i.Ii)(),{appName:s}=(0,p.mX)(),n=(0,v.cI)({resolver:(0,b.F)(x.Z.login),defaultValues:null!=t?t:{userId:"admin",password:"admin790",remember:!0,step:1}}),{handleSubmit:a}=n,{mutate:y,isLoading:R}=h.BG.auth.login.useMutation();return(0,r.jsx)(r.Fragment,{children:(0,r.jsxs)(g.Z,{sx:{p:m.xL},children:[(0,r.jsxs)(j.Z,{variant:"h6",component:"h1",sx:{my:3},textAlign:"center",color:"primary",children:["Login To ",s]}),(0,r.jsxs)(c.lv,{methods:n,onSubmit:a(t=>y(t,{onSuccess(s){"email"in s?e((0,i.RZ)({step:2,email:s.email,data:t})):e((0,i.x4)(s))}})),children:[(0,r.jsxs)(w.Z,{spacing:3,children:[(0,r.jsx)(c.au,{InputProps:{startAdornment:(0,r.jsx)(Z.Z,{position:"start",children:(0,r.jsx)(l.Z,{icon:"iconoir:profile-circle"})})},name:"userId",label:"User Id / Username"}),(0,r.jsx)(c.CC,{InputProps:{startAdornment:(0,r.jsx)(Z.Z,{position:"start",children:(0,r.jsx)(l.Z,{icon:"mdi:password-outline"})})},name:"password",label:"Password"})]}),(0,r.jsxs)(w.Z,{direction:"row",alignItems:"center",justifyContent:"space-between",sx:{my:2},children:[(0,r.jsx)(c.jb,{name:"remember",label:"Remember me"}),(0,r.jsx)(f.Z,{component:A(),variant:"subtitle2",href:o.Zd.forgotPassword,children:"Forgot password?"})]}),(0,r.jsx)(d.ph,{fullWidth:!0,size:"large",type:"submit",variant:"contained",loading:R,children:"Login"})]}),(0,r.jsxs)(j.Z,{variant:"body2",align:"center",sx:{mt:3},children:["Don’t have an account?","  ",(0,r.jsx)(f.Z,{variant:"subtitle2",component:A(),href:o.Zd.register,children:"Get started"})]})]})})},I=s(40471),k=s(31812),P=()=>{let e=(0,u.T)(),{loginPage:t}=(0,i.Ii)(),{email:s,data:n}=t,a={...n,otp:"",step:2},o=(0,v.cI)({defaultValues:a,resolver:(0,b.F)(x.Z.login)}),{handleSubmit:d}=o,{mutate:m,isLoading:p}=h.BG.auth.login.useMutation(),{mutate:Z,isLoading:y}=h.BG.auth.login.useMutation();return(0,r.jsxs)(w.Z,{alignItems:"center",spacing:1,px:{xs:1},children:[(0,r.jsx)(I.Z,{src:"/images/smartphone.svg",alt:"mobile",width:150}),(0,r.jsx)(j.Z,{variant:"h4",children:"Otp Verification"}),(0,r.jsxs)(j.Z,{color:"text.secondary",children:["Enter the verification code sent to"," "]}),(0,r.jsx)(j.Z,{children:s}),(0,r.jsx)(g.Z,{children:(0,r.jsx)(g.Z,{sx:{marginY:1},children:(0,r.jsxs)(c.lv,{methods:o,onSubmit:d(t=>{Z(t,{onSuccess(t){e((0,i.tK)()),"email"in t||e((0,i.x4)(t))}})}),children:[(0,r.jsx)(c.J2,{name:"otp",label:"Otp"}),(0,r.jsx)(k.Z,{type:"submit",sx:{mt:2},loading:y,variant:"contained",size:"large",fullWidth:!0,children:"Verify"})]})})}),(0,r.jsxs)(j.Z,{sx:{color:"text.secondary"},variant:"body2",children:["Didn't get the code?"," ",p?(0,r.jsx)(f.Z,{sx:{cursor:"pointer",opacity:.7},children:"Sending..."}):(0,r.jsx)(f.Z,{onClick:()=>!!n&&m(n),sx:{cursor:"pointer"},children:"Resend"})]}),(0,r.jsx)(g.Z,{children:(0,r.jsxs)(f.Z,{onClick:()=>{e((0,i.RZ)({...t,step:1}))},sx:{cursor:"pointer",alignItems:"center",display:"inline-flex",marginTop:1},variant:"subtitle2",children:[(0,r.jsx)(l.Z,{sx:{width:16,height:16},icon:"eva:arrow-ios-back-fill"}),"Go Back"]})})]})},L=s(78814),_={src:"/_next/static/media/login-bg1.64b8fd12.png",height:1668,width:1788,blurDataURL:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAHCAMAAAACh/xsAAAAYFBMVEVMaXGusU2woHHHtsDIhz70ynuvsbHOq4jEpzFBe/F7IyuIGdSubV8Ardbz1sx4vs3Es3Col6J+e4/OwaqLyMWbhYLAsrXUvcaKaVvLr7LEs7i/rLDAtLl3hpvJycixsLl7tBmwAAAAHHRSTlMAIveyGzo+CREGHR6uOGvkpYLEs13933n5ncfmKFcbmQAAAAlwSFlzAAALEwAACxMBAJqcGAAAAD9JREFUeJxjYGDl4GJnAAEWDh4WEM3JwMvPx8kNZLCJyAqxsgFlhZkkRJkEGBnYmeVkZOQFORjYxZnFpKUkGQE2DwJZxSUgxAAAAABJRU5ErkJggg==",blurWidth:8,blurHeight:7},C=()=>{let e=(0,L.Z)("down","sm");return(0,r.jsxs)(g.Z,{sx:{bgcolor:e=>e.palette.primary.main,zIndex:1,mb:{xs:4,sm:0},...e?{borderBottomLeftRadius:e=>e.spacing(6),borderBottomRightRadius:e=>e.spacing(6),py:1}:{p:6}},children:[(0,r.jsx)(j.Z,{variant:"h2",textAlign:"center",sx:{color:e=>e.palette.primary.contrastText,pt:2,display:{xs:"none",sm:"block"}},children:"Welcome Back"}),(0,r.jsx)(g.Z,{sx:{width:1,minHeight:280,position:"relative"},children:(0,r.jsx)(I.Z,{src:_,alt:"login",sx:{position:"absolute",inset:0},objectFit:"contain"})})]})},E=s(66242),F=s(90948),U=s(11163),q=s(67294);let G=(0,F.ZP)("div")(e=>{let{theme:t}=e;return{[t.breakpoints.up("sm")]:{display:"flex"},[t.breakpoints.down("sm")]:{background:t.palette.background.paper,boxShadow:"0 0 0 100vmax ".concat(t.palette.background.paper)},flexGrow:1}}),M=(0,F.ZP)("div")(e=>{let{theme:t}=e;return{margin:"auto",display:"flex",flexDirection:"column",justifyContent:"center"}}),B=(0,F.ZP)(E.Z)(e=>{let{theme:t}=e;return{maxWidth:900,position:"relative",display:"flex",flexDirection:"row",[t.breakpoints.down("sm")]:{boxShadow:"none",borderRadius:0,flexDirection:"column"},[t.breakpoints.up("sm")]:{marginInline:"auto",minWidth:570,"&:before":{content:"''",width:100,height:100,backgroundColor:t.palette.primary.main,position:"absolute",right:-40,top:-20,borderRadius:t.spacing(1),transform:"translateZ(-1px)"}}}}),D=(0,F.ZP)("div")(e=>{let{theme:t}=e;return{width:"100%",maxWidth:420,margin:"auto",display:"flex",flexDirection:"column",justifyContent:"center",[t.breakpoints.up("sm")]:{padding:t.spacing(4)}}}),J=e=>{let{redirect:t=!0}=e,s=(0,U.useRouter)(),{isAuthenticated:a,loginPage:l}=(0,i.Ii)(),{step:d}=l;return(0,q.useEffect)(()=>{a&&t&&s.replace(o.Zd.dashboard)},[a,t,s]),(0,r.jsx)(n.Z,{title:"Login",sx:{justifyContent:"center"},children:(0,r.jsx)(G,{children:(0,r.jsx)(M,{children:(0,r.jsxs)(B,{children:[(0,r.jsx)(C,{}),(0,r.jsx)(D,{children:1===d?(0,r.jsx)(R,{}):(0,r.jsx)(P,{})})]})})})})};J.getLayout=e=>(0,r.jsx)(a.Z,{children:e});var N=J},74205:function(e,t,s){s.d(t,{F:function(){return o},Z:function(){return h}});var r=s(52260),n=s(99014),a=s(28986),i=s(1604);let o=(0,i.Ry)({email:(0,i.Z_)().nonempty("Email is required").max(100,"Email must be at most 100 characters").email("Please enter a valid email address").toLowerCase(),userName:(0,i.Z_)().nonempty("User name is required").min(2,"User name must be at least 2 characters").max(20,"User name must be at most 20 characters").toLowerCase().refine(e=>(0,n._x)(e),{message:"Username must contain at least an alphabet and numbers only"}),firstName:(0,i.Z_)().nonempty("First name is required").max(20,"First name must be at most 20 characters").refine(e=>a.Z.alphabet.test(e),{message:"Only alphabets are allowed"}),lastName:(0,i.Z_)().nonempty("Last name is required").max(20,"Last name must be at most 20 characters").refine(e=>a.Z.alphabet.test(e),{message:"Only alphabets are allowed"}),password:r.Z.password("Password"),confirmPassword:r.Z.password("Confirm Password"),mobileNumber:(0,i.Z_)().nonempty("Mobile number is required").min(8,"Mobile number must be at least 8 characters").max(16,"Mobile number must be at most 16 characters")}),l=o.extend({referralId:(0,i.Z_)().min(1,"Referral Id is required").transform(Number).or((0,i.Rx)()),step:(0,i.i0)(1).or((0,i.i0)(2)),otp:r.Z.otp.optional(),referralUsername:(0,i.Z_)().optional()}).refine(e=>e.password===e.confirmPassword,{path:["confirmPassword"],message:"Passwords are not matching"}),d=(0,i.Ry)({userId:(0,i.Z_)().nonempty("User Id is required").toLowerCase(),password:(0,i.Z_)().nonempty("Password is required"),remember:(0,i.O7)(),step:(0,i.i0)(1).or((0,i.i0)(2)),otp:r.Z.otp.optional()}),c=(0,i.Ry)({userId:(0,i.Z_)().nonempty("User Id is required")}),m=(0,i.Ry)({userId:(0,i.Rx)().min(1,"User Id is required"),otp:r.Z.otp,password:r.Z.password("Password"),confirmPassword:r.Z.password("Password")}).refine(e=>e.password===e.confirmPassword,{path:["confirmPassword"],message:"Passwords are not matching"}),u=(0,i.Z_)().transform(Number).or((0,i.Rx)()),p=(0,i.Z_)().transform(Number).or((0,i.Rx)()),x=(0,i.Z_)().nonempty("User name is required"),h={register:l,login:d,forgotPassword:c,resetPassword:m,checkReferralId:u,checkUserName:x,getNewUser:p}},17379:function(e,t,s){s.d(t,{Nl:function(){return r},ve:function(){return n}}),s(38725),s(84283),s(66498);let r=e=>24===e.length&&/^[0-9a-fA-F]{24}$/.test(e),n=e=>"object"!=typeof e||Array.isArray(e)?null:e},52260:function(e,t,s){var r=s(1604),n=s(9369),a=s(17379);let i=(0,r.Z_)().length(n.cq,"Otp must be ".concat(n.cq," characters"));t.Z={objectId:e=>(0,r.Z_)().refine(a.Nl,{message:e}),otp:i,password:e=>(0,r.Z_)().nonempty("".concat(e," is required")).min(n.lo,"".concat(e," must be at least ").concat(n.lo," characters")).max(20,"".concat(e," must be at most 20 characters")),table:e=>(0,r.Ry)({paginationModel:(0,r.Ry)({page:(0,r.Rx)(),pageSize:(0,r.Rx)()}),sortModel:(0,r.IX)((0,r.Ry)({field:e,sort:r.z.enum(["asc","desc"]).nullish()})).max(1),searchFilter:(0,r.Z_)()})}}}]);