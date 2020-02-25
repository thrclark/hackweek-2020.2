<link href="../css/admin.css" rel="stylesheet" type="text/css">
<style>
@import url("https://fonts.googleapis.com/css?family=Oxygen+Mono|Oxygen:300,400,700");/*! normalize.css v3.0.2 | MIT License | git.io/normalize */
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%
}
body {
    margin: 0
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
    display: block
}
audio, canvas, progress, video {
    display: inline-block;
    vertical-align: baseline
}
audio:not([controls]) {
    display: none;
    height: 0
}
[hidden], template {
    display: none
}
a {
    background-color: transparent
}
a:active, a:hover {
    outline: 0
}
abbr[title] {
    border-bottom: 1px dotted
}
b, strong {
    font-weight: bold
}
dfn {
    font-style: italic
}
h1 {
    font-size: 2em;
    margin: 0.67em 0
}
mark {
    background: #ff0;
    color: #000
}
small {
    font-size: 80%
}
sub, sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline
}
sup {
    top: -0.5em
}
sub {
    bottom: -0.25em
}
img {
    border: 0
}
svg:not(:root) {
    overflow: hidden
}
figure {
    margin: 1em 40px
}
hr {
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    height: 0
}
pre {
    overflow: auto
}
code, kbd, pre, samp {
    font-family: monospace, monospace;
    font-size: 1em
}
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0
}
button {
    overflow: visible
}
button, select {
    text-transform: none
}
button, html input[type="button"], input[type="reset"], input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer
}
button[disabled], html input[disabled] {
    cursor: default
}
button::-moz-focus-inner, input::-moz-focus-inner {
border:0;
padding:0
}
input {
    line-height: normal
}
input[type="checkbox"], input[type="radio"] {
    box-sizing: border-box;
    padding: 0
}
input[type="number"]::-webkit-inner-spin-button, input[type="number"]::-webkit-outer-spin-button {
height:auto
}
input[type="search"] {
    -webkit-appearance: textfield;
    -moz-box-sizing: content-box;
    -webkit-box-sizing: content-box;
    box-sizing: content-box
}
input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-decoration {
-webkit-appearance:none
}
fieldset {
    border: 1px solid #c0c0c0;
    margin: 0 2px;
    padding: 0.35em 0.625em 0.75em
}
legend {
    border: 0;
    padding: 0
}
textarea {
    overflow: auto
}
optgroup {
    font-weight: bold
}
table {
    border-collapse: collapse;
    border-spacing: 0
}
td, th {
    padding: 0
}
body, h1, h2, h3, h4, h5, h6, p, blockquote, pre, hr, dl, dd, ol, ul, figure {
    margin: 0;
    padding: 0
}
h1, h2, h3, h4, h5, h6, p, blockquote, pre, ul, ol, dl, figure, .highlight {
    margin-bottom: 1rem
}
img {
    max-width: 100%;
    vertical-align: middle
}
figure>img {
    display: block
}
figcaption {
    font-size: 14px
}
.site-header:after, .page:after, .footer-col-wrapper:after {
    content: "";
    display: table;
    clear: both
}
.icon>svg {
    display: inline-block;
    width: 16px;
    height: 16px;
    vertical-align: middle
}
.icon>svg path {
    fill: #060300
}
.rules-list {
    list-style: none;
    margin: 0 !important
}
.rules-list>li:nth-child(odd) a {
    background-color: rgba(0,0,0,0.03)
}
.rules-list>li a {
    display: block;
    border-left: 3px solid transparent;
    text-decoration: none;
    padding: .75rem
}
.rules-list>li a:hover {
    background-color: rgba(0,0,0,0.075);
    border-left-color: #159957
}
.rule-features {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex
}
.feature {
    display: inline-block;
    margin-right: 2px;
    padding: 2px 4px;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border: 1px solid transparent;
    border-radius: .25rem;
    cursor: help
}
.feature:before {
    display: inline-block;
    margin-right: 2px
}
.feature.feature-sm {
    padding: 1px 3px;
    font-size: 75%
}
.feature.feature-ts-only {
    background-color: #FCF8E3;
    border-color: #FAF2CC;
    color: #8A6D3B
}
.feature.feature-ts-only:before {
    content: "\1F4C4"
}
.feature.feature-fixer {
    background-color: #DFF0D8;
    border-color: #D0E9C6;
    color: #3C763D
}
.feature.feature-fixer:before {
    content: "\1f527"
}
.feature.feature-requires-type-info {
    background-color: #F2DEDE;
    border-color: #EBCCCC;
    color: #A94442
}
.feature.feature-requires-type-info:before {
    content: "\2139";
    border-radius: 50%;
    background: #0078D7;
    color: #FFF;
    width: 1em
}
* {
    box-sizing: border-box
}
body {
    padding: 0;
    margin: 0;
    font-family: "Oxygen", sans-serif;
    font-weight: 300;
    font-size: 16px;
    line-height: 1.5;
    color: #060300
}
a {
    color: #ec6100;
    text-decoration: none
}
a:hover {
    text-decoration: underline
}
a:visited {
    color: #d35600
}
h1 {
    font-size: 2.5rem
}
h2 {
    font-size: 2rem
}
h3 {
    font-size: 1.6rem
}
h4 {
    font-size: 1.4rem
}
h5 {
    font-size: 1.2rem
}
h6 {
    font-size: 1rem
}
.site-header {
    border-bottom: 1px solid rgba(255,255,255,0.2);
    padding: 0 20px;
    min-height: 56px
}
.site-title {
    font-size: 26px;
    line-height: 56px;
    margin-bottom: 0;
    float: left
}
.site-title, .site-title:visited {
    color: rgba(255,255,255,0.7)
}
.site-title:hover {
    color: rgba(255,255,255,0.8);
    text-decoration: none
}

