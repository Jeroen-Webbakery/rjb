<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>


    <div data-barba="container" data-barba-namespace="header">
        <div class="logo_block">
            <a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>"
               title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url">

                <?php if (get_field('logo_kleur') === true) : ?>
                    <svg class="logo_white" width="442px" height="65px" viewBox="0 0 442 65" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                        <g id="Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="01_Home" transform="translate(-90.000000, -71.000000)"
                               fill="#000000">
                                <g id="logo/black" transform="translate(90.000000, 71.000000)">
                                    <path d="M0.153161392,0.000419620253 L0.153161392,0.0223331224 L-0.000233122363,0.0223331224 L-0.000233122363,64.2438141 L63.5465918,64.2438141 L64.9527859,64.2438141 L128.499145,64.2438141 L128.499145,64.2219006 L192.191438,64.2219006 L441.951744,64.2219006 L441.951744,0.000419620253 L0.153161392,0.000419620253 Z M192.191438,63.3929175 L441.122761,63.3929175 L441.122761,0.828936498 L192.191438,0.828936498 L192.191438,63.3929175 Z M128.499145,63.3929175 L191.362455,63.3929175 L191.362455,0.828936498 L128.499145,0.828936498 L128.499145,63.3929175 Z M64.9527859,63.3933838 L127.238885,63.3933838 L127.238885,0.851316245 L64.9527859,0.851316245 L64.9527859,63.3933838 Z M0.98167827,63.3933838 L63.5461255,63.3933838 L63.5461255,0.851316245 L0.98167827,0.851316245 L0.98167827,63.3933838 Z"
                                          id="Fill-1"></path>
                                    <path d="M360.705383,29.9575757 L361.900368,33.3690884 L359.452117,33.3690884 L360.705383,29.9575757 Z M359.103366,34.2857255 L362.225341,34.2857255 L363.118666,36.7922572 L364.267493,36.7922572 L361.285392,28.5998711 L360.148221,28.5998711 L357.026712,36.7922572 L358.187195,36.7922572 L359.103366,34.2857255 Z"
                                          id="Fill-2"></path>
                                    <polygon id="Fill-3"
                                             points="367.400844 30.131485 371.891247 36.7922572 372.877354 36.7922572 372.877354 28.5998711 371.891247 28.5998711 371.937405 35.1678605 367.49316 28.5998711 366.472551 28.5998711 366.472551 36.7922572 367.49316 36.7922572"></polygon>
                                    <polygon id="Fill-4"
                                             points="376.207741 36.7923038 377.309943 36.7923038 377.309943 28.5999177 376.207741 28.5999177"></polygon>
                                    <path d="M392.092698,36.1539681 C391.488911,36.1539681 390.874401,36.014561 390.410021,35.6084618 C389.794578,35.0634217 389.760542,34.3440061 389.748886,34.0306897 L388.576747,34.181753 C388.761846,36.8850399 391.303812,37.0011348 392.045608,37.0011348 C392.545422,37.0011348 393.484439,36.9545103 394.274257,36.4206601 C395.004863,35.9217783 395.318646,35.2023627 395.318646,34.4367888 C395.318646,33.8912825 395.132614,32.9047086 393.90266,32.3941707 C393.578154,32.2552297 393.241525,32.185293 392.614426,32.034696 L391.709911,31.8025061 C391.001219,31.640253 390.096705,31.4313753 390.096705,30.5263943 C390.096705,29.6442593 390.967184,29.2381601 391.952825,29.2381601 C392.475019,29.2381601 392.997213,29.3309428 393.415435,29.6326032 C394.029945,30.0853268 394.064914,30.7352719 394.077036,30.9903078 L395.178772,30.9208373 C395.097646,30.4219555 394.935392,29.5864449 394.122728,28.9943141 C393.380466,28.4492741 392.498331,28.3909935 391.918789,28.3909935 C391.349504,28.3909935 390.456179,28.4609302 389.725574,29.0875631 C389.412257,29.3542551 388.97119,29.864793 388.97119,30.6769914 C388.97119,32.3713247 390.711215,32.7657677 391.895011,33.0091475 L392.579924,33.1485546 C393.380466,33.3112741 394.13485,33.5663099 394.13485,34.5179154 C394.13485,35.5851496 393.252715,36.1539681 392.092698,36.1539681"
                                          id="Fill-5"></path>
                                    <polygon id="Fill-7"
                                             points="386.429923 35.8407449 381.695674 35.8407449 381.695674 33.0558652 385.687195 33.0558652 385.687195 32.0926036 381.695674 32.0926036 381.695674 29.5632259 386.290982 29.5632259 386.290982 28.5999643 380.63963 28.5999643 380.63963 36.7923504 386.429923 36.7923504"></polygon>
                                    <polygon id="Fill-9"
                                             points="307.453801 32.9399101 311.329694 32.9399101 311.329694 31.9878384 307.453801 31.9878384 307.453801 29.5633658 311.619698 29.5633658 311.619698 28.5884481 306.363255 28.5884481 306.363255 36.7924903 307.453801 36.7924903"></polygon>
                                    <path d="M266.180186,29.2732217 C268.071741,29.2732217 269.104007,30.6421162 269.115663,32.6264538 C269.127319,34.309131 268.396247,36.1424053 266.191842,36.1424053 C264.079754,36.1424053 263.232587,34.4252259 263.232587,32.7075804 C263.232587,30.86265 264.114722,29.2732217 266.180186,29.2732217 M266.145218,37.0012281 C268.860627,37.0012281 270.299458,35.0747049 270.299458,32.6147977 C270.299458,29.9460129 268.477374,28.3910867 266.180186,28.3910867 C264.149691,28.3910867 262.049724,29.6560086 262.049724,32.6959243 C262.049724,35.2490804 263.650342,37.0012281 266.145218,37.0012281"
                                          id="Fill-11"></path>
                                    <path d="M245.909031,37.0013213 C247.02289,37.0013213 248.217875,36.6413804 248.902789,35.6436167 L248.902789,36.7924437 L249.842738,36.7924437 L249.842738,32.4642939 L246.036316,32.4642939 L246.036316,33.3804648 L248.902789,33.3804648 C248.937291,35.550834 247.057858,36.0497158 246.047972,36.0497158 C243.820255,36.0497158 243.019713,34.2280977 243.019713,32.6848276 C243.019713,31.1993719 243.796943,29.296161 246.09413,29.296161 C247.173953,29.296161 247.822966,29.7488846 248.148405,30.0971694 C248.484567,30.4445217 248.623974,30.816585 248.716757,31.0599648 L249.842738,30.7583044 C249.714987,30.4916124 249.459019,29.9577622 248.913978,29.4355681 C248.136282,28.7278086 247.104016,28.39118 246.059628,28.39118 C243.077527,28.39118 241.823795,30.7121462 241.823795,32.7999901 C241.823795,35.2253951 243.378721,37.0013213 245.909031,37.0013213"
                                          id="Fill-13"></path>
                                    <path d="M254.286423,29.504992 L256.398512,29.504992 C257.025145,29.504992 257.558995,29.4938021 257.98794,29.8532768 C258.45232,30.2360637 258.475632,30.7932262 258.475632,31.0021038 C258.475632,31.5937684 258.208474,32.1392747 257.454556,32.3248401 C257.129584,32.4059667 256.804611,32.4059667 256.456326,32.4059667 L254.286423,32.4059667 L254.286423,29.504992 Z M254.286423,33.3114139 L256.398512,33.3114139 L258.626229,36.792397 L259.926119,36.792397 L257.628465,33.2414772 C258.022908,33.1720068 259.566178,32.9048485 259.566178,30.9904477 C259.566178,30.2360637 259.311143,29.5516165 258.707356,29.0988928 C258.069533,28.6116671 257.396276,28.6116671 256.258638,28.600011 L253.219189,28.600011 L253.219189,36.792397 L254.286423,36.792397 L254.286423,33.3114139 Z"
                                          id="Fill-15"></path>
                                    <polygon id="Fill-23"
                                             points="339.885598 30.0272327 342.427098 36.7924437 343.274265 36.7924437 345.861457 29.9227939 345.710859 36.7924437 346.790216 36.7924437 346.790216 28.6000576 345.385887 28.6000576 342.856043 35.3186441 340.338788 28.6000576 338.933992 28.6000576 338.933992 36.7924437 340.001693 36.7924437"></polygon>
                                    <path d="M276.20538,36.9894787 C278.120247,36.9894787 279.036885,35.87562 279.268608,34.8890462 C279.362323,34.5179154 279.362323,34.1579745 279.373047,33.821812 L279.373047,28.588215 L278.271311,28.588215 L278.271311,33.4968395 C278.259188,34.0190335 278.259188,34.3556622 278.166406,34.7151369 C277.923492,35.6084618 277.168642,36.0728416 276.20538,36.0728416 C275.880408,36.0728416 275.160992,36.0378732 274.673766,35.4345525 C274.244355,34.9123584 274.244355,34.2740694 274.256011,33.5206179 L274.256011,28.588215 L273.153791,28.588215 L273.153791,33.6707487 C273.153791,34.5878521 273.142619,35.2023627 273.688125,35.898466 C274.465355,36.896696 275.60206,36.9894787 276.20538,36.9894787"
                                          id="Fill-25"></path>
                                    <path d="M351.152868,29.5398205 L353.682246,29.5398205 C354.065032,29.5398205 354.471132,29.5514766 354.831539,29.8531369 C355.213859,30.1781095 355.26095,30.619177 355.26095,30.8975251 C355.26095,31.3036243 355.144855,31.7097234 354.866041,31.9880715 C354.494444,32.3596686 354.065032,32.3596686 353.4384,32.3596686 L351.152868,32.3596686 L351.152868,29.5398205 Z M351.152868,33.3224639 L353.519992,33.3224639 C354.018874,33.3224639 354.42544,33.3224639 354.831539,33.1951791 C355.922085,32.8585504 356.339374,31.8141622 356.339374,30.9208373 C356.339374,29.9692319 355.898773,29.075907 354.935511,28.7392783 C354.5061,28.5998711 354.04172,28.5998711 353.635621,28.5998711 L350.096824,28.5998711 L350.096824,36.7922572 L351.152868,36.7922572 L351.152868,33.3224639 Z"
                                          id="Fill-27"></path>
                                    <path d="M321.783973,37.0013213 C324.16322,37.0013213 325.473834,35.3764584 325.822118,33.8219985 L324.627133,33.6825914 C324.372097,35.4114268 323.130488,36.0963403 321.911724,36.0963403 C320.020635,36.0963403 318.987437,34.6686989 318.987437,32.6382032 C318.987437,31.8026926 319.150623,30.9438698 319.67235,30.2943909 C320.205734,29.6094774 321.053367,29.2616589 321.923846,29.2616589 C322.956578,29.2616589 323.675994,29.7255724 324.069971,30.2132643 C324.372097,30.5610829 324.453224,30.8282411 324.557196,31.1299015 L325.659865,30.8977116 C325.462644,30.3522053 324.766074,28.39118 321.935036,28.39118 C319.115188,28.39118 317.780796,30.3755175 317.780796,32.6960175 C317.780796,34.9703593 319.08022,37.0013213 321.783973,37.0013213"
                                          id="Fill-29"></path>
                                    <path d="M332.041357,29.2732217 C333.933378,29.2732217 334.965644,30.6421162 334.977766,32.6264538 C334.988956,34.309131 334.25835,36.1424053 332.053013,36.1424053 C329.941391,36.1424053 329.09469,34.4252259 329.09469,32.7075804 C329.09469,30.86265 329.975893,29.2732217 332.041357,29.2732217 M332.007321,37.0012281 C334.721798,37.0012281 336.160629,35.0747049 336.160629,32.6147977 C336.160629,29.9460129 334.339477,28.3910867 332.041357,28.3910867 C330.011327,28.3910867 327.910895,29.6560086 327.910895,32.6959243 C327.910895,35.2490804 329.511979,37.0012281 332.007321,37.0012281"
                                          id="Fill-31"></path>
                                    <path d="M283.852447,29.5398205 L286.381824,29.5398205 C286.764611,29.5398205 287.17071,29.5514766 287.530651,29.8531369 C287.913438,30.1781095 287.960063,30.619177 287.960063,30.8975251 C287.960063,31.3036243 287.843968,31.7097234 287.56562,31.9880715 C287.194023,32.3596686 286.764611,32.3596686 286.137512,32.3596686 L283.852447,32.3596686 L283.852447,29.5398205 Z M283.852447,33.3224639 L286.219571,33.3224639 C286.717987,33.3224639 287.124552,33.3224639 287.530651,33.1951791 C288.621198,32.8585504 289.038953,31.8141622 289.038953,30.9208373 C289.038953,29.9692319 288.597885,29.075907 287.63509,28.7392783 C287.205679,28.5998711 286.741299,28.5998711 286.3352,28.5998711 L282.796402,28.5998711 L282.796402,36.7922572 L283.852447,36.7922572 L283.852447,33.3224639 Z"
                                          id="Fill-33"></path>
                                    <path d="M299.354618,29.2732217 C301.246172,29.2732217 302.278438,30.6421162 302.290561,32.6264538 C302.30175,34.309131 301.571145,36.1424053 299.365807,36.1424053 C297.254185,36.1424053 296.407485,34.4252259 296.407485,32.7075804 C296.407485,30.86265 297.289153,29.2732217 299.354618,29.2732217 M299.319649,37.0012281 C302.035058,37.0012281 303.47389,35.0747049 303.47389,32.6147977 C303.47389,29.9460129 301.652272,28.3910867 299.354618,28.3910867 C297.324122,28.3910867 295.223689,29.6560086 295.223689,32.6959243 C295.223689,35.2490804 296.82524,37.0012281 299.319649,37.0012281"
                                          id="Fill-35"></path>
                                    <path d="M94.1163468,15.8509219 L94.1163468,16.0761181 L98.3927435,16.0761181 L98.3927435,34.8471308 C98.3927435,41.104135 99.5630177,47.5858692 93.4407582,47.5858692 C91.054984,47.5858692 89.8847097,46.2813165 89.8847097,44.8853797 C89.8847097,43.3999241 90.8750135,43.0847426 90.8750135,41.7792574 C90.8750135,40.5189979 90.0199207,39.9786203 89.0296169,39.9786203 C87.5889207,39.9786203 86.6886021,41.2841055 86.6886021,42.8143207 C86.6886021,45.2905464 89.0296169,47.8110654 93.4407582,47.8110654 C98.9326549,47.8110654 102.7139,45.6504873 102.7139,34.8471308 L102.7139,16.0761181 L106.58513,16.0761181 L106.58513,15.8509219 L94.1163468,15.8509219 Z"
                                          id="Fill-37"></path>
                                    <path d="M26.3678643,16.0760715 L30.5095162,16.0760715 C36.0009466,16.0760715 37.0364762,19.63212 37.0364762,23.8637572 C37.0364762,27.5097909 35.9561871,31.02108 31.1394129,31.02108 L26.3678643,31.02108 L26.3678643,16.0760715 Z M17.9955078,47.1358964 L17.9955078,47.3610926 L30.4642905,47.3610926 L30.4642905,47.1358964 L26.3678643,47.1358964 L26.3678643,31.2458099 L30.1491091,31.2458099 C35.0106428,31.2458099 38.2067504,31.9209323 38.2067504,38.4031327 C38.2067504,46.4603078 40.4125542,47.9914555 44.9589065,47.9914555 C47.6598622,47.9914555 48.7401513,46.3250968 48.8753622,46.1455926 L48.7401513,45.9656222 C48.5149551,46.2808036 47.434666,47.4963036 45.9492103,47.4963036 C43.4282251,47.4963036 42.9782989,45.334793 42.9782989,40.4737255 C42.9782989,33.9467656 39.1970542,31.5609914 32.9852757,31.1110652 C37.9815542,30.7058985 41.5828285,28.454869 41.5828285,23.8637572 C41.5828285,18.1466643 36.9912504,15.8508753 30.4642905,15.8508753 L17.9955078,15.8508753 L17.9955078,16.0760715 L22.0914677,16.0760715 L22.0914677,47.1358964 L17.9955078,47.1358964 Z"
                                          id="Fill-39"></path>
                                    <path d="M159.64308,47.1139363 L155.637105,47.1139363 L155.637105,30.5487274 L159.64308,30.5487274 C165.720114,30.5487274 167.250795,34.4199574 167.250795,38.6520608 C167.250795,42.2980945 166.755643,47.1139363 159.64308,47.1139363 L159.64308,47.1139363 Z M155.637105,16.0541114 L158.472806,16.0541114 C164.504614,16.0541114 165.630128,19.2054595 165.630128,23.3918709 C165.630128,27.0379046 164.054688,30.368757 158.698002,30.368757 L155.637105,30.368757 L155.637105,16.0541114 Z M161.263747,30.368757 C166.440462,29.919297 169.951285,27.8034785 169.951285,23.3918709 C169.951285,17.7200038 165.540143,15.8289152 158.472806,15.8289152 L147.219057,15.8289152 L147.219057,16.0541114 L151.315483,16.0541114 L151.315483,47.1139363 L147.219057,47.1139363 L147.219057,47.3391325 L159.82305,47.3391325 C167.970677,47.3391325 172.022344,43.7383245 172.022344,38.6520608 C172.022344,33.3396684 167.610736,30.7286979 161.263747,30.368757 L161.263747,30.368757 Z"
                                          id="Fill-41"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                <?php else : ?>
                    <svg class="logo_black" width="442px" height="65px" viewBox="0 0 442 65" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                        <g id="Desktop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="01_Home" transform="translate(-90.000000, -71.000000)"
                               fill="#000000">
                                <g id="logo/black" transform="translate(90.000000, 71.000000)">
                                    <path d="M0.153161392,0.000419620253 L0.153161392,0.0223331224 L-0.000233122363,0.0223331224 L-0.000233122363,64.2438141 L63.5465918,64.2438141 L64.9527859,64.2438141 L128.499145,64.2438141 L128.499145,64.2219006 L192.191438,64.2219006 L441.951744,64.2219006 L441.951744,0.000419620253 L0.153161392,0.000419620253 Z M192.191438,63.3929175 L441.122761,63.3929175 L441.122761,0.828936498 L192.191438,0.828936498 L192.191438,63.3929175 Z M128.499145,63.3929175 L191.362455,63.3929175 L191.362455,0.828936498 L128.499145,0.828936498 L128.499145,63.3929175 Z M64.9527859,63.3933838 L127.238885,63.3933838 L127.238885,0.851316245 L64.9527859,0.851316245 L64.9527859,63.3933838 Z M0.98167827,63.3933838 L63.5461255,63.3933838 L63.5461255,0.851316245 L0.98167827,0.851316245 L0.98167827,63.3933838 Z"
                                          id="Fill-1"></path>
                                    <path d="M360.705383,29.9575757 L361.900368,33.3690884 L359.452117,33.3690884 L360.705383,29.9575757 Z M359.103366,34.2857255 L362.225341,34.2857255 L363.118666,36.7922572 L364.267493,36.7922572 L361.285392,28.5998711 L360.148221,28.5998711 L357.026712,36.7922572 L358.187195,36.7922572 L359.103366,34.2857255 Z"
                                          id="Fill-2"></path>
                                    <polygon id="Fill-3"
                                             points="367.400844 30.131485 371.891247 36.7922572 372.877354 36.7922572 372.877354 28.5998711 371.891247 28.5998711 371.937405 35.1678605 367.49316 28.5998711 366.472551 28.5998711 366.472551 36.7922572 367.49316 36.7922572"></polygon>
                                    <polygon id="Fill-4"
                                             points="376.207741 36.7923038 377.309943 36.7923038 377.309943 28.5999177 376.207741 28.5999177"></polygon>
                                    <path d="M392.092698,36.1539681 C391.488911,36.1539681 390.874401,36.014561 390.410021,35.6084618 C389.794578,35.0634217 389.760542,34.3440061 389.748886,34.0306897 L388.576747,34.181753 C388.761846,36.8850399 391.303812,37.0011348 392.045608,37.0011348 C392.545422,37.0011348 393.484439,36.9545103 394.274257,36.4206601 C395.004863,35.9217783 395.318646,35.2023627 395.318646,34.4367888 C395.318646,33.8912825 395.132614,32.9047086 393.90266,32.3941707 C393.578154,32.2552297 393.241525,32.185293 392.614426,32.034696 L391.709911,31.8025061 C391.001219,31.640253 390.096705,31.4313753 390.096705,30.5263943 C390.096705,29.6442593 390.967184,29.2381601 391.952825,29.2381601 C392.475019,29.2381601 392.997213,29.3309428 393.415435,29.6326032 C394.029945,30.0853268 394.064914,30.7352719 394.077036,30.9903078 L395.178772,30.9208373 C395.097646,30.4219555 394.935392,29.5864449 394.122728,28.9943141 C393.380466,28.4492741 392.498331,28.3909935 391.918789,28.3909935 C391.349504,28.3909935 390.456179,28.4609302 389.725574,29.0875631 C389.412257,29.3542551 388.97119,29.864793 388.97119,30.6769914 C388.97119,32.3713247 390.711215,32.7657677 391.895011,33.0091475 L392.579924,33.1485546 C393.380466,33.3112741 394.13485,33.5663099 394.13485,34.5179154 C394.13485,35.5851496 393.252715,36.1539681 392.092698,36.1539681"
                                          id="Fill-5"></path>
                                    <polygon id="Fill-7"
                                             points="386.429923 35.8407449 381.695674 35.8407449 381.695674 33.0558652 385.687195 33.0558652 385.687195 32.0926036 381.695674 32.0926036 381.695674 29.5632259 386.290982 29.5632259 386.290982 28.5999643 380.63963 28.5999643 380.63963 36.7923504 386.429923 36.7923504"></polygon>
                                    <polygon id="Fill-9"
                                             points="307.453801 32.9399101 311.329694 32.9399101 311.329694 31.9878384 307.453801 31.9878384 307.453801 29.5633658 311.619698 29.5633658 311.619698 28.5884481 306.363255 28.5884481 306.363255 36.7924903 307.453801 36.7924903"></polygon>
                                    <path d="M266.180186,29.2732217 C268.071741,29.2732217 269.104007,30.6421162 269.115663,32.6264538 C269.127319,34.309131 268.396247,36.1424053 266.191842,36.1424053 C264.079754,36.1424053 263.232587,34.4252259 263.232587,32.7075804 C263.232587,30.86265 264.114722,29.2732217 266.180186,29.2732217 M266.145218,37.0012281 C268.860627,37.0012281 270.299458,35.0747049 270.299458,32.6147977 C270.299458,29.9460129 268.477374,28.3910867 266.180186,28.3910867 C264.149691,28.3910867 262.049724,29.6560086 262.049724,32.6959243 C262.049724,35.2490804 263.650342,37.0012281 266.145218,37.0012281"
                                          id="Fill-11"></path>
                                    <path d="M245.909031,37.0013213 C247.02289,37.0013213 248.217875,36.6413804 248.902789,35.6436167 L248.902789,36.7924437 L249.842738,36.7924437 L249.842738,32.4642939 L246.036316,32.4642939 L246.036316,33.3804648 L248.902789,33.3804648 C248.937291,35.550834 247.057858,36.0497158 246.047972,36.0497158 C243.820255,36.0497158 243.019713,34.2280977 243.019713,32.6848276 C243.019713,31.1993719 243.796943,29.296161 246.09413,29.296161 C247.173953,29.296161 247.822966,29.7488846 248.148405,30.0971694 C248.484567,30.4445217 248.623974,30.816585 248.716757,31.0599648 L249.842738,30.7583044 C249.714987,30.4916124 249.459019,29.9577622 248.913978,29.4355681 C248.136282,28.7278086 247.104016,28.39118 246.059628,28.39118 C243.077527,28.39118 241.823795,30.7121462 241.823795,32.7999901 C241.823795,35.2253951 243.378721,37.0013213 245.909031,37.0013213"
                                          id="Fill-13"></path>
                                    <path d="M254.286423,29.504992 L256.398512,29.504992 C257.025145,29.504992 257.558995,29.4938021 257.98794,29.8532768 C258.45232,30.2360637 258.475632,30.7932262 258.475632,31.0021038 C258.475632,31.5937684 258.208474,32.1392747 257.454556,32.3248401 C257.129584,32.4059667 256.804611,32.4059667 256.456326,32.4059667 L254.286423,32.4059667 L254.286423,29.504992 Z M254.286423,33.3114139 L256.398512,33.3114139 L258.626229,36.792397 L259.926119,36.792397 L257.628465,33.2414772 C258.022908,33.1720068 259.566178,32.9048485 259.566178,30.9904477 C259.566178,30.2360637 259.311143,29.5516165 258.707356,29.0988928 C258.069533,28.6116671 257.396276,28.6116671 256.258638,28.600011 L253.219189,28.600011 L253.219189,36.792397 L254.286423,36.792397 L254.286423,33.3114139 Z"
                                          id="Fill-15"></path>
                                    <polygon id="Fill-23"
                                             points="339.885598 30.0272327 342.427098 36.7924437 343.274265 36.7924437 345.861457 29.9227939 345.710859 36.7924437 346.790216 36.7924437 346.790216 28.6000576 345.385887 28.6000576 342.856043 35.3186441 340.338788 28.6000576 338.933992 28.6000576 338.933992 36.7924437 340.001693 36.7924437"></polygon>
                                    <path d="M276.20538,36.9894787 C278.120247,36.9894787 279.036885,35.87562 279.268608,34.8890462 C279.362323,34.5179154 279.362323,34.1579745 279.373047,33.821812 L279.373047,28.588215 L278.271311,28.588215 L278.271311,33.4968395 C278.259188,34.0190335 278.259188,34.3556622 278.166406,34.7151369 C277.923492,35.6084618 277.168642,36.0728416 276.20538,36.0728416 C275.880408,36.0728416 275.160992,36.0378732 274.673766,35.4345525 C274.244355,34.9123584 274.244355,34.2740694 274.256011,33.5206179 L274.256011,28.588215 L273.153791,28.588215 L273.153791,33.6707487 C273.153791,34.5878521 273.142619,35.2023627 273.688125,35.898466 C274.465355,36.896696 275.60206,36.9894787 276.20538,36.9894787"
                                          id="Fill-25"></path>
                                    <path d="M351.152868,29.5398205 L353.682246,29.5398205 C354.065032,29.5398205 354.471132,29.5514766 354.831539,29.8531369 C355.213859,30.1781095 355.26095,30.619177 355.26095,30.8975251 C355.26095,31.3036243 355.144855,31.7097234 354.866041,31.9880715 C354.494444,32.3596686 354.065032,32.3596686 353.4384,32.3596686 L351.152868,32.3596686 L351.152868,29.5398205 Z M351.152868,33.3224639 L353.519992,33.3224639 C354.018874,33.3224639 354.42544,33.3224639 354.831539,33.1951791 C355.922085,32.8585504 356.339374,31.8141622 356.339374,30.9208373 C356.339374,29.9692319 355.898773,29.075907 354.935511,28.7392783 C354.5061,28.5998711 354.04172,28.5998711 353.635621,28.5998711 L350.096824,28.5998711 L350.096824,36.7922572 L351.152868,36.7922572 L351.152868,33.3224639 Z"
                                          id="Fill-27"></path>
                                    <path d="M321.783973,37.0013213 C324.16322,37.0013213 325.473834,35.3764584 325.822118,33.8219985 L324.627133,33.6825914 C324.372097,35.4114268 323.130488,36.0963403 321.911724,36.0963403 C320.020635,36.0963403 318.987437,34.6686989 318.987437,32.6382032 C318.987437,31.8026926 319.150623,30.9438698 319.67235,30.2943909 C320.205734,29.6094774 321.053367,29.2616589 321.923846,29.2616589 C322.956578,29.2616589 323.675994,29.7255724 324.069971,30.2132643 C324.372097,30.5610829 324.453224,30.8282411 324.557196,31.1299015 L325.659865,30.8977116 C325.462644,30.3522053 324.766074,28.39118 321.935036,28.39118 C319.115188,28.39118 317.780796,30.3755175 317.780796,32.6960175 C317.780796,34.9703593 319.08022,37.0013213 321.783973,37.0013213"
                                          id="Fill-29"></path>
                                    <path d="M332.041357,29.2732217 C333.933378,29.2732217 334.965644,30.6421162 334.977766,32.6264538 C334.988956,34.309131 334.25835,36.1424053 332.053013,36.1424053 C329.941391,36.1424053 329.09469,34.4252259 329.09469,32.7075804 C329.09469,30.86265 329.975893,29.2732217 332.041357,29.2732217 M332.007321,37.0012281 C334.721798,37.0012281 336.160629,35.0747049 336.160629,32.6147977 C336.160629,29.9460129 334.339477,28.3910867 332.041357,28.3910867 C330.011327,28.3910867 327.910895,29.6560086 327.910895,32.6959243 C327.910895,35.2490804 329.511979,37.0012281 332.007321,37.0012281"
                                          id="Fill-31"></path>
                                    <path d="M283.852447,29.5398205 L286.381824,29.5398205 C286.764611,29.5398205 287.17071,29.5514766 287.530651,29.8531369 C287.913438,30.1781095 287.960063,30.619177 287.960063,30.8975251 C287.960063,31.3036243 287.843968,31.7097234 287.56562,31.9880715 C287.194023,32.3596686 286.764611,32.3596686 286.137512,32.3596686 L283.852447,32.3596686 L283.852447,29.5398205 Z M283.852447,33.3224639 L286.219571,33.3224639 C286.717987,33.3224639 287.124552,33.3224639 287.530651,33.1951791 C288.621198,32.8585504 289.038953,31.8141622 289.038953,30.9208373 C289.038953,29.9692319 288.597885,29.075907 287.63509,28.7392783 C287.205679,28.5998711 286.741299,28.5998711 286.3352,28.5998711 L282.796402,28.5998711 L282.796402,36.7922572 L283.852447,36.7922572 L283.852447,33.3224639 Z"
                                          id="Fill-33"></path>
                                    <path d="M299.354618,29.2732217 C301.246172,29.2732217 302.278438,30.6421162 302.290561,32.6264538 C302.30175,34.309131 301.571145,36.1424053 299.365807,36.1424053 C297.254185,36.1424053 296.407485,34.4252259 296.407485,32.7075804 C296.407485,30.86265 297.289153,29.2732217 299.354618,29.2732217 M299.319649,37.0012281 C302.035058,37.0012281 303.47389,35.0747049 303.47389,32.6147977 C303.47389,29.9460129 301.652272,28.3910867 299.354618,28.3910867 C297.324122,28.3910867 295.223689,29.6560086 295.223689,32.6959243 C295.223689,35.2490804 296.82524,37.0012281 299.319649,37.0012281"
                                          id="Fill-35"></path>
                                    <path d="M94.1163468,15.8509219 L94.1163468,16.0761181 L98.3927435,16.0761181 L98.3927435,34.8471308 C98.3927435,41.104135 99.5630177,47.5858692 93.4407582,47.5858692 C91.054984,47.5858692 89.8847097,46.2813165 89.8847097,44.8853797 C89.8847097,43.3999241 90.8750135,43.0847426 90.8750135,41.7792574 C90.8750135,40.5189979 90.0199207,39.9786203 89.0296169,39.9786203 C87.5889207,39.9786203 86.6886021,41.2841055 86.6886021,42.8143207 C86.6886021,45.2905464 89.0296169,47.8110654 93.4407582,47.8110654 C98.9326549,47.8110654 102.7139,45.6504873 102.7139,34.8471308 L102.7139,16.0761181 L106.58513,16.0761181 L106.58513,15.8509219 L94.1163468,15.8509219 Z"
                                          id="Fill-37"></path>
                                    <path d="M26.3678643,16.0760715 L30.5095162,16.0760715 C36.0009466,16.0760715 37.0364762,19.63212 37.0364762,23.8637572 C37.0364762,27.5097909 35.9561871,31.02108 31.1394129,31.02108 L26.3678643,31.02108 L26.3678643,16.0760715 Z M17.9955078,47.1358964 L17.9955078,47.3610926 L30.4642905,47.3610926 L30.4642905,47.1358964 L26.3678643,47.1358964 L26.3678643,31.2458099 L30.1491091,31.2458099 C35.0106428,31.2458099 38.2067504,31.9209323 38.2067504,38.4031327 C38.2067504,46.4603078 40.4125542,47.9914555 44.9589065,47.9914555 C47.6598622,47.9914555 48.7401513,46.3250968 48.8753622,46.1455926 L48.7401513,45.9656222 C48.5149551,46.2808036 47.434666,47.4963036 45.9492103,47.4963036 C43.4282251,47.4963036 42.9782989,45.334793 42.9782989,40.4737255 C42.9782989,33.9467656 39.1970542,31.5609914 32.9852757,31.1110652 C37.9815542,30.7058985 41.5828285,28.454869 41.5828285,23.8637572 C41.5828285,18.1466643 36.9912504,15.8508753 30.4642905,15.8508753 L17.9955078,15.8508753 L17.9955078,16.0760715 L22.0914677,16.0760715 L22.0914677,47.1358964 L17.9955078,47.1358964 Z"
                                          id="Fill-39"></path>
                                    <path d="M159.64308,47.1139363 L155.637105,47.1139363 L155.637105,30.5487274 L159.64308,30.5487274 C165.720114,30.5487274 167.250795,34.4199574 167.250795,38.6520608 C167.250795,42.2980945 166.755643,47.1139363 159.64308,47.1139363 L159.64308,47.1139363 Z M155.637105,16.0541114 L158.472806,16.0541114 C164.504614,16.0541114 165.630128,19.2054595 165.630128,23.3918709 C165.630128,27.0379046 164.054688,30.368757 158.698002,30.368757 L155.637105,30.368757 L155.637105,16.0541114 Z M161.263747,30.368757 C166.440462,29.919297 169.951285,27.8034785 169.951285,23.3918709 C169.951285,17.7200038 165.540143,15.8289152 158.472806,15.8289152 L147.219057,15.8289152 L147.219057,16.0541114 L151.315483,16.0541114 L151.315483,47.1139363 L147.219057,47.1139363 L147.219057,47.3391325 L159.82305,47.3391325 C167.970677,47.3391325 172.022344,43.7383245 172.022344,38.6520608 C172.022344,33.3396684 167.610736,30.7286979 161.263747,30.368757 L161.263747,30.368757 Z"
                                          id="Fill-41"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                <?php endif; ?>
            </a>
        </div>

        <section id="header" class="home">

            <div class="row">
                <div class="col-9 col-lg-5 col_left text d-flex align-items-center">
                    <div class="content animate-this">
                        <?php if ($header_tekst = get_field('header_tekst')) : ?>
                            <?php echo $header_tekst; ?>
                        <?php endif; ?>

                        <?php
                        $link = get_field('button_link');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn btn_black" href="<?php echo esc_url($link_url); ?>"
                               target="<?php echo esc_attr($link_target); ?>"><?php the_field('button_tekst'); ?></a>
                        <?php endif; ?>


                    </div>
                </div>
                <div class="col-3 col-lg-1 pl-0 d-flex align-items-end justify-content-center">
                    <div class="scroll_block">
                        <a href="#content">
                            <div class="scroll_icon"></div>
                            <span class="mb-0 mb-lg-5">Scroll</span>
                        </a>
                    </div>
                </div>
                <div class="col-9 col-lg-6 image col_right px-0">
                    <?php if (have_rows('header_slider')) : ?>
                        <div class="header_slider">
                            <?php while (have_rows('header_slider')) :
                                the_row(); ?>
                                <div class="slide"
                                     style="background-image:url(<?php echo esc_url(get_sub_field('slide')); ?>);">

                                </div>

                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section id="content" class="portfolio home">
            <div class="row">
                <div class="col-sm-12 col-lg-5 col_left">
                    <div class="content">
                        <?php if ($portfolio_content = get_field('portfolio_content')) : ?>
                            <?php echo $portfolio_content; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-7 px-lg-0 col_right">
                    <?php if (have_rows('portfolio_items')) : ?>
                    <div class="portfolio_items portfolio_slider">
                        <?php while (have_rows('portfolio_items')) :
                            the_row();
                            $link = get_sub_field('link');
                            ?>
                            <div class="item">
                                <a class="button" href="<?php echo esc_url($link); ?>">
                                    <?= !empty($img = get_sub_field('afbeelding')) ? wp_get_attachment_image($img['id'], 'large', false, ['class' => 'portfolio_img']) : '' ?>
                                    <p class="title"><?php the_sub_field('titel'); ?></p>
                                </a>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="arrows d-flex align-items-center d-lg-none">
                        <a class="prev_portfolio_item"><i class="far fa-long-arrow-left"></i></a>
                        <a class="next_portfolio_item"><i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>


    </div>


<?php
get_footer();