@media screen and (max-width: 36em) {
.site-title {
    display: block;
    text-align: left
}
}
.site-nav {
    float: right;
    line-height: 56px
}
.site-nav .page-link {
    line-height: 1.5
}
.site-nav .page-link, .site-nav .page-link:visited {
    color: rgba(255,255,255,0.7)
}
.site-nav .page-link:hover {
    color: rgba(255,255,255,0.8);
    text-decoration: none
}
.site-nav .page-link:not(:first-child) {
    margin-left: 20px
}

@media screen and (max-width: 36em) {
.site-nav .page-link {
    display: block;
    text-align: left
}
.site-nav .page-link:not(:first-child) {
    margin-left: 0
}
}
.btn {
    display: inline-block;
    margin-bottom: 1rem;
    background-color: rgba(255,255,255,0.08);
    border-color: rgba(255,255,255,0.2);
    border-style: solid;
    border-width: 1px;
    border-radius: 0.3rem;
    transition: color 0.2s, background-color 0.2s, border-color 0.2s
}
.btn, .btn:visited {
    color: rgba(255,255,255,0.7)
}
.btn:hover {
    color: rgba(255,255,255,0.8);
    text-decoration: none;
    background-color: rgba(255,255,255,0.2);
    border-color: rgba(255,255,255,0.3)
}

@media screen and (min-width: 64em) {
.btn {
    padding: 0.75rem 1rem
}
}

@media screen and (min-width: 36em) and (max-width: 64em) {
.btn {
    padding: 0.6rem 0.9rem;
    font-size: 0.9rem
}
}

@media screen and (max-width: 36em) {
.btn {
    display: block;
    width: 100%;
    padding: 0.75rem;
    font-size: 0.9rem
}
.btn+.btn {
    margin-top: 1rem;
    margin-left: 0
}
}
.header {
    color: #fff;
    text-align: center;
    background-color: #eb6101;
    background-image: radial-gradient(ellipse at center, #391800 0%, #060300 100%)
}

@media screen and (min-width: 64em) {
.page-header {
    padding: 3rem
}
}

@media screen and (min-width: 36em) and (max-width: 64em) {
.page-header {
    padding: 2rem
}
}

@media screen and (max-width: 36em) {
.page-header {
    padding: 1rem
}
}
.project-name {
    margin-top: 0;
    margin-bottom: 0.1rem
}

@media screen and (min-width: 64em) {
.project-name {
    font-size: 3.25rem
}
}

@media screen and (min-width: 36em) and (max-width: 64em) {
.project-name {
    font-size: 2.25rem
}
}

@media screen and (max-width: 36em) {
.project-name {
    font-size: 1.75rem
}
}
.project-tagline {
    margin-bottom: 2rem;
    font-weight: normal;
    opacity: 0.7
}

@media screen and (min-width: 64em) {
.project-tagline {
    font-size: 1.25rem
}
}

@media screen and (min-width: 36em) and (max-width: 64em) {
.project-tagline {
    font-size: 1.15rem
}
}

@media screen and (max-width: 36em) {
.project-tagline {
    font-size: 1rem
}
}
.main-content :first-child {
    margin-top: 0
}

@media screen and (min-width: 64em) {
.main-content {
    max-width: 68rem;
    padding: 2rem 6rem;
    margin: 0 auto;
    font-size: 1.1rem
}
}

@media screen and (min-width: 36em) and (max-width: 64em) {
.main-content {
    padding: 2rem 4rem;
    font-size: 1.1rem
}
}

@media screen and (max-width: 36em) {
.main-content {
    padding: 2rem 1rem;
    font-size: 1rem
}
}
.main-content img {
    max-width: 100%
}
.main-content h1, .main-content h2, .main-content h3, .main-content h4, .main-content h5, .main-content h6 {
    margin-top: 2rem;
    margin-bottom: 1rem;
    font-weight: normal;
    color: #eb6101
}
.main-content p {
    margin-bottom: 1rem
}
.main-content code {
    padding: 2px 4px;
    font-family: "Oxygen Mono", monospace;
    font-size: 0.9rem;
    color: #383e41;
    background-color: #f3f6fa;
    border-radius: 0.3rem
}
.main-content pre {
    padding: 0.8rem;
    margin-top: 0;
    margin-bottom: 1rem;
    font: 1rem "Oxygen Mono", monospace;
    color: #567482;
    word-wrap: normal;
    background-color: none;
    border: solid 1px #eb6101;
    border-radius: 0.3rem
}
.main-content pre>code {
    padding: 0;
    margin: 0;
    font-size: 0.9rem;
    color: #505050;
    word-break: normal;
    white-space: pre;
    background: transparent;
    border: 0
}
.main-content .highlight {
    margin-bottom: 1rem
}
.main-content .highlight pre {
    margin-bottom: 0;
    word-break: normal
}
.main-content .highlight pre, .main-content pre {
    padding: 0.8rem;
    overflow: auto;
    font-size: 0.9rem;
    line-height: 1.45;
    border-radius: 0.3rem;
    -webkit-overflow-scrolling: touch
}
.main-content pre code, .main-content pre tt {
    display: inline;
    max-width: initial;
    padding: 0;
    margin: 0;
    overflow: initial;
    line-height: inherit;
    word-wrap: normal;
    background-color: transparent;
    border: 0
}
.main-content pre code:before, .main-content pre code:after, .main-content pre tt:before, .main-content pre tt:after {
    content: normal
}
.main-content ul, .main-content ol {
    margin-top: 0;
    margin-left: 30px;
    margin-bottom: 1rem
}
.main-content ul ul, .main-content ul ol, .main-content ol ul, .main-content ol ol {
    margin-bottom: 0
}
.main-content blockquote {
    padding: 0 1rem;
    margin-left: 0;
    color: #819198;
    border-left: 0.3rem solid #dce6f0
}
.main-content blockquote>:first-child {
    margin-top: 0
}
.main-content blockquote>:last-child {
    margin-bottom: 0
}
.main-content table {
    display: block;
    width: 100%;
    overflow: auto;
    word-break: normal;
    word-break: keep-all;
    -webkit-overflow-scrolling: touch
}
.main-content table th {
    font-weight: bold
}
.main-content table th, .main-content table td {
    padding: 0.5rem 1rem;
    border: 1px solid #e9ebec
}
.main-content dl {
    padding: 0
}
.main-content dl dt {
    padding: 0;
    margin-top: 1rem;
    font-size: 1rem;
    font-weight: bold
}
.main-content dl dd {
    padding: 0;
    margin-bottom: 1rem
}
.main-content hr {
    height: 2px;
    padding: 0;
    margin: 1rem 0;
    background-color: #eff0f1;
    border: 0
}
.page {
    width: 100%
}
.page-content {
    width: 80%;
    padding: 1rem;
    float: left
}
.page-sidebar {
    width: 20%;
    padding: 1rem;
    float: left
}
.page-sidebar .active {
    font-style: italic
}
.sidebar-title {
    border-bottom: 1px solid #eb6101
}
ul.sidebar-links {
    list-style: none;
    margin-left: 0
}
ul.sidebar-links h6 {
    margin-bottom: 0.33rem
}
ul.post-list {
    margin-left: 0;
    list-style: none
}
ul.post-list>li {
    margin-bottom: 1rem
}
.post-meta {
    font-size: 14px;
    color: #828282;
    font-style: italic
}
.post-link {
    display: inline-block;
    color: inherit
}
.post-header {
    margin-bottom: 2rem
}
.post-title {
    letter-spacing: -1px;
    line-height: 1
}
.site-footer {
    padding-top: 2rem;
    margin-top: 2rem;
    border-top: solid 1px #eff0f1;
    font-size: 0.9rem
}
ul.contact-list, ul.social-media-list {
    list-style: none;
    margin-left: 0
}
.footer-col {
    float: left
}
.footer-col-2 {
    float: right
}

@media screen and (max-width: 36em) {
.footer-col-2 {
    float: left
}
}
.highlight {
    background: #fff
}
.highlight .c {
    color: #998;
    font-style: italic
}
.highlight .err {
    color: #a61717;
    background-color: #e3d2d2
}
.highlight .k {
    font-weight: bold
}
.highlight .o {
    font-weight: bold
}
.highlight .cm {
    color: #998;
    font-style: italic
}
.highlight .cp {
    color: #999;
    font-weight: bold
}
.highlight .c1 {
    color: #998;
    font-style: italic
}
.highlight .cs {
    color: #999;
    font-weight: bold;
    font-style: italic
}
.highlight .gd {
    color: #000;
    background-color: #fdd
}
.highlight .gd .x {
    color: #000;
    background-color: #faa
}
.highlight .ge {
    font-style: italic
}
.highlight .gr {
    color: #a00
}
.highlight .gh {
    color: #999
}
.highlight .gi {
    color: #000;
    background-color: #dfd
}
.highlight .gi .x {
    color: #000;
    background-color: #afa
}
.highlight .go {
    color: #888
}
.highlight .gp {
    color: #555
}
.highlight .gs {
    font-weight: bold
}
.highlight .gu {
    color: #aaa
}
.highlight .gt {
    color: #a00
}
.highlight .kc {
    font-weight: bold
}
.highlight .kd {
    font-weight: bold
}
.highlight .kp {
    font-weight: bold
}
.highlight .kr {
    font-weight: bold
}
.highlight .kt {
    color: #458;
    font-weight: bold
}
.highlight .m {
    color: #099
}
.highlight .s {
    color: #eb6101
}
.highlight .na {
    color: teal
}
.highlight .nb {
    color: #0086B3
}
.highlight .nc {
    color: #458;
    font-weight: bold
}
.highlight .no {
    color: teal
}
.highlight .ni {
    color: purple
}
.highlight .ne {
    color: #900;
    font-weight: bold
}
.highlight .nf {
    color: #900;
    font-weight: bold
}
.highlight .nn {
    color: #555
}
.highlight .nt {
    color: navy
}
.highlight .nv {
    color: teal
}
.highlight .ow {
    font-weight: bold
}
.highlight .w {
    color: #bbb
}
.highlight .mf {
    color: #099
}
.highlight .mh {
    color: #099
}
.highlight .mi {
    color: #099
}
.highlight .mo {
    color: #099
}
.highlight .sb {
    color: #eb6101
}
.highlight .sc {
    color: #eb6101
}
.highlight .sd {
    color: #eb6101
}
.highlight .s2 {
    color: #eb6101
}
.highlight .se {
    color: #eb6101
}
.highlight .sh {
    color: #eb6101
}
.highlight .si {
    color: #eb6101
}
.highlight .sx {
    color: #eb6101
}
.highlight .sr {
    color: #009926
}
.highlight .s1 {
    color: #eb6101
}
.highlight .ss {
    color: #990073
}
.highlight .bp {
    color: #999
}
.highlight .vc {
    color: teal
}
.highlight .vg {
    color: teal
}
.highlight .vi {
    color: teal
}
.highlight .il {
    color: #099
}
:root {
--num-cols: 4
}

@media screen and (max-width: 500px) {
:root {
--num-cols: 2
}
}
.btn.btn-demo {
    background-color: transparent;
    border-color: transparent;
    color: #eb6101
}
.btn.btn-demo:hover {
    text-decoration: none;
    border-color: #eb6101
}
select.btn.btn-demo {
    border-color: #eb6101;
    background-color: white
}
.control-container {
    border-style: solid;
    border-width: 1px;
    border-radius: 0.3rem;
    padding: 0.75rem 1rem;
    color: #d25701;
    border-color: #d25701;
    background-color: rgba(210,87,1,0.05);
    margin: 0.5rem !important;
    text-align: center;
    display: inline-block
}
.button.group {
    font-size: 1.0rem;
    display: grid;
    grid-template-columns: repeat(var(--num-cols), auto)
}
.button.group h4 {
    font-size: 1.2rem
}
.centered {
    text-align: center
}
.demo-canvas {
    position: relative;
    width: 100vw;
    left: calc(-50vw + 50%)
}
.error-container {
    border-style: solid;
    border-width: 1px;
    border-radius: 0.3rem;
    padding: 0.75rem 1rem;
    color: #e60000;
    border-color: #e60000;
    background-color: rgba(230,0,0,0.05)
}
</style>
