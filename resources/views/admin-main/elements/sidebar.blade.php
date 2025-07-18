<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            {{-- <li class="menu-title">YOUR COMPANY</li> --}}
            <li><a href="{{ url('admin/dashboard') }}" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            <li><a href="{{url('admin/transaction_reports')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="22" height="22" viewBox="0 -2.55 20.094 20.094" xmlns="http://www.w3.org/2000/svg">
                            <path id="Path_15" data-name="Path 15" d="M518.8,829.36c-.678,1.556-1.213,2.66-2.709,2.66h-8.128a2.664,2.664,0,0,1-2.71-2.66l-.8-7.36h-3.484v-1h4.375l.361,3.014h15.358Zm-12.556,0a1.874,1.874,0,0,0,1.72,1.633H516.1c.9,0,1.271-.72,1.657-1.633l1.837-4.382H505.8Zm1.225,3.64a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,507.474,833Zm-.531,1.969h1V834h-1ZM515.474,833a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,515.474,833Zm-.531,1.969h1V834h-1Z" transform="translate(-500.973 -821)" fill="#444"></path>
                        </svg>

                    </div>
                    <span class="nav-text">Transaction Report</span>
                </a>
            </li>


            <li><a href="{{url('admin/groups')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <svg fill="#000000" width="22" height="22" viewBox="0 0 36 36" version="1.1" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path class="clr-i-outline clr-i-outline-path-1" d="M17.9,17.3c2.7,0,4.8-2.2,4.8-4.9c0-2.7-2.2-4.8-4.9-4.8c-2.7,0-4.8,2.2-4.8,4.8C13,15.1,15.2,17.3,17.9,17.3z M17.8,9.6C17.9,9.6,17.9,9.6,17.8,9.6c1.6,0,2.9,1.3,2.9,2.9s-1.3,2.8-2.9,2.8c-1.6,0-2.8-1.3-2.8-2.8C15,10.9,16.3,9.6,17.8,9.6z"></path>
                            <path class="clr-i-outline clr-i-outline-path-2" d="M32.7,16.7c-1.9-1.7-4.4-2.6-7-2.5c-0.3,0-0.5,0-0.8,0c-0.2,0.8-0.5,1.5-0.9,2.1c0.6-0.1,1.1-0.1,1.7-0.1c1.9-0.1,3.8,0.5,5.3,1.6V25h2v-8L32.7,16.7z"></path>
                            <path class="clr-i-outline clr-i-outline-path-3" d="M23.4,7.8c0.5-1.2,1.9-1.8,3.2-1.3c1.2,0.5,1.8,1.9,1.3,3.2c-0.4,0.9-1.3,1.5-2.2,1.5c-0.2,0-0.5,0-0.7-0.1c0.1,0.5,0.1,1,0.1,1.4c0,0.2,0,0.4,0,0.6c0.2,0,0.4,0.1,0.6,0.1c2.5,0,4.5-2,4.5-4.4c0-2.5-2-4.5-4.4-4.5c-1.6,0-3,0.8-3.8,2.2C22.5,6.8,23,7.2,23.4,7.8z"></path>
                            <path class="clr-i-outline clr-i-outline-path-4" d="M12,16.4c-0.4-0.6-0.7-1.3-0.9-2.1c-0.3,0-0.5,0-0.8,0c-2.6-0.1-5.1,0.8-7,2.4L3,17v8h2v-7.2c1.6-1.1,3.4-1.7,5.3-1.6C10.9,16.2,11.5,16.3,12,16.4z"></path>
                            <path class="clr-i-outline clr-i-outline-path-5" d="M10.3,13.1c0.2,0,0.4,0,0.6-0.1c0-0.2,0-0.4,0-0.6c0-0.5,0-1,0.1-1.4c-0.2,0.1-0.5,0.1-0.7,0.1c-1.3,0-2.4-1.1-2.4-2.4c0-1.3,1.1-2.4,2.4-2.4c1,0,1.9,0.6,2.3,1.5c0.4-0.5,1-1,1.5-1.4c-1.3-2.1-4-2.8-6.1-1.5c-2.1,1.3-2.8,4-1.5,6.1C7.3,12.3,8.7,13.1,10.3,13.1z"></path>
                            <path class="clr-i-outline clr-i-outline-path-6" d="M26.1,22.7l-0.2-0.3c-2-2.2-4.8-3.5-7.8-3.4c-3-0.1-5.9,1.2-7.9,3.4L10,22.7v7.6c0,0.9,0.7,1.7,1.7,1.7c0,0,0,0,0,0h12.8c0.9,0,1.7-0.8,1.7-1.7c0,0,0,0,0,0V22.7z M24.1,30H12v-6.6c1.6-1.6,3.8-2.4,6.1-2.4c2.2-0.1,4.4,0.8,6,2.4V30z"></path>
                            <rect x="0" y="0" width="22" height="22" fill-opacity="0"></rect>
                        </svg>
                    </div>
                    <span class="nav-text">Groups</span>
                </a>
            </li>

            <li><a href="{{url('admin/courses')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="22" height="22" viewBox="0 0 48 48" id="b" xmlns="http://www.w3.org/2000/svg">

                            <defs>

                                <style>
                                    .c {
                                        fill: none;
                                        stroke: #000000;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                    }

                                </style>

                            </defs>

                            <g>

                                <g>

                                    <g>

                                        <path class="c" d="m35.4148,18.071c1.5466,0,2.8003,1.2739,2.8003,2.8454s-1.2538,2.8454-2.8003,2.8454h-4.6206v-11.3816h4.6206c1.5466,0,2.8003,1.2739,2.8003,2.8454s-1.2538,2.8454-2.8003,2.8454Z"></path>

                                        <line class="c" x1="35.4148" y1="18.071" x2="30.7938" y2="18.071"></line>

                                        <path class="c" d="m27.4249,19.9449v.0466c0,2.0822-1.6612,3.7701-3.7103,3.7701s-3.7103-1.6879-3.7103-3.7701v-3.8412c0-2.0822,1.6612-3.7701,3.7103-3.7701h0c2.0491,0,3.7103,1.6879,3.7103,3.7701v.0466"></path>

                                    </g>

                                    <line class="c" x1="15.9621" y1="19.9549" x2="11.0178" y2="19.9549"></line>

                                    <polyline class="c" points="9.7849 23.7298 13.4946 12.3809 17.2042 23.7639"></polyline>

                                </g>

                                <g>

                                    <line class="c" x1="29.7472" y1="31.8671" x2="32.194" y2="31.8671"></line>

                                    <polyline class="c" points="33.5 35.6199 29.7472 35.6199 29.7472 28.1143 33.5 28.1143"></polyline>

                                    <path class="c" d="m16.9862,35.6199c-1.3732,0-2.4862-1.1131-2.4862-2.4862v-2.5331c0-1.3732,1.1131-2.4862,2.4862-2.4862s2.4862,1.1131,2.4862,2.4862v2.5331c0,1.3732-1.1131,2.4862-2.4862,2.4862Z"></path>

                                    <path class="c" d="m21.5486,28.1143v7.5056l1.8764-1.8764"></path>

                                    <path class="c" d="m27.6469,35.6199v-7.5056l-1.8764,1.8764"></path>

                                </g>

                            </g>

                            <path class="c" d="m40.5,5.5H7.5c-1.1046,0-2,.8954-2,2v33c0,1.1046.8954,2,2,2h33c1.1046,0,2-.8954,2-2V7.5c0-1.1046-.8954-2-2-2Z"></path>

                        </svg>
                    </div>
                    <span class="nav-text">Courses</span>
                </a>
            </li>

            <li><a href="{{url('admin/users')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">

                            <defs>

                                <style>
                                    .cls-1,
                                    .cls-2 {
                                        fill: none;
                                        stroke: #000000;
                                        stroke-linecap: round;
                                        stroke-width: 1.5px;
                                    }

                                    .cls-1 {
                                        stroke-linejoin: round;
                                    }

                                    .cls-2 {
                                        stroke-linejoin: bevel;
                                    }

                                </style>

                            </defs>

                            <g id="ic-actions-user">

                                <path class="cls-1" d="M3,22l.79-2.88c2.61-9.5,13.81-9.5,16.42,0L21,22"></path>

                                <circle class="cls-2" cx="12" cy="6.98" r="5"></circle>

                            </g>

                        </svg>
                    </div>
                    <span class="nav-text">Users</span>
                </a>
            </li>



            <li><a href="{{url('admin/packages')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="22" height="22" viewBox="0 -2.55 20.094 20.094" xmlns="http://www.w3.org/2000/svg">
                            <path id="Path_15" data-name="Path 15" d="M518.8,829.36c-.678,1.556-1.213,2.66-2.709,2.66h-8.128a2.664,2.664,0,0,1-2.71-2.66l-.8-7.36h-3.484v-1h4.375l.361,3.014h15.358Zm-12.556,0a1.874,1.874,0,0,0,1.72,1.633H516.1c.9,0,1.271-.72,1.657-1.633l1.837-4.382H505.8Zm1.225,3.64a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,507.474,833Zm-.531,1.969h1V834h-1ZM515.474,833a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,515.474,833Zm-.531,1.969h1V834h-1Z" transform="translate(-500.973 -821)" fill="#444"></path>
                        </svg>
                    </div>
                    <span class="nav-text">Packages</span>
                </a>
            </li>
            <li><a href="{{url('admin/subjects')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                       
<svg width="22" height="22" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    
    <g id="🔍-System-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="ic_fluent_book_formula_statistics_24_regular" fill="#212121" fill-rule="nonzero">
            <path d="M18,2 C19.325472,2 20.4100378,3.03153766 20.4946823,4.33562452 L20.5,4.5 L20.5,18.75 C20.5,19.1296833 20.2178347,19.4434889 19.8517677,19.4931531 L19.75,19.5 L5.5,19.5 C5.5,20.01285 5.88604429,20.4355092 6.38337975,20.4932725 L6.5,20.5 L19.75,20.5 C20.1642,20.5 20.5,20.8358 20.5,21.25 C20.5,21.6296833 20.2178347,21.9434889 19.8517677,21.9931531 L19.75,22 L6.5,22 C5.1745184,22 4.08996147,20.9684531 4.00531769,19.6643744 L4,19.5 L4,4.5 C4,3.1745184 5.03153766,2.08996147 6.33562452,2.00531769 L6.5,2 L18,2 Z M18,3.5 L6.5,3.5 C5.98716857,3.5 5.56449347,3.88604429 5.5067278,4.38337975 L5.5,4.5 L5.5,18 L19,18 L19,4.5 C19,3.98716857 18.613973,3.56449347 18.1166239,3.5067278 L18,3.5 Z M11.0238,7.00038 C11.2797375,7.0085 11.5110984,7.14624031 11.6413107,7.36111256 L11.6907,7.45777 L13.857,12.5781 L14.8522,10.8721 C14.9674,10.6746143 15.1650327,10.5422966 15.3871621,10.5085218 L15.5,10.5000009 L16.75,10.5000009 C17.1642,10.5000009 17.5,10.8358 17.5,11.25 C17.5,11.6296833 17.2178347,11.9434896 16.8517677,11.993154 L16.75,12.0000009 L15.9308,12.0000009 L14.3978,14.6279 C14.2548,14.8732 13.9855,15.0166 13.7021,14.9985 C13.454125,14.982575 13.2326406,14.845375 13.1070508,14.6361393 L13.0593,14.5422 L10.9432,9.54063 L9.92082,11.5854 C9.80966,11.8077375 9.59693219,11.9584132 9.3551757,11.9926081 L9.25,12.0000009 L7.75,12.0000009 C7.33579,12.0000009 7,11.6642 7,11.25 C7,10.8703167 7.28215688,10.5565119 7.64823019,10.5068477 L7.75,10.5000009 L8.78647,10.5000009 L10.3292,7.41459 C10.4601,7.15283 10.7313,6.9911 11.0238,7.00038 Z" id="🎨-Color">

</path>
        </g>
    </g>
</svg>
                    </div>
                    <span class="nav-text">Subjects</span>
                </a>
            </li>
            <li><a href="{{url('admin/passages')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="22" height="22" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#000000" d="M247 57.545c-29.212 2.622-71.312 17.137-106.37 38.172-19.394 11.637-36.707 25.19-48.83 39.178C79.68 148.882 73 163 73 176v263h174v-78h-46v16h-66v-16h-32v-66h32v-16h66v16h46V57.545zm18 0V295h46v-16h66v16h32v66h-32v16h-66v-16h-46v78h174V176c0-13-6.678-27.118-18.8-41.105-12.123-13.988-29.436-27.54-48.83-39.178C336.31 74.682 294.21 60.167 265 57.545zM153 297v62h30v-62h-30zm176 0v62h30v-62h-30zm-208 16v30h14v-30h-14zm80 0v30h110v-30H201zm176 0v30h14v-30h-14zM73 457v30h174v-30H73zm192 0v30h174v-30H265z"></path>
                        </svg>
                    </div>
                    <span class="nav-text">Passage</span>
                </a>
            </li>
            </li>
            <li><a href="{{url('admin/topices')}}" class="" aria-expanded="false">
                    <div class="menu-icon">

                        <svg width="22" height="22" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" mirror-in-rtl="true">
                            <path fill="#494c4e" d="M12 13.02a1 1 0 0 1-1 1 1.02 1.02 0 0 1-.79-.38l-.04-.06A6.177 6.177 0 0 0 7 11.15 3.663 3.663 0 0 0 6 11v1.02a.976.976 0 0 1-.55.87 1 1 0 0 1-1.05-.09l-4-3a1 1 0 0 1 0-1.6l4-3a1 1 0 0 1 1.6.78V7c2.15 0 5.91 3.1 6 6.02z" />
                            <path fill="#494c4e" d="M16.6 0H5.4A1.417 1.417 0 0 0 4 1.43v1.748A2.975 2.975 0 0 1 5 3a2.99 2.99 0 0 1 1.042.21A.955.955 0 0 1 6 3a1 1 0 0 1 1-1h8a1 1 0 0 1 0 2H7.21a2.98 2.98 0 0 1 .727 1.39 8.57 8.57 0 0 1 1.24.61H15a1 1 0 0 1 0 2h-3.322a9.775 9.775 0 0 1 1.455 2H15a1 1 0 0 1 0 2h-1.125a5.706 5.706 0 0 1 .124.958v.062a2.962 2.962 0 0 1-.18.98H15a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1 .96.96 0 0 1 .043-.212 3.022 3.022 0 0 1-1.05.212A3.008 3.008 0 0 1 4 14.826v1.714A1.444 1.444 0 0 0 5.4 18h11.2a1.443 1.443 0 0 0 1.4-1.46V1.4A1.39 1.39 0 0 0 16.618 0H16.6z" />
                        </svg>
                    </div>
                    <span class="nav-text">Topic
                    </span>
                </a>
            </li>

            <li><a href="{{url('admin/subtopices')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                        

                        <svg width="22" height="22" viewBox="0 0 512 512" id="svg2793" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:serif="http://www.serif.com/" xmlns:svg="http://www.w3.org/2000/svg">
                        
                        <defs id="defs2797"/>
                        
                        <g id="_20-Topic" style="display:inline" transform="translate(-4096,-3072)">
                        
                        <g id="g2327" transform="translate(4578.72,3154.25)">
                        
                        <path d="m 0,347.508 -37.075,-33.012 c -2.747,-2.446 -6.297,-3.797 -9.975,-3.797 H -331.51 V 68.919 H 0 Z M -406.39,223.339 c -3.677,0 -7.227,1.352 -9.974,3.797 l -37.075,33.012 V -18.441 h 331.509 v 57.36 h -224.58 c -8.284,0 -15,6.716 -15,15 v 169.42 z M 15,38.919 H -91.93 v -72.36 c 0,-8.284 -6.716,-15 -15,-15 h -361.509 c -8.285,0 -15,6.716 -15,15 v 327.03 c 0,5.909 3.469,11.268 8.861,13.686 1.969,0.883 4.059,1.315 6.136,1.315 3.61,-10e-4 7.175,-1.304 9.977,-3.798 l 57.785,-51.453 h 39.17 v 72.36 c 0,8.284 6.716,15 15,15 h 293.75 l 57.785,51.453 c 2.802,2.495 6.368,3.797 9.978,3.797 2.076,0 4.168,-0.431 6.136,-1.314 C 26.53,392.216 30,386.858 30,380.949 V 53.919 c 0,-8.284 -6.716,-15 -15,-15" id="path2325" style="fill-rule:nonzero"/>
                        
                        </g>
                        
                        <g id="g2331" transform="translate(4344.48,3284.33)">
                        
                        <path d="m 0,0 c 0,8.284 6.716,15 15,15 h 154.66 c 8.284,0 15,-6.716 15,-15 0,-8.284 -6.716,-15 -15,-15 H 15 C 6.716,-15 0,-8.284 0,0" id="path2329" style="fill-rule:nonzero"/>
                        
                        </g>
                        
                        <g id="g2335" transform="translate(4478.55,3357.22)">
                        
                        <path d="m 0,-30 h -119.069 c -8.285,0 -15,6.716 -15,15 0,8.284 6.715,15 15,15 H 0 C 8.284,0 15,-6.716 15,-15 15,-23.284 8.284,-30 0,-30" id="path2333" style="fill-rule:nonzero"/>
                        
                        </g>
                        
                        <g id="g2339" transform="translate(4436.81,3415.12)">
                        
                        <path d="m 0,-30 h -77.33 c -8.284,0 -15,6.716 -15,15 0,8.284 6.716,15 15,15 H 0 C 8.284,0 15,-6.716 15,-15 15,-23.284 8.284,-30 0,-30" id="path2337" style="fill-rule:nonzero"/>
                        
                        </g>
                        
                        <g id="g2343" transform="matrix(-1,0,0,1,4311.79,3299.32)">
                        
                        <path d="m 0,-29.99 c 8.28,0 15,6.71 15,15 C 15,-6.71 8.28,0 0,0 c -8.29,0 -15,-6.71 -15,-14.99 0,-8.29 6.71,-15 15,-15" id="path2341" style="fill-rule:nonzero"/>
                        
                        </g>
                        
                        <g id="g2347" transform="matrix(-1,0,0,1,4311.79,3413.33)">
                        
                        <path d="m 0,-30.01 c 8.28,0 15,6.72 15,15.01 0,8.28 -6.72,15 -15,15 -8.29,0 -15,-6.72 -15,-15 0,-8.29 6.71,-15.01 15,-15.01" id="path2345" style="fill-rule:nonzero"/>
                        
                        </g>
                        
                        <g id="g2351" transform="matrix(-1,0,0,1,4311.79,3356.33)">
                        
                        <path d="m 0,-30.01 c 8.28,0 15,6.72 15,15 C 15,-6.72 8.28,0 0,0 c -8.29,0 -15,-6.72 -15,-15.01 0,-8.28 6.71,-15 15,-15" id="path2349" style="fill-rule:nonzero"/>
                        
                        </g>
                        
                        </g>
                        
                        </svg>
                    </div>
                    <span class="nav-text">Sub Topic
                    </span>
                </a>
            </li>

            <li><a href="{{url('admin/questions')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                        

                       
                        <svg width="22" height="22" viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="_x3C_Layer_x3E_" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        
                        <g id="help_x2C__message_x2C__question_x2C__question_mark">
                        
                        <g id="XMLID_2695_">
                        
                        <g id="XMLID_2696_">
                        
                        <path d="     M21.5,18.5h-11c-1.66,0-3-1.34-3-3v-11c0-1.66,1.34-3,3-3h11c1.66,0,3,1.34,3,3v11C24.5,17.16,23.16,18.5,21.5,18.5z" fill="none" id="XMLID_2704_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                        
                        <path d="     M26.5,5.521L26.5,5.521c1.657,0,3,1.343,3,3v15c0,1.657-1.343,3-3,3H23l-3.5,4v-4h-14c-1.657,0-3-1.343-3-3v-15     c0-1.657,1.343-3,3-3h0" fill="none" id="XMLID_2703_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                        
                        <path d="     M16,13v-0.542c0-0.904,0.475-1.743,1.25-2.208l0,0c0.775-0.465,1.25-1.304,1.25-2.208V8c0-1.381-1.119-2.5-2.5-2.5l0,0     c-1.381,0-2.5,1.119-2.5,2.5l0,0" fill="none" id="XMLID_2702_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                        
                        <line fill="#FFFFFF" id="XMLID_2700_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="16" x2="16" y1="15" y2="14.867"/>
                        
                        <line fill="none" id="XMLID_2699_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="18.6" x2="18.5" y1="22.5" y2="22.5"/>
                        
                        <line fill="none" id="XMLID_2698_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="16.1" x2="16" y1="22.5" y2="22.5"/>
                        
                        <line fill="none" id="XMLID_2697_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13.6" x2="13.5" y1="22.5" y2="22.5"/>
                        
                        </g>
                        
                        </g>
                        
                        <g id="XMLID_1026_">
                        
                        <g id="XMLID_1052_">
                        
                        <path d="     M21.5,18.5h-11c-1.66,0-3-1.34-3-3v-11c0-1.66,1.34-3,3-3h11c1.66,0,3,1.34,3,3v11C24.5,17.16,23.16,18.5,21.5,18.5z" fill="none" id="XMLID_2694_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                        
                        <path d="     M26.5,5.521L26.5,5.521c1.657,0,3,1.343,3,3v15c0,1.657-1.343,3-3,3H23l-3.5,4v-4h-14c-1.657,0-3-1.343-3-3v-15     c0-1.657,1.343-3,3-3h0" fill="none" id="XMLID_2621_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                        
                        <path d="     M16,13v-0.542c0-0.904,0.475-1.743,1.25-2.208l0,0c0.775-0.465,1.25-1.304,1.25-2.208V8c0-1.381-1.119-2.5-2.5-2.5l0,0     c-1.381,0-2.5,1.119-2.5,2.5l0,0" fill="none" id="XMLID_2559_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                        
                        <line fill="none" id="XMLID_2558_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="16" x2="16" y1="15" y2="14.867"/>
                        
                        <line fill="none" id="XMLID_2557_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="18.6" x2="18.5" y1="22.5" y2="22.5"/>
                        
                        <line fill="none" id="XMLID_2556_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="16.1" x2="16" y1="22.5" y2="22.5"/>
                        
                        <line fill="none" id="XMLID_1073_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13.6" x2="13.5" y1="22.5" y2="22.5"/>
                        
                        </g>
                        
                        </g>
                        
                        </g>
                        
                        </svg>
                    </div>
                    <span class="nav-text">Questions</span>
                </a>
            </li>

            <li><a href="{{url('admin/exams')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                       
                        <svg width="22" height="22" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                        
                        <g data-name="19_Test" id="_19_Test">
                        
                        <path d="M53,62H7a1,1,0,0,1-1-1V3A1,1,0,0,1,7,2H53a1,1,0,0,1,1,1V61A1,1,0,0,1,53,62Z" style="fill:#fdfeff"/>
                        
                        <path d="M17,35H11a1,1,0,0,1-1-1V28a1,1,0,0,1,1-1h6a1,1,0,0,1,1,1v6A1,1,0,0,1,17,35Z" style="fill:#febc00"/>
                        
                        <path d="M13,33a1,1,0,0,1-1-1V27H11a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V33Z" style="fill:#edaa03"/>
                        
                        <path d="M17,45H11a1,1,0,0,1-1-1V38a1,1,0,0,1,1-1h6a1,1,0,0,1,1,1v6A1,1,0,0,1,17,45Z" style="fill:#febc00"/>
                        
                        <path d="M17,55H11a1,1,0,0,1-1-1V48a1,1,0,0,1,1-1h6a1,1,0,0,1,1,1v6A1,1,0,0,1,17,55Z" style="fill:#febc00"/>
                        
                        <rect height="2" style="fill:#0455bf" width="15" x="21" y="30"/>
                        
                        <rect height="2" style="fill:#0455bf" width="10" x="21" y="40"/>
                        
                        <rect height="2" style="fill:#0455bf" width="14" x="21" y="50"/>
                        
                        <rect height="2" style="fill:#f74e0c" transform="translate(-15.32 20.015) rotate(-45)" width="9.899" x="11.55" y="27.5"/>
                        
                        <rect height="2" style="fill:#f74e0c" transform="translate(-22.391 22.944) rotate(-45)" width="9.899" x="11.55" y="37.5"/>
                        
                        <rect height="2" style="fill:#f74e0c" transform="translate(-29.462 25.873) rotate(-45)" width="9.899" x="11.55" y="47.5"/>
                        
                        <rect height="2" style="fill:#0455bf" width="6" x="14" y="11"/>
                        
                        <rect height="7" style="fill:#0455bf" width="2" x="16" y="12"/>
                        
                        <rect height="2" style="fill:#0455bf" width="6" x="36" y="11"/>
                        
                        <rect height="7" style="fill:#0455bf" width="2" x="38" y="12"/>
                        
                        <rect height="6" style="fill:#0455bf" width="2" x="22" y="12"/>
                        
                        <rect height="2" style="fill:#0455bf" width="5" x="22" y="11"/>
                        
                        <rect height="2" style="fill:#0455bf" width="5" x="22" y="17"/>
                        
                        <rect height="2" style="fill:#0455bf" width="5" x="22" y="14"/>
                        
                        <path d="M33,19H29V17h3V16H30a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1h4v2H31v1h2a1,1,0,0,1,1,1v3A1,1,0,0,1,33,19Z" style="fill:#0455bf"/>
                        
                        <rect height="2" style="fill:#0455bf" width="2" x="37" y="50"/>
                        
                        <rect height="2" style="fill:#0455bf" width="2" x="41" y="50"/>
                        
                        <path d="M13,43a1,1,0,0,1-1-1V37H11a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V43Z" style="fill:#edaa03"/>
                        
                        <path d="M13,53a1,1,0,0,1-1-1V47H11a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V53Z" style="fill:#edaa03"/>
                        
                        <polygon points="52.981 21.192 50.839 23.335 34.414 39.759 32.986 44.044 32 46.459 34.414 45.472 38.699 44.044 54 28.743 54 20.174 52.981 21.192" style="fill:#dfeaef"/>
                        
                        <rect height="6.059" style="fill:#f74e0c" transform="translate(-8.472 40.927) rotate(-45)" width="23.228" x="33.553" y="27.66"/>
                        
                        <rect height="2.02" style="fill:#febc00" transform="translate(-8.472 40.927) rotate(-45)" width="23.228" x="33.553" y="29.68"/>
                        
                        <rect height="6.059" style="fill:#fdfeff" transform="translate(0.812 44.772) rotate(-45)" width="3.03" x="52.936" y="18.376"/>
                        
                        <rect height="2.02" style="fill:#dfeaef" transform="translate(1.403 43.344) rotate(-45)" width="3.03" x="51.508" y="18.968"/>
                        
                        <path d="M57.664,22.477l-4.285-4.285,2.143-2.142a2.019,2.019,0,0,1,2.856,0l1.428,1.428a2.02,2.02,0,0,1,0,2.857Z" style="fill:#f74e0c"/>
                        
                        <path d="M59.806,17.478,58.378,16.05a2.019,2.019,0,0,0-2.856,0l-2.143,2.142,1.429,1.429,2.142-2.143A2.021,2.021,0,0,1,59.806,17.478Z" style="fill:#cc2600"/>
                        
                        <polygon points="34.813 42.472 33.384 41.044 34.813 36.759 39.097 41.044 34.813 42.472" style="fill:#f7d694"/>
                        
                        <polygon points="33.384 41.044 32.398 43.459 34.813 42.472 33.384 41.044" style="fill:#f74e0c"/>
                        
                        </g>
                        
                        </svg>
                    </div>
                    <span class="nav-text">Exams</span>
                </a>
            </li>

            <li><a href="{{url('admin/studymaterials')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                       
                        <svg width="22" height="22" viewBox="0 0 64 64" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><defs><style>
                              .cls-1 {
                                fill: #f76c5e;
                              }
                        
                              .cls-2 {
                                fill: #ffbc0a;
                              }
                        
                              .cls-3 {
                                fill: #a3cef1;
                              }
                        
                              .cls-4 {
                                fill: #6096ba;
                              }
                        
                              .cls-5 {
                                fill: #274c77;
                              }
                            </style></defs><path class="cls-5" d="M24,47h-2c-1.1,0-2,.9-2,2v10h24v-10c0-1.1-.9-2-2-2h-2"/><path class="cls-4" d="M50,29l-2,6-2-6V7c0-1.1,.9-2,2-2h0c1.1,0,2,.9,2,2V29Z"/><path class="cls-1" d="M50,9h-4v-2c0-1.1,.9-2,2-2,.55,0,1.05,.22,1.41,.59,.37,.36,.59,.86,.59,1.41v2Z"/><polygon class="cls-1" points="50 29 46 29 48 35 50 29"/><path class="cls-5" d="M42,33l-2,6-2-6V11c0-1.1,.9-2,2-2h0c1.1,0,2,.9,2,2v22Z"/><path class="cls-1" d="M42,13h-4v-2c0-1.1,.9-2,2-2,.55,0,1.05,.22,1.41,.59,.37,.36,.59,.86,.59,1.41v2Z"/><polygon class="cls-1" points="42 33 38 33 40 39 42 33"/><path class="cls-2" d="M34,37l-2,6-2-6V15c0-1.1,.9-2,2-2h0c1.1,0,2,.9,2,2v22Z"/><path class="cls-1" d="M34,17h-4v-2c0-1.1,.9-2,2-2,.55,0,1.05,.22,1.41,.59,.37,.36,.59,.86,.59,1.41v2Z"/><polygon class="cls-1" points="34 37 30 37 32 43 34 37"/><path class="cls-5" d="M26,33l-2,6-2-6V11c0-1.1,.9-2,2-2h0c1.1,0,2,.9,2,2v22Z"/><path class="cls-1" d="M26,13h-4v-2c0-1.1,.9-2,2-2,.55,0,1.05,.22,1.41,.59,.37,.36,.59,.86,.59,1.41v2Z"/><polygon class="cls-1" points="26 33 22 33 24 39 26 33"/><path class="cls-4" d="M18,29l-2,6-2-6V7c0-1.1,.9-2,2-2h0c1.1,0,2,.9,2,2V29Z"/><path class="cls-1" d="M18,9h-4v-2c0-1.1,.9-2,2-2,.55,0,1.05,.22,1.41,.59,.37,.36,.59,.86,.59,1.41v2Z"/><polygon class="cls-1" points="18 29 14 29 16 35 18 29"/><path class="cls-3" d="M40,47v12l-2-3c-.48-.72-1.24-1.07-2-1.07s-1.52,.35-2,1.07c-.26,.39-.61,.68-1,.85-.31,.15-.66,.22-1,.22s-.69-.07-1-.22c-.39-.17-.74-.46-1-.85-.95-1.43-3.05-1.43-4,0l-2,3v-12l2-3c.48-.72,1.24-1.07,2-1.07s1.52,.35,2,1.07c.26,.39,.61,.68,1,.85,.63,.3,1.37,.3,2,0,.39-.17,.74-.46,1-.85,.95-1.43,3.05-1.43,4,0l2,3Z"/><path class="cls-4" d="M33,44.85v12c-.31,.15-.66,.22-1,.22s-.69-.07-1-.22v-12c.63,.3,1.37,.3,2,0Z"/></svg>
                    </div>
                    <span class="nav-text">StudyMaterials</span>
                </a>
            </li>

            <li><a href="{{url('admin/current_affairs')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                       
<svg fill="#000000" width="22" height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M2 2V4H22V2H2ZM2 6V8H7V6H2ZM9 6V8H15V6H9ZM17 6V8H22V6H17ZM14.8 22.1L14 19.5H10L9.2 22.1H6.7L10.6 11H13.5L17.4 22.1H14.8ZM13.5 17.5C13.4324 17.5 12 12.7 12 12.7L10.6 17.5H13.5Z"/>
</svg>
                    </div>
                    <span class="nav-text">CurrentAffairs</span>
                </a>
            </li>

            <li><a href="{{url('admin/CustomNotifications')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                       
                        <svg fill="#000000" width="22" height="22" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="M53.77,21.87,50,40.11a1,1,0,0,0,1.12,1.12H70.64a2,2,0,0,1,1.62,2.87L51,79a1.85,1.85,0,0,1-3.5-.87l3.75-21.48c0-.75-.62-.5-1.37-.5H29.42c-1.37,0-2.37-2-1.62-3.25L50.28,21A1.86,1.86,0,0,1,53.77,21.87Z"/></svg>
                    </div>
                    <span class="nav-text">CustomNotifications</span>
                </a>
            </li>
            <li><a href="{{url('admin/results')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                       
                        <svg fill="#000000" width="22" height="22" viewBox="0 0 32 32" id="icon" xmlns="http://www.w3.org/2000/svg">
                          <defs>
                            <style>
                              .cls-1 {
                                fill: none;
                              }
                            </style>
                          </defs>
                          <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" class="cls-1" width="32" height="32"/>
                          <rect x="10" y="13" width="2" height="2"/>
                          <rect x="14" y="13" width="8" height="2"/>
                          <rect x="10" y="18" width="2" height="2"/>
                          <rect x="10" y="23" width="2" height="2"/>
                          <path d="M7,28V7h3v3H22V7h3v8h2V7a2,2,0,0,0-2-2H22V4a2,2,0,0,0-2-2H12a2,2,0,0,0-2,2V5H7A2,2,0,0,0,5,7V28a2,2,0,0,0,2,2h9V28ZM12,4h8V8H12Z"/>
                          <path d="M18,19v2.4131A6.996,6.996,0,1,1,24,32V30a5,5,0,1,0-4.5762-7H22v2H16V19Z"/>
                          <rect id="_Transparent_Rectangle_2" data-name="&lt;Transparent Rectangle&gt;" class="cls-1" width="32" height="32"/>
                        </svg>
                    </div>
                    <span class="nav-text">Results</span>
                </a>
            </li>
            <li><a href="{{url('admin/lives')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                       
                        <svg fill="#000000" width="22" height="22" viewBox="0 0 64 64" id="Layer_1_1_" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        
                        <g>
                        
                        <path d="M61,43h-1v-7.117c0-2.155-1.374-4.062-3.418-4.743L51,29.279v-0.82c0.757-0.679,1.34-1.545,1.675-2.528   C54.559,25.609,56,23.974,56,22v-4c0-4.962-4.038-9-9-9s-9,4.038-9,9v4c0,1.974,1.441,3.609,3.325,3.932   C41.66,26.914,42.243,27.78,43,28.46v0.82l-5.582,1.861C35.374,31.821,34,33.728,34,35.883V43H3c-1.103,0-2,0.897-2,2v2   c0,1.103,0.897,2,2,2v14h58V49c1.103,0,2-0.897,2-2v-2C63,43.897,62.103,43,61,43z M58,35.883V43h-7.816   c0.414-1.161,1.514-2,2.816-2h3v-5h-2v3h-1c-0.342,0-0.677,0.035-1,0.101V35h-3.834l2.279-3.798l5.504,1.835   C57.176,33.446,58,34.59,58,35.883z M45.899,43c-0.247-1.213-0.946-2.253-1.899-2.974V37h6v3.026   c-0.953,0.721-1.652,1.762-1.899,2.974H45.899z M47,28c-2.206,0-4-1.794-4-4v-4.069c1.464-0.154,2.845-0.688,4-1.596   c1.155,0.909,2.536,1.443,4,1.596V24C51,26.206,49.206,28,47,28z M53,23.722v-3.444c0.595,0.347,1,0.985,1,1.722   S53.595,23.375,53,23.722z M47,11c3.86,0,7,3.14,7,7v0.556C53.409,18.212,52.732,18,52,18h-0.171c-1.557,0-3.021-0.606-4.122-1.707   L47,15.586l-0.707,0.707C45.192,17.394,43.729,18,42.171,18H42c-0.732,0-1.409,0.212-2,0.556V18C40,14.14,43.14,11,47,11z M40,22   c0-0.737,0.405-1.375,1-1.722v3.444C40.405,23.375,40,22.737,40,22z M47,30c0.702,0,1.373-0.128,2-0.35v0.073l-2,3.333l-2-3.333   V29.65C45.627,29.872,46.298,30,47,30z M36,35.883c0-1.293,0.824-2.437,2.051-2.846l5.504-1.835L45.834,35H42v4.101   C41.677,39.035,41.342,39,41,39h-1v-3h-2v5h3c1.302,0,2.402,0.839,2.816,2H36V35.883z M59,61H5V49h54V61z M3,47v-2h58l0.001,2H3z"/>
                        
                        <rect height="2" width="2" x="55" y="57"/>
                        
                        <rect height="2" width="2" x="51" y="57"/>
                        
                        <rect height="2" width="2" x="47" y="57"/>
                        
                        <rect height="2" width="2" x="43" y="57"/>
                        
                        <rect height="2" width="14" x="43" y="53"/>
                        
                        <path d="M19,37c9.925,0,18-8.075,18-18S28.925,1,19,1S1,9.075,1,19S9.075,37,19,37z M3.051,20.008C4.081,19.359,5.247,19,6.467,19   c1.153,0,2.275-0.23,3.335-0.685l4.369-1.873C14.857,16.149,15.583,16,16.33,16c1.915,0,3.716,1.02,4.7,2.661l0.494,0.823   C21.835,20.003,22,20.597,22,21.202v0.103c0,0.826-0.321,1.602-0.905,2.186C20.122,24.464,18.828,25,17.452,25   c-0.796,0-1.593-0.188-2.304-0.544l-1.236-0.618C12.816,23.29,11.589,23,10.363,23C8.508,23,7,24.508,7,26.363   c0,1.394,0.877,2.659,2.182,3.148l3.018,1.132c1.607,0.602,2.697,2.124,2.784,3.826C8.417,32.762,3.49,26.992,3.051,20.008z    M25.166,33.761C24.416,32.613,24,31.304,24,29.916c0-1.449,0.772-2.812,2.015-3.558C27.856,25.252,29,23.232,29,21.084v-1.416   c0-2.043,0.882-3.986,2.419-5.332l2.161-1.891C34.485,14.449,35,16.664,35,19C35,25.638,30.936,31.342,25.166,33.761z    M32.613,10.635l-2.511,2.197C28.131,14.557,27,17.049,27,19.668v1.416c0,1.449-0.772,2.812-2.015,3.558   C23.144,25.748,22,27.768,22,29.916c0,1.582,0.424,3.138,1.205,4.505C21.863,34.787,20.457,35,19,35   c-0.682,0-1.349-0.057-2.009-0.14C16.993,34.801,17,34.742,17,34.684c0-2.618-1.647-4.995-4.098-5.914l-3.018-1.132   C9.355,27.44,9,26.928,9,26.363C9,25.611,9.611,25,10.363,25c0.917,0,1.835,0.217,2.654,0.627l1.237,0.618   C15.241,26.739,16.347,27,17.452,27c1.91,0,3.706-0.744,5.057-2.095c0.961-0.961,1.491-2.24,1.491-3.6v-0.103   c0-0.968-0.263-1.918-0.761-2.747l-0.494-0.823C21.401,15.392,18.943,14,16.33,14c-1.019,0-2.01,0.204-2.947,0.605l-4.368,1.872   C8.205,16.824,7.348,17,6.467,17c-1.189,0-2.335,0.27-3.404,0.745c0.095-1.214,0.312-2.394,0.664-3.518   C4.692,14.727,5.752,15,6.862,15c2.3,0,4.435-1.143,5.71-3.056l1.23-1.845C14.261,9.411,15.029,9,15.856,9   c0.941,0,1.787,0.523,2.208,1.365C18.877,11.99,20.511,13,22.329,13h0.962c1.375,0,2.683-0.593,3.588-1.628l3.313-3.787   C31.12,8.496,31.927,9.523,32.613,10.635z M19,3c3.636,0,6.982,1.233,9.672,3.285l-3.299,3.77C24.848,10.655,24.088,11,23.291,11   h-0.962c-1.055,0-2.004-0.586-2.476-1.53C19.091,7.947,17.56,7,15.856,7c-1.497,0-2.887,0.744-3.718,1.99l-1.23,1.845   C10.004,12.191,8.492,13,6.862,13c-0.856,0-1.671-0.223-2.4-0.642C6.991,6.846,12.549,3,19,3z"/>
                        
                        </g>
                        
                        </svg>
                    </div>
                    <span class="nav-text">Live Url</span>
                </a>
            </li>


            <li><a href="{{url('admin/students')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                       
                        <svg width="22" height="22" viewBox="-13.28 0 334.602 334.602" xmlns="http://www.w3.org/2000/svg"><defs><style>.a{fill:#ffffff;}.b{fill:#211715;}.c{fill:#5394cf;}.d{fill:#7a7473;}.e{fill:#ffda71;}</style></defs><path class="a" d="M155.984,133.163a4.368,4.368,0,0,1,1.506-.852c7.746-3.116,14.209-7.868,17.04-11.674,2.591,2.382,3.541,4.264,5.116,7.3-3.745,14.727-9.7,30.359-14.491,44.545l-10.7,31.694-10.7-31.694c-4.838-14.325-10.864-30.126-14.6-44.981a21.154,21.154,0,0,1,4.892-6.865c2.831,3.806,9.294,8.558,17.04,11.674a4.368,4.368,0,0,1,1.506.852Z"/><path class="a" d="M149.511,189.543q-2.373-7.023-4.744-14.048c1.508-12.358,3.578-27.473,3.578-27.9,0-.767-1.227-5.855-1.561-7.55l-.05-.178c.58-.6,1.152-1.209,1.7-1.814,2.227-2.444,3.535-3.539,3.8-3.965.17-.272.53-.575.345-.92h3.4c-.186.345.175.648.345.92.266.426,1.575,1.521,3.8,3.965.561.616,1.143,1.232,1.733,1.847-.149.595-.232.928-.232.928-.235.94-1.707,5.641-1.732,7.015-.012.729,2.144,14.935,4.1,28.055q-4.774,14.142-9.551,28.284Z"/><path class="a" d="M155.562,260.642c-9.667-6.185-21.137-8.041-32.667-7.185-11.4.846-25.936,2.156-35.053,6.781-3.436,15.988-10.23,54.925-13.169,70.471,26.777-6.752,58.944-6.752,80.894,1.9,22.217-8.489,52.55-8.489,80.883-1.9-2.939-15.546-9.733-54.483-13.169-70.471-9.117-4.625-23.208-6.6-34.608-7.448C177.143,251.934,166.4,254.568,155.562,260.642Z"/><path class="a" d="M194.643,65.935a6.524,6.524,0,0,1,4.711-1.725,6.047,6.047,0,0,1,5.432,3.018c1.846,3.2,1.768,9.1.529,12.749-.877,2.585-2.315,6.539-5.78,9.374A7.182,7.182,0,0,1,194,90.95l-.621-.105c-.538,1.892-1.326,3.871-1.622,4.77-1.31,3.554-8.26,15.588-17.224,21.141v3.881c-2.831,3.806-9.294,8.558-17.04,11.674a4.368,4.368,0,0,0-1.506.852h-3.4a4.368,4.368,0,0,0-1.506-.852c-7.746-3.116-14.209-7.868-17.04-11.674v-3.628a38.5,38.5,0,0,1-10.485-9.118,44.173,44.173,0,0,1-9.226-17,7.1,7.1,0,0,1-5.809-1.545c-3.465-2.835-4.9-6.789-5.779-9.374-1.239-3.649-1.317-9.548.528-12.749A6.05,6.05,0,0,1,108.7,64.21a6.522,6.522,0,0,1,4.711,1.725s-7.294-42.25,40.706-42.25S194.643,65.935,194.643,65.935Z"/><path class="b" d="M169.121,147.527a80.952,80.952,0,0,0,9.618-14.048c.654-1.233,1.275-2.483,1.873-3.744a5.7,5.7,0,0,0,.827-2.2,4.778,4.778,0,0,0-.823-2.06,23.479,23.479,0,0,0-4.672-6.255,2.038,2.038,0,0,0-3.141.405,27.621,27.621,0,0,1-6.776,5.935,51.468,51.468,0,0,1-5.072,2.976c-1.832.941-4,1.547-5.718,2.669-3.39,2.216.77,5.388,2.4,7.093,2.9,3.042,5.942,6.017,8.659,9.226,1.666,1.968,4.483-.874,2.828-2.828-2.189-2.587-4.653-4.923-6.962-7.4-1.007-1.08-2-2.165-3.051-3.207l-.972-.968c-.1-.1-.188-.2-.282-.307.453.5-.043-.095-.174-.332l.273,1.009.031-.331-.586,1.414c.563-.59,2-.9,2.77-1.244q1.422-.63,2.806-1.34a51.141,51.141,0,0,0,5.565-3.31,32.614,32.614,0,0,0,7.718-7.036l-3.141.405a22.855,22.855,0,0,1,4.6,6.5v-2.019a80.713,80.713,0,0,1-11.419,18.17C164.649,146.659,167.465,149.5,169.121,147.527Z"/><path class="b" d="M142.275,144.7a80.642,80.642,0,0,1-11.419-18.17v2.019a22.835,22.835,0,0,1,4.6-6.5l-3.141-.405a32.614,32.614,0,0,0,7.718,7.036,50.806,50.806,0,0,0,5.371,3.209q1.477.767,3,1.441c.774.343,2.206.654,2.77,1.244l-.586-1.414.031.331.273-1.009c-.093.167-.7.878-.174.332-.1.1-.182.21-.283.307-.294.286-.581.58-.872.869-1.081,1.074-2.112,2.191-3.15,3.306-2.308,2.478-4.773,4.813-6.963,7.4-1.654,1.953,1.162,4.8,2.829,2.828,2.674-3.158,5.669-6.074,8.516-9.076,1.63-1.718,5.985-4.992,2.539-7.243-1.656-1.083-3.751-1.669-5.522-2.57a51.588,51.588,0,0,1-5.1-2.964,27.875,27.875,0,0,1-6.943-6.046,2.038,2.038,0,0,0-3.141-.405,23.1,23.1,0,0,0-4.584,6.089,6.406,6.406,0,0,0-.875,1.96,4.17,4.17,0,0,0,.7,2.267q.939,1.992,1.966,3.94a80.836,80.836,0,0,0,9.617,14.048C141.1,149.5,143.919,146.66,142.275,144.7Z"/><path class="b" d="M148.871,149.485c3.563,0,7.126-.078,10.689-.08a2,2,0,0,0,0-4c-3.563,0-7.126.079-10.689.08a2,2,0,1,0,0,4Z"/><path class="b" d="M144.855,140.572c.277,1.379.6,2.749.906,4.123.141.641.282,1.282.411,1.926.057.284.109.569.163.854.089.476.048-.37.01.115-.122,1.555-.386,3.107-.589,4.653-1.02,7.772-2.047,15.543-3,23.325a2.011,2.011,0,0,0,2,2,2.049,2.049,0,0,0,2-2c.962-7.871,2-15.731,3.033-23.592a30.746,30.746,0,0,0,.545-4.524,20.557,20.557,0,0,0-.718-3.821c-.3-1.374-.629-2.743-.906-4.123-.506-2.522-4.363-1.454-3.857,1.064Z"/><path class="b" d="M165.738,174.066c-1.12-7.492-2.265-14.982-3.345-22.48q-.119-.825-.234-1.65c-.035-.247-.069-.493-.1-.74-.071-.519.008.078-.035-.258a7.56,7.56,0,0,1-.1-1.333q.018-.195-.006.054c.026-.152.055-.3.086-.456.057-.259.112-.518.173-.777.161-.676.342-1.348.527-2.018.282-1.019.6-2.03.865-3.053.646-2.494-3.211-3.558-3.857-1.064a52.031,52.031,0,0,0-1.756,7.042,19.47,19.47,0,0,0,.51,4.773c1.1,7.681,2.276,15.35,3.423,23.024a2.014,2.014,0,0,0,2.46,1.4,2.051,2.051,0,0,0,1.4-2.461Z"/><path class="c" d="M88.592,235.991,65.4,248.09c-8.94-3.11-20.033-18.633-18.283-28.217,1.028-5.632,3.148-10.753,5.163-15.753,3.559-8.83,11.363-26.274,14.865-32.921,1.954-3.71,3.937-7.71,6.051-11.409a38.99,38.99,0,0,1,16.323-15.433c9.782-4.941,21.949-9.465,31.529-13.726a43.125,43.125,0,0,1,7.413-5.952c3.653,15.662,10.144,32.567,15.289,47.8l10.7,31.694,10.7-31.694c5.145-15.237,11.635-32.142,15.288-47.8a43.547,43.547,0,0,1,7.532,6.064c8.182,4.287,18.579,7.883,27.642,12.027a41.126,41.126,0,0,1,19.1,17.8c2.228,4.11,4.307,8.522,5.905,12.222,3.167,7.333,14.056,34,17.083,44.417,1.164,4,1.727,9.413.084,13.833a82.269,82.269,0,0,1-9.334,17.75l-34.333-11.75c.861-.629,4.026-3.048,4.026-3.048,2.008-2.686,5.409-10.982,4.766-14.365-2.315-4.345-5.957-10.864-9.728-15.415-.768,11.35-1.556,23.135-2.139,34.293-23.037.022-73.88.044-97.891.064,0,0-10.851,0-14.882,0-.829-12.287-1.919-25.335-2.947-37.728-.4.444-.649.724-.649.724a105.806,105.806,0,0,0-7.738,12.012c-2.54,5.22-1.01,5.811,2.38,10.08,1.691,2.13,3.746,5.074,6.18,8.73Z"/><path class="b" d="M156.571,258.916c-10.012-6.336-22-8.3-33.676-7.459-10.642.763-21.844,1.521-31.928,5.268-1.091.4-2.171.852-3.226,1.344a3.278,3.278,0,0,0-1.626,1.159,5.139,5.139,0,0,0-.423,1.516q-.495,2.35-.964,4.706-1.17,5.845-2.264,11.7c-1.729,9.166-3.4,18.343-5.061,27.521-1.541,8.5-3.055,17.01-4.659,25.5a2.026,2.026,0,0,0,2.46,2.46,160.578,160.578,0,0,1,31.9-4.616,139.244,139.244,0,0,1,30.964,1.827,94.308,94.308,0,0,1,13.941,3.576c1,.345,2,.853,3.024,1.116,1.206.312,2.793-.647,3.927-1.032q3.423-1.162,6.932-2.043a125.22,125.22,0,0,1,31.589-3.476,176.382,176.382,0,0,1,38.435,4.648,2.027,2.027,0,0,0,2.46-2.46c-3.1-16.421-5.956-32.889-9.024-49.316Q228.2,274.683,227,268.514q-.518-2.645-1.055-5.286c-.333-1.628-.371-4.016-1.965-4.872-4.525-2.43-9.79-3.757-14.779-4.816a145.7,145.7,0,0,0-16.6-2.42,65.914,65.914,0,0,0-19.195.613,64.943,64.943,0,0,0-18.859,7.183c-2.249,1.252-.234,4.708,2.019,3.453a57.585,57.585,0,0,1,26.469-7.718,94.732,94.732,0,0,1,13.227.85,123.624,123.624,0,0,1,13.083,2.161,56.377,56.377,0,0,1,12.922,4.3l-.919-1.2c4.082,19.033,7.286,38.266,10.765,57.415.791,4.354,1.582,8.708,2.4,13.056l2.46-2.46c-21.478-4.964-44.28-6.65-66.044-2.519a94.407,94.407,0,0,0-15.9,4.422H156.1c-9.54-3.734-19.768-5.552-29.95-6.361a159.763,159.763,0,0,0-33.4.959,164.632,164.632,0,0,0-18.608,3.5l2.46,2.46c3.6-19.045,6.866-38.151,10.512-57.188.849-4.434,1.711-8.868,2.657-13.283l-.919,1.2c7.395-3.7,16.1-4.806,24.227-5.659,8.959-.939,18.057-1.775,26.945.164a44.928,44.928,0,0,1,14.529,5.9C156.734,263.75,158.743,260.29,156.571,258.916Z"/><path class="b" d="M153.619,269.651c0,16.267-.168,32.534-.169,48.8,0,2.574,4,2.578,4,0,0-16.267.167-32.534.169-48.8,0-2.574-4-2.578-4,0Z"/><path class="d" d="M136.555,4.936a46.109,46.109,0,0,0-11.7,6.237A48.089,48.089,0,0,0,104.7,48.908a52.338,52.338,0,0,0,1.921,15.641,7.8,7.8,0,0,1,2.077-.339,6.522,6.522,0,0,1,4.711,1.725l6.061-4.7c4.913-5.475,13.585-13.727,19.67-16.919.714-.374,1.63.132,1.919,1.325a7.845,7.845,0,0,1,.188,2.855,1.486,1.486,0,0,0,2.118,1.6c4.345-2.413,12.085-7.271,17.574-9.583a16.009,16.009,0,0,1,8.778,1.36,25.964,25.964,0,0,1,6.876,4.435c4.914,4.228,9.625,10.029,11.711,15.279l6.338,4.355a6.524,6.524,0,0,1,4.711-1.725,8.082,8.082,0,0,1,1.9.283,50.327,50.327,0,0,0,1.872-15.585c-.814-19.039-10.523-30.865-19.906-37.559A48.641,48.641,0,0,0,153.91,2.012,50.889,50.889,0,0,0,136.555,4.936Z"/><path class="b" d="M97.222,231.38c-1.958-2.937-3.943-5.86-6.111-8.648-.863-1.109-1.832-2.147-2.654-3.287a2.808,2.808,0,0,1-.768-2.158c.324-2.528,2.263-5.1,3.59-7.2,1.619-2.559,3.317-5.075,5.121-7.508a2.014,2.014,0,0,0-.718-2.736,2.046,2.046,0,0,0-2.736.717c-1.908,2.575-3.7,5.241-5.4,7.957-1.586,2.534-3.433,5.347-3.809,8.37-.379,3.061,1.727,5.2,3.523,7.394,2.368,2.888,4.442,6.016,6.511,9.12,1.421,2.132,4.887.131,3.454-2.019Z"/><path class="b" d="M61.538,219.852a50.243,50.243,0,0,1,16.967-1.135,2.013,2.013,0,0,0,2-2,2.046,2.046,0,0,0-2-2A53.544,53.544,0,0,0,60.474,216c-2.5.6-1.442,4.461,1.064,3.857Z"/><path class="b" d="M212.146,206.094a70.1,70.1,0,0,1,5.32,7.911q1.227,2.061,2.38,4.165.477.864.943,1.734l.24.446q-.085-.541-.056-.219a5.239,5.239,0,0,1,.012.675,20.382,20.382,0,0,1-1.686,6.518,24.318,24.318,0,0,1-2.886,5.656l.718-.717q-1.258.969-2.53,1.92a2.062,2.062,0,0,0-.718,2.736,2.015,2.015,0,0,0,2.737.718,14.516,14.516,0,0,0,3.476-2.958,22.474,22.474,0,0,0,1.783-3.268,32.915,32.915,0,0,0,2.934-8.932,6.734,6.734,0,0,0-.33-4.148c-.847-1.668-1.79-3.3-2.726-4.918a81.9,81.9,0,0,0-6.782-10.147,2.013,2.013,0,0,0-2.829,0,2.048,2.048,0,0,0,0,2.828Z"/><path class="b" d="M231.524,220.2c-.581.254-.04.022.089-.023q.243-.084.492-.154c.353-.1.711-.182,1.072-.251.19-.036.382-.065.573-.1q.337-.048-.088.009l.3-.037c.413-.047.827-.082,1.242-.11a48.461,48.461,0,0,1,5.071-.02,2.015,2.015,0,0,0,2-2,2.042,2.042,0,0,0-2-2c-3.571-.139-7.438-.228-10.772,1.23a2.006,2.006,0,0,0-.717,2.736,2.062,2.062,0,0,0,2.736.718Z"/><path class="b" d="M1.932,240.671q20.667,0,41.335-.046,4.713,0,9.424-.006c2.574,0,2.578-4,0-4q-21.044,0-42.088.046-4.336,0-8.671.006c-2.574,0-2.578,4,0,4Z"/><path class="b" d="M254.691,240.671q20.944,0,41.888-.045,4.768-.006,9.538-.007c2.574,0,2.578-4,0-4q-21.321,0-42.642.046-4.392,0-8.784.006c-2.574,0-2.578,4,0,4Z"/><path class="b" d="M113.151,240.569q17.49-.015,34.98-.024l39.625-.024q9.261-.006,18.523-.014c2.574,0,2.578-4,0-4q-17.608.015-35.218.025-19.781.012-39.559.024l-18.351.013c-2.574,0-2.578,4,0,4Z"/><path class="b" d="M117.774,129.9c-5.849,2.525-11.768,4.883-17.624,7.39-5.442,2.33-11.137,4.6-16.055,7.942a41.491,41.491,0,0,0-11.6,11.863,159.628,159.628,0,0,0-8.026,14.957c-4.176,8.338-7.939,16.9-11.591,25.482-2.041,4.792-4.109,9.608-5.766,14.547a39,39,0,0,0-2.13,8.817,18.189,18.189,0,0,0,.655,6.12,37.7,37.7,0,0,0,7.549,13.974c3.105,3.8,7,7.348,11.685,9.03,2.427.872,3.472-2.992,1.063-3.857-3.658-1.314-6.763-4.311-9.265-7.221a35.016,35.016,0,0,1-6.635-11.212,17.649,17.649,0,0,1-1.1-5.775,25.985,25.985,0,0,1,1.549-7.312c1.486-4.8,3.464-9.451,5.415-14.073,3.537-8.38,7.237-16.713,11.227-24.888,2.185-4.478,4.5-8.915,6.9-13.279A39.456,39.456,0,0,1,84.3,149.99c4.937-3.832,10.922-6.249,16.616-8.712,6.263-2.71,12.609-5.224,18.875-7.928a2.013,2.013,0,0,0,.718-2.736,2.053,2.053,0,0,0-2.737-.718Z"/><path class="b" d="M91.074,172.153c1.123,16.446,2.636,32.863,3.931,49.3q.579,7.338,1.1,14.68c.178,2.554,4.18,2.574,4,0-1.192-17.068-2.73-34.11-4.076-51.166q-.505-6.4-.952-12.81c-.175-2.555-4.176-2.574-4,0Z"/><path class="b" d="M188.858,133.433c5.543,2.717,11.3,4.981,17,7.322,5.215,2.138,10.551,4.191,15.205,7.426A38.694,38.694,0,0,1,231.8,159.535a111.25,111.25,0,0,1,7.321,14.8q.162.378.323.757l.231.546q.414.979.822,1.963,1.013,2.43,2.008,4.868,2.4,5.857,4.716,11.747c2.906,7.381,5.864,14.793,8.207,22.377a27.938,27.938,0,0,1,1.371,7.582,20.618,20.618,0,0,1-1.932,8.812,69.777,69.777,0,0,1-8.145,14.789,2.014,2.014,0,0,0,.718,2.737,2.048,2.048,0,0,0,2.736-.718,69.306,69.306,0,0,0,7.479-13.277,31.808,31.808,0,0,0,2.871-8.2,26.755,26.755,0,0,0-.234-8.814,68.434,68.434,0,0,0-3.242-10.584c-1.482-4.146-3.048-8.261-4.643-12.365q-4.326-11.136-8.95-22.156c-4.039-9.581-8.328-19.477-16.293-26.48-4.99-4.388-10.761-7.065-16.833-9.612-6.5-2.727-13.117-5.221-19.456-8.327-2.3-1.129-4.332,2.32-2.018,3.453Z"/><path class="b" d="M213.219,172.123c-.872,16.459-2.135,32.9-3.179,49.343q-.466,7.344-.873,14.693c-.14,2.572,3.86,2.564,4,0,.931-17.082,2.209-34.142,3.295-51.215q.408-6.408.757-12.821c.136-2.572-3.865-2.565-4,0Z"/><path class="b" d="M156.381,204.709q5.493-16.267,10.987-32.535c3.375-9.943,7-19.8,10.185-29.808,1.8-5.661,3.461-11.37,4.819-17.155l-2.938,1.2a40.133,40.133,0,0,1,7.247,5.871,42.433,42.433,0,0,1,3.294,3.645c.433.545.842,1.11,1.226,1.69q.266.4.514.815c.073.121.467.857.46.708l.273-1.009q.431-.41-.258.056l-.842.465-1.683.928-3.367,1.857a2.017,2.017,0,0,0-.405,3.142c1.6,1.448,3.191,2.9,4.736,4.41a11.156,11.156,0,0,1,2.115,2.129c.265.512.133-.241,0,.3a10.484,10.484,0,0,1-.76,1.691q-2.559,5.652-5.346,11.2c-3.643,7.24-7.59,14.322-11.756,21.273q-3.693,6.162-7.579,12.206c-1.391,2.176,2.07,4.184,3.454,2.019A350.617,350.617,0,0,0,196.2,153.432a4.475,4.475,0,0,0,.444-3.525,8.256,8.256,0,0,0-2.2-2.776c-1.85-1.856-3.783-3.627-5.725-5.386l-.4,3.141,4.419-2.437c1.225-.676,2.956-1.284,3.368-2.782.6-2.169-2.066-5.031-3.3-6.574a44.969,44.969,0,0,0-11.35-10.141,2.017,2.017,0,0,0-2.938,1.2,309.718,309.718,0,0,1-9.288,30.5Q163.94,169.9,158.753,185.2l-6.229,18.448c-.826,2.445,3.036,3.494,3.857,1.064Z"/><path class="b" d="M141.733,197.669a338.494,338.494,0,0,1-24.085-43.058,17.139,17.139,0,0,1-1.487-3.195c-.027-.124-.145-.316-.167-.119.01-.086.376-.4.485-.515q.563-.581,1.136-1.149c1.749-1.738,3.569-3.4,5.4-5.059a2.017,2.017,0,0,0-.4-3.142l-3.367-1.857-1.684-.928-.842-.465q-.689-.465-.258-.056l.273,1.009c-.008.181.317-.464.382-.575.188-.321.387-.637.593-.948.351-.53.721-1.048,1.113-1.549a41.006,41.006,0,0,1,3.406-3.786,40.14,40.14,0,0,1,7.248-5.871l-2.938-1.2a309.442,309.442,0,0,0,9.287,30.5q5.288,15.26,10.474,30.55l6.23,18.449c.819,2.426,4.684,1.385,3.857-1.064q-5.493-16.266-10.987-32.534c-3.375-9.943-7-19.8-10.185-29.808-1.8-5.662-3.461-11.37-4.819-17.155a2.017,2.017,0,0,0-2.938-1.2A44.974,44.974,0,0,0,116.1,133.093c-1.236,1.545-3.9,4.4-3.3,6.574.393,1.431,1.984,2.019,3.157,2.666l4.63,2.553-.4-3.141c-1.713,1.552-3.419,3.113-5.068,4.734-1.45,1.427-3.443,2.994-3.026,5.274a13.032,13.032,0,0,0,1.212,2.966q.738,1.59,1.49,3.174,1.479,3.115,3.011,6.206,5.8,11.685,12.473,22.906,3.851,6.435,8,12.683c1.416,2.136,4.882.135,3.454-2.019Z"/><path class="b" d="M167.69,215.106a4.228,4.228,0,0,1,.456.421,1.121,1.121,0,0,1,.215.251c.018.042-.262-.406-.172-.217.032.067.092.134.13.2.109.173.185.363.288.537s-.148-.29-.11-.261a.424.424,0,0,1,.049.132c.039.12.08.238.113.359a1.575,1.575,0,0,1,.126.6c0,.015-.053-.571-.038-.249,0,.047.008.094.011.141.008.127.011.253.01.379,0,.095,0,.19-.01.285,0,.047-.008.094-.011.142-.015.321.034-.264.038-.25a1.676,1.676,0,0,1-.137.648c-.03.106-.067.21-.1.315a.468.468,0,0,1-.049.133c-.035.025.213-.442.111-.261-.117.206-.207.421-.337.621a.879.879,0,0,1-.161.233c-.04.025.317-.369.166-.219-.045.044-.082.1-.125.143-.064.071-.131.139-.2.2-.049.045-.1.086-.151.132-.171.159.362-.257.167-.128s-.363.245-.557.35c-.1.056-.213.1-.319.158-.168.084.239-.1.242-.1a1.9,1.9,0,0,0-.192.072,5.59,5.59,0,0,1-.694.2c-.051.011-.277.021-.305.057.009-.012.547-.058.224-.032-.069.006-.137.013-.206.018a5.563,5.563,0,0,1-.671,0,1.469,1.469,0,0,1-.358-.031c-.041-.013.5.083.278.034-.083-.018-.168-.03-.251-.048a4.817,4.817,0,0,1-.635-.187c-.02-.007-.124-.062-.142-.054,0,0,.409.189.246.1-.118-.065-.241-.121-.357-.19s-.2-.126-.3-.193c-.273-.185.313.293.09.062-.156-.162-.306-.333-.463-.493.4.413.163.213.061.056-.06-.093-.117-.188-.171-.286-.045-.083-.085-.17-.129-.254-.071-.139-.051-.284.089.216-.017-.06-.046-.119-.067-.178a4.924,4.924,0,0,1-.167-.6.917.917,0,0,1-.06-.329c.013-.049.046.513.041.3,0-.063-.011-.128-.016-.191a5.365,5.365,0,0,1,0-.671c0-.095.019-.191.024-.286.012-.209-.023.33-.039.294a.838.838,0,0,1,.043-.236,5.433,5.433,0,0,1,.161-.6c.028-.083.184-.472.035-.119s.018-.027.06-.108c.1-.2.224-.383.345-.571.177-.272-.3.341-.078.1.086-.094.169-.192.26-.283.133-.132.468-.319-.022-.013.1-.064.2-.14.3-.2s.239-.141.362-.2c.047-.024.094-.046.141-.069.3-.15-.371.137-.142.058a7.012,7.012,0,0,1,.753-.226c.051-.012.1-.022.154-.032.382-.073-.122.051-.168.014.039.031.309-.029.367-.032a7.864,7.864,0,0,1,.841.018c.193.01-.272-.039-.272-.039a.841.841,0,0,0,.207.036c.137.026.272.058.406.095s.265.084.4.13c.065.022.248.1-.047-.023-.337-.141-.01,0,.044.03.108.055.214.115.317.179.133.081.569.425.062.02a2.176,2.176,0,0,0,1.415.586,2,2,0,0,0,1.414-3.415,7.157,7.157,0,0,0-8.27-.58,6.982,6.982,0,0,0-2.921,7.3,6.405,6.405,0,0,0,1.833,3.374,6.749,6.749,0,0,0,4.071,1.726,6.9,6.9,0,0,0,6.791-3.583c1.266-2.686.914-6.274-1.5-8.235a2.16,2.16,0,0,0-1.414-.585,2,2,0,0,0-1.415,3.414Z"/><path class="b" d="M114.825,64.521a9.089,9.089,0,0,0-9.907-1.44,8.675,8.675,0,0,0-4.5,5.95c-1.554,5.983-.033,12.846,3.352,17.955,2.279,3.438,5.877,6.547,10.283,5.964a2.066,2.066,0,0,0,2-2c0-.971-.922-2.143-2-2-3.613.478-6.1-2.5-7.672-5.389a20.214,20.214,0,0,1-2.48-7.921c-.2-2.55-.186-5.861,1.472-7.99,1.315-1.687,4.753-1.975,6.619-.3,1.912,1.715,4.75-1.105,2.829-2.828Z"/><path class="b" d="M196.058,67.349c1.866-1.674,5.306-1.384,6.619.3,1.658,2.129,1.668,5.44,1.472,7.99a20.252,20.252,0,0,1-2.48,7.921c-1.568,2.892-4.06,5.866-7.672,5.389a2.009,2.009,0,0,0-2,2,2.052,2.052,0,0,0,2,2c7.267.961,11.733-7.151,13.433-13.035,1.467-5.079,1.53-13.073-3.427-16.354a9.025,9.025,0,0,0-10.774.96c-1.92,1.722.916,4.543,2.829,2.828Z"/><path class="b" d="M191.942,88.067a24.891,24.891,0,0,1-1.3,4.72c-.212.6-.437,1.2-.65,1.8-.071.2-.14.4-.211.6-.028.077-.206.5-.095.241.119-.28-.107.235-.142.309q-.126.269-.255.536c-.2.408-.407.811-.62,1.21-.521.975-1.076,1.931-1.656,2.872a50.633,50.633,0,0,1-10.811,12.771,20.33,20.33,0,0,1-8.136,4.223c-2.507.582-1.446,4.44,1.063,3.857,6.115-1.421,11.2-5.849,15.218-10.481A56.058,56.058,0,0,0,193,97.76a32.369,32.369,0,0,0,2.8-8.629,2.069,2.069,0,0,0-1.4-2.461,2.015,2.015,0,0,0-2.46,1.4Z"/><path class="b" d="M111.805,88.967a47.61,47.61,0,0,0,11.029,21.155c5.238,6.032,11.94,10.789,19.98,11.985a2.067,2.067,0,0,0,2.461-1.4,2.014,2.014,0,0,0-1.4-2.46c-7.442-1.107-13.367-5.372-18.215-10.956a43.452,43.452,0,0,1-10-19.39c-.539-2.516-4.4-1.452-3.857,1.063Z"/><path class="b" d="M182.1,8.175a53.2,53.2,0,0,0-49.274-3.886A50.9,50.9,0,0,0,105.25,34.513a53.237,53.237,0,0,0-.678,30.115c.644,2.49,4.5,1.434,3.857-1.064a49.425,49.425,0,0,1-.082-25.455,44.951,44.951,0,0,1,9.283-17.555A46.36,46.36,0,0,1,155.043,4.023a47.709,47.709,0,0,1,25.034,7.606c2.173,1.393,4.181-2.067,2.018-3.454Z"/><path class="b" d="M203.278,64.628a55.663,55.663,0,0,0,.738-24.84,48.183,48.183,0,0,0-8.262-18.84,50.18,50.18,0,0,0-6.916-7.653c-1.911-1.716-4.749,1.1-2.828,2.828a46.356,46.356,0,0,1,15.152,34.116,51.625,51.625,0,0,1-1.741,13.325c-.618,2.5,3.238,3.565,3.857,1.064Z"/><path class="b" d="M168.129,43.339a32.889,32.889,0,0,1,10.539,7.683,36.218,36.218,0,0,1,7.709,11.09,2.062,2.062,0,0,0,2.46,1.4,2.013,2.013,0,0,0,1.4-2.46,41.021,41.021,0,0,0-8.5-12.6,36.077,36.077,0,0,0-11.591-8.561,2.064,2.064,0,0,0-2.736.718,2.014,2.014,0,0,0,.718,2.736Z"/><path class="b" d="M120.885,62.646a91.248,91.248,0,0,1,16.458-14.91c.621-.417,1.254-.819,1.9-1.2.109-.063.625-.263.647-.385l-.841-.193.04.053c-.062.169.126.5.154.693.133.885-.1,1.773.069,2.649a3.546,3.546,0,0,0,1.547,2.341c1.749,1.111,3.334.231,4.915-.676s3.164-1.843,4.747-2.763a105.341,105.341,0,0,1,11.427-6.028,2.012,2.012,0,0,0,.717-2.736,2.052,2.052,0,0,0-2.736-.717,96.719,96.719,0,0,0-10.246,5.344c-1.653.953-3.3,1.922-4.947,2.88-.63.365-1.26.729-1.894,1.086.036-.02-.488.254-.487.273-.058-.776.911.2.869.244.144-.158.077-.852.076-1.076-.012-1.912-.506-4.294-2.49-5.083-1.771-.7-3.352.455-4.8,1.38a70.684,70.684,0,0,0-8.859,6.938,119.033,119.033,0,0,0-9.1,9.053c-1.719,1.908,1.1,4.746,2.828,2.828Z"/><path class="b" d="M152.524,203.645a49.478,49.478,0,0,0-1.914,17.227,144.02,144.02,0,0,0,2.745,17.783c.513,2.52,4.369,1.454,3.857-1.064a135.364,135.364,0,0,1-2.6-16.719,44.289,44.289,0,0,1-.028-7.49,50.4,50.4,0,0,1,1.8-8.673c.689-2.485-3.169-3.545-3.857-1.064Z"/><path class="a" d="M116.109,260.173c9.3-3.586.74-15.8-2.958-20.924-4.5-6.228-16.007-6.546-21.671-6.609-5.009-.056-12.39.6-16.46,3.86-2.84,2.28-6.952,6.09-8.842,10.59a12.1,12.1,0,0,0-.49,1.43c-.78,2.61,2.652,9.51,4.082,13.87,1.11,3.39,1.92,6.88,3.56,10.06,1.93,3.72,8.95,11.94,13.01,5.96l1.641-2.089c4.428,3.493,9.647,5.065,11.507-2.233,2.473.946,5.071.663,7.606-1.835Z"/><path class="b" d="M79.882,270.217a27.839,27.839,0,0,0,7.088,7.832c2.809,2.169,6.642,4.231,10.2,2.618,2.123-.963,3.3-3.081,4.012-5.2a2,2,0,0,0-3.857-1.063,5.6,5.6,0,0,1-.57,1.321,6.77,6.77,0,0,1-.4.629c.25-.343-.178.186-.238.245-.088.088-.61.456-.192.192-.166.1-.346.2-.509.3-.242.16.316-.05-.192.062-.126.027-.753.125-.171.069a6,6,0,0,1-1.183-.007c.56.057-.124-.04-.235-.067-.211-.05-.42-.11-.626-.177s-.424-.148-.632-.233c.427.175-.248-.123-.32-.159-.411-.205-.811-.431-1.2-.673a21.906,21.906,0,0,1-4.467-3.768q-.52-.549-1.014-1.124-.237-.276-.466-.556c-.049-.06-.5-.639-.226-.277a18.469,18.469,0,0,1-1.342-1.985c-1.289-2.227-4.747-.215-3.454,2.019Z"/><path class="b" d="M87.3,264.657c2.476,3.723,5.265,7.525,9.039,10.03a10.317,10.317,0,0,0,5.915,1.9,9.548,9.548,0,0,0,6.259-2.917c1.86-1.787-.971-4.613-2.829-2.828a7.021,7.021,0,0,1-2.094,1.458,3.933,3.933,0,0,1-1.859.282,8.1,8.1,0,0,1-1.775-.447,11.259,11.259,0,0,1-2.185-1.31c-2.8-2.1-5.055-5.234-7.017-8.184-1.419-2.134-4.885-.133-3.454,2.019Z"/><path class="b" d="M84.613,277.4a2.14,2.14,0,0,1-2.806.924,10.319,10.319,0,0,1-3.767-2.8c-2.834-2.984-4.174-6.582-5.354-10.474-1.293-4.265-3.133-8.316-4.461-12.562a14.619,14.619,0,0,1-.615-2.45,2.716,2.716,0,0,1,.225-1.7,17.938,17.938,0,0,1,3.691-5.817c2.782-3.136,5.809-5.737,9.923-6.822a41.721,41.721,0,0,1,11.666-1.034c6.477.15,14.772.625,18.878,6.384a40.47,40.47,0,0,1,5.535,9.634,9.919,9.919,0,0,1,.722,4.5,3.969,3.969,0,0,1-2.673,3.061,2.063,2.063,0,0,0-1.4,2.46,2.013,2.013,0,0,0,2.46,1.4,8.71,8.71,0,0,0,4.753-3.858,9.249,9.249,0,0,0,.734-5.735c-.587-3.911-2.736-7.587-4.873-10.846a42.258,42.258,0,0,0-3.231-4.512,14.838,14.838,0,0,0-5.257-3.705,37.183,37.183,0,0,0-12.945-2.674,56.379,56.379,0,0,0-13.089.559,22.954,22.954,0,0,0-7.087,2.358,26.238,26.238,0,0,0-5.62,4.6c-3.293,3.313-7.121,7.976-6.251,12.949a35.184,35.184,0,0,0,2.156,6.621c.931,2.381,1.833,4.747,2.577,7.195A41.982,41.982,0,0,0,71.9,274a22.978,22.978,0,0,0,4.042,5.088,11.605,11.605,0,0,0,5.747,3.321c2.7.454,4.841-.835,6.376-2.991a2.016,2.016,0,0,0-.717-2.736,2.044,2.044,0,0,0-2.737.717Z"/><path class="b" d="M110.788,258.09c.767,1.392,9.964,18.513,14.118,25.619a2.87,2.87,0,0,0,3.977,1h0a2.87,2.87,0,0,0,1.084-3.725c-5.894-11.93-25.881-50.8-31.087-59.658-1.049-1.786-2.121-1.825-3.237-1.295a37.6,37.6,0,0,0-3.454,1.915c-1.219.811-1.623,1.761-.989,2.93,2.858,5.269,7.419,12.2,10.883,17.572,2.92,4.53,6.214,10.848,8.7,15.642"/><path class="a" d="M111.861,260.04c2.283,3.177,3.905,6.388,6.421,9.3,2.168,2.511,4.6,4.8,4.633,6.487.076,3.878-2.813,4.866-6.09,2.781a55.035,55.035,0,0,1-6.884-5.3c-4.872-4.547-9.87-10.315-11.187-11.154"/><path class="b" d="M110.134,261.049c2.373,3.34,4.321,6.949,7.03,10.046a25.178,25.178,0,0,1,3.516,4.234,2.16,2.16,0,0,1-.161,2.186c-.575.458-1.879-.134-2.684-.634-1.092-.679-2.136-1.447-3.163-2.218a72.415,72.415,0,0,1-8.372-7.783c-2.065-2.137-4.051-4.772-6.537-6.449-2.139-1.444-4.143,2.02-2.019,3.454.247.166-.094-.081-.115-.1.079.067.162.131.238.2.191.18.387.354.577.535.516.495,1.014,1.009,1.511,1.522,1.367,1.411,2.714,2.84,4.084,4.248a72.952,72.952,0,0,0,9.758,8.662c2.451,1.757,5.743,3.876,8.741,2.014a5.53,5.53,0,0,0,2.357-4.449c.155-1.993-.882-3.553-2.082-5.042-1.568-1.946-3.361-3.678-4.8-5.734-1.534-2.2-2.876-4.527-4.43-6.714-1.48-2.081-4.95-.085-3.454,2.019Z"/><path class="a" d="M206.041,238.908q-.53.356-1.063.771c-3.625,2.614-6.354,4.907-7.319,7.111a4.482,4.482,0,0,0,1.474,5.278l1.852,1.1c-1.463,1.06-2.867,2.13-4.255,3.32-2.49,2.12-4.09,4.58-3.49,6.51.987,3.139,4.189,2.852,5.695,2a24.437,24.437,0,0,0-2.289,1.989,4.758,4.758,0,0,0,.424,6.277c1.411,1.147,4.578.887,6.871-.594l2.478-1.77c-1.538,1.839-1.57,4.3.406,5.6,1.813,1.188,4.833.506,6.181-.153a93.245,93.245,0,0,0,8.3-5.174c1.007-.628,2.828-1.728,4.62-2.834,1.549-1.7-.519,1.108-1.334,2.7a7.5,7.5,0,0,0-.639,2.055,3.145,3.145,0,0,0,.917,2.862c2.057,2.17,4.732-.471,7.417-2.167a33.589,33.589,0,0,0,6.338-4.718,24.666,24.666,0,0,0,6.824-12.082,16.258,16.258,0,0,0-.9-11.215,20.254,20.254,0,0,0-4.49-5.874c-2.607-1.971-8.382-3.582-11.143-3.858A54.253,54.253,0,0,0,217,235.791C212.945,236.11,209.506,236.587,206.041,238.908Z"/><path class="b" d="M217.091,254.55l.032-.022-2.019-3.454c-3.787,2.836-7.789,5.414-11.66,8.135-1.24.871-2.475,1.752-3.69,2.659-1.691,1.263-3.829,2.579-5.022,4.366a6.9,6.9,0,0,0-.373,6.678,5.426,5.426,0,0,0,4.969,3.063c3.55.136,6.135-1.943,8.84-3.875a2.056,2.056,0,0,0,.718-2.736,2.017,2.017,0,0,0-2.737-.718c-1.651,1.18-3.31,2.71-5.326,3.188a4.6,4.6,0,0,1-2,.074c.041.009-.57-.208-.426-.136s-.3-.267-.071-.057a1.815,1.815,0,0,1-.467-.708,2.882,2.882,0,0,1,1.02-3.381c4.216-3.722,9.156-6.772,13.765-9.982,1.488-1.036,3.023-2.028,4.475-3.116a2.062,2.062,0,0,0,.717-2.736,2.021,2.021,0,0,0-2.736-.718l-.032.022a2.051,2.051,0,0,0-.718,2.737,2.019,2.019,0,0,0,2.737.717Z"/><path class="b" d="M197.941,263.263c-.48.262.126,0-.215.109-.16.05-.319.1-.482.139s-.514.069-.161.04a4.606,4.606,0,0,1-.724.007c.356.027-.062-.015-.193-.049a3.653,3.653,0,0,1-.354-.115q.243.1.053,0a1,1,0,0,1-.5-.5,1.236,1.236,0,0,1-.242-.936c-.02.269.082-.335.087-.352a2.588,2.588,0,0,1,.222-.55,10.486,10.486,0,0,1,2.461-2.932c4.414-3.917,9.653-6.741,14.235-10.431a2.013,2.013,0,0,0,0-2.828,2.048,2.048,0,0,0-2.829,0c-2.064,1.662-4.358,3.056-6.523,4.584-2.317,1.635-4.635,3.276-6.819,5.088-1.954,1.621-4.06,3.662-4.664,6.23a5.593,5.593,0,0,0,2.473,6.034,6.372,6.372,0,0,0,6.2-.085c2.26-1.235.243-4.69-2.019-3.454Z"/><path class="b" d="M220.083,258.358c-3.549,2.5-7.12,4.97-10.611,7.547-2.8,2.063-6.556,4.406-6.126,8.394.492,4.565,5.583,5.517,9.259,4.341,3.619-1.158,6.686-3.857,9.87-5.843,2.932-1.83,5.966-3.526,8.8-5.516,2.089-1.47.093-4.94-2.019-3.454-2.21,1.555-4.558,2.923-6.863,4.331-2.542,1.553-4.974,3.272-7.506,4.839a13.9,13.9,0,0,1-4.056,1.981c-.985.232-2.692.454-3.34-.564-.688-1.081.414-2.176,1.178-2.811,1.027-.854,2.063-1.688,3.143-2.476,3.4-2.484,6.852-4.894,10.3-7.315,2.089-1.47.093-4.94-2.019-3.454Z"/><path class="b" d="M200.143,250.341a2.479,2.479,0,0,1-.514-3.033,11.361,11.361,0,0,1,2.838-3.164c2.7-2.347,5.665-4.653,9.174-5.567a40.568,40.568,0,0,1,9.873-1,43.152,43.152,0,0,1,9.023.755,22.83,22.83,0,0,1,8.065,2.984,14.186,14.186,0,0,1,4.822,7.008c1.929,6.249-.891,13.294-5.02,18.025-2.693,3.085-6.171,5.135-9.561,7.367-.8.524-2.686,1.934-2.942.1-.218-1.554,1.323-3.3,2.068-4.514,1.351-2.2-2.108-4.211-3.454-2.019a15.053,15.053,0,0,0-2.493,5.284,5.367,5.367,0,0,0,2.386,5.58c1.894,1.131,4.008.508,5.775-.547,1.887-1.127,3.723-2.423,5.547-3.651,6.958-4.684,12.236-12.708,12.308-21.3A18.361,18.361,0,0,0,243.9,241.1c-2.387-3.1-5.48-4.648-9.168-5.8a43.462,43.462,0,0,0-11.181-1.688,48.121,48.121,0,0,0-12.254.935c-4.842,1.074-9.157,4.285-12.666,7.688-1.514,1.468-2.969,3.251-3.244,5.406a6.47,6.47,0,0,0,2.733,6.155c2.138,1.445,4.142-2.019,2.019-3.454Z"/><path class="a" d="M249.77,89.565a3.327,3.327,0,0,0,.444,1.053,6.886,6.886,0,0,0,2.743,2.02,62.57,62.57,0,0,0,9.06,3.495,5.387,5.387,0,0,0,3.163-.983,6.093,6.093,0,0,0,1.123-1.525c1.668-3.195,4.911-11.026,4.507-12l-.078-1.233a87.021,87.021,0,0,1-16.116-6.684l-.6,1.024a72.422,72.422,0,0,0-4.227,13.318A3.859,3.859,0,0,0,249.77,89.565Z"/><path class="e" d="M285.2,44.943c.424.483.843,1.005,1.25,1.567a19.1,19.1,0,0,1,2.1,19.768,23.851,23.851,0,0,1-5.517,7.754,27.05,27.05,0,0,1-5.731,4.382,25.776,25.776,0,0,1-5.459,2.286,83.371,83.371,0,0,1-18.308-7.623c-3.02-2.853-4.44-9.6-4.217-13.252a26.889,26.889,0,0,1,1.446-7.84A22.81,22.81,0,0,1,255.4,44.5a19.587,19.587,0,0,1,9.937-6.1,22.535,22.535,0,0,1,12.611,1.21A20.565,20.565,0,0,1,285.2,44.943Z"/><path class="b" d="M283.787,46.357a18.94,18.94,0,0,1,4.235,8.264,18.212,18.212,0,0,1-1.118,10.47,24.806,24.806,0,0,1-15.589,13.68h1.063a76.044,76.044,0,0,1-14.915-5.8,9.274,9.274,0,0,1-3.093-1.925,11.132,11.132,0,0,1-1.638-3.022,21.477,21.477,0,0,1,4.085-22.107c3.507-3.77,7.965-6.121,13.224-5.961a18.837,18.837,0,0,1,13.746,6.405c1.723,1.919,4.545-.917,2.828-2.829-6.321-7.037-16.961-9.749-25.69-5.684a23.41,23.41,0,0,0-8.424,7.009,26.022,26.022,0,0,0-5.192,15.219,22.061,22.061,0,0,0,3.38,12.682c1.446,2.1,3.558,3.092,5.795,4.189,2.386,1.169,4.84,2.211,7.318,3.169,2.075.8,4.175,1.547,6.308,2.177a4.448,4.448,0,0,0,2.872.157,29.108,29.108,0,0,0,4.1-1.656,29.717,29.717,0,0,0,9.96-8.194,23.626,23.626,0,0,0,5.333-15.047,22.5,22.5,0,0,0-5.761-14.021C284.931,41.576,282.113,44.415,283.787,46.357Z"/><path class="b" d="M252.208,84.669a145.942,145.942,0,0,0,14.635,5.572,2,2,0,1,0,1.063-3.857,139.051,139.051,0,0,1-13.679-5.169,2.062,2.062,0,0,0-2.736.718,2.015,2.015,0,0,0,.717,2.736Z"/><path class="b" d="M252.285,73.722a23.562,23.562,0,0,0-1.544,3.769q-.924,2.6-1.7,5.255A38.124,38.124,0,0,0,247.8,87.88c-.408,2.791,1.095,4.854,3.477,6.15a53.483,53.483,0,0,0,5.423,2.381,22.494,22.494,0,0,0,5.048,1.686,6.252,6.252,0,0,0,5.568-2.384,22.328,22.328,0,0,0,2.336-4.528c.846-1.928,1.66-3.879,2.353-5.869.426-1.223,1.145-2.914.73-4.224-.773-2.446-4.636-1.4-3.857,1.063.072.227-.038-.369-.037-.335,0,.251-.084.116.016.029s.049-.2-.012.039c-.031.118-.051.241-.08.361-.136.568-.318,1.125-.5,1.678-.483,1.427-1.037,2.834-1.623,4.222-.536,1.271-1.1,2.532-1.711,3.769a7.538,7.538,0,0,1-.989,1.651c-.232.266.293-.184,0,0a4.59,4.59,0,0,1-1.405.579c-.145.028-.435-.013-.144.019a2.227,2.227,0,0,1-.36-.088c-.279-.087-.562-.161-.841-.251-.777-.25-1.542-.537-2.3-.833-1.521-.592-3.021-1.235-4.509-1.905-1.287-.579-2.88-1.155-2.606-2.8a37.291,37.291,0,0,1,1.058-4.213q.769-2.667,1.69-5.289a18.269,18.269,0,0,1,1.224-3.05c1.274-2.242-2.181-4.26-3.454-2.019Z"/><path class="b" d="M278.925,66.35a9.973,9.973,0,0,0-2.64-6.131c-1.444-1.7-3.414-3.619-5.683-4.007-4.669-.8-9.141,3.437-7.648,8.187a6.272,6.272,0,0,0,4.446,4.169,5.626,5.626,0,0,0,3.223.068,7.214,7.214,0,0,0,2.948-2.057c3.334-3.767,1.513-8.746-2.044-11.589a9.636,9.636,0,0,0-14.462,1.487,2.063,2.063,0,0,0,0,2.828,2.014,2.014,0,0,0,2.829,0c1.82-2.289,4.411-3.718,7.3-2.392,1.994.915,4.594,3.3,4.17,5.544a3.546,3.546,0,0,1-2.018,2.394c.284-.078-.318-.016-.361-.022a4.513,4.513,0,0,1-.888-.231,3.142,3.142,0,0,1-.987-.689,2.333,2.333,0,0,1-.081-2.671,3.045,3.045,0,0,1,2.524-1.139c1.41.058,2.72,1.633,3.615,2.619a6.028,6.028,0,0,1,1.759,3.632c.1,2.566,4.1,2.579,4,0Z"/><path class="b" d="M154.236,84.9a37.3,37.3,0,0,1,.881,4.03l-.071-.532a2.531,2.531,0,0,1,.015.557l.071-.532a1.342,1.342,0,0,1-.061.25l.2-.478a.97.97,0,0,1-.089.161l.313-.405a.812.812,0,0,1-.132.13l.405-.312a2.552,2.552,0,0,1-.319.168l.478-.2a2.354,2.354,0,0,1-.538.157l.531-.072a2.133,2.133,0,0,1-.5,0l.532.072c-.19-.027-.377-.073-.568-.1a2.211,2.211,0,0,0-1.541.2,2,2,0,0,0-.717,2.736,1.915,1.915,0,0,0,1.2.92c.427.057.842.166,1.277.185a4.061,4.061,0,0,0,1.875-.445,2.691,2.691,0,0,0,1.5-1.775,4.509,4.509,0,0,0-.019-1.921c-.22-1.3-.52-2.585-.854-3.858a2,2,0,0,0-3.857,1.063Z"/><path class="b" d="M167.051,76.259c-.02-1.97.785-4.229,2.6-5.174a4.464,4.464,0,0,1,6.215,3.176c.973,2.979-.557,6.953-3.958,7.3C169.131,81.717,167.007,78.87,167.051,76.259Z"/><path class="b" d="M132.706,76.272c-.021-1.97.785-4.228,2.6-5.174a4.464,4.464,0,0,1,6.215,3.176c.973,2.979-.557,6.954-3.959,7.3C134.786,81.73,132.662,78.884,132.706,76.272Z"/><path class="b" d="M155.166,97.5a5.774,5.774,0,0,0-5.5,3.245,6.708,6.708,0,0,0-.764,3.192,6.021,6.021,0,0,0,4.755,5.595,6.028,6.028,0,0,0,3.839-.6,5.368,5.368,0,0,0,2.424-2.46,7.384,7.384,0,0,0,.491-4.107,5.813,5.813,0,0,0-1.617-3.25,5.925,5.925,0,0,0-3.627-1.614,1.993,1.993,0,0,0-1.414.586,2,2,0,0,0,0,2.828,2.322,2.322,0,0,0,1.414.586c-.7-.084-.116-.009.06.037.157.041.3.1.458.152-.62-.188-.153-.058.028.051.078.048.153.111.233.154-.431-.229-.275-.222-.116-.08.116.105.219.22.325.333.25.268-.279-.419-.084-.107.034.054.071.106.1.16.084.136.141.291.226.426-.282-.448-.122-.3-.055-.11.033.1.062.194.088.292.045.169.062.344.105.513-.163-.644-.022-.08-.018.125a5.591,5.591,0,0,1-.019.579l-.011.119c-.025.217-.017.16.023-.169a1.392,1.392,0,0,0-.07.372c-.025.112-.06.222-.086.333-.038.161-.166.206.088-.179-.094.143-.169.312-.256.461-.2.335.328-.348.056-.071-.05.051-.095.1-.144.155-.075.076-.155.144-.233.216-.258.241.39-.251.067-.055-.153.093-.3.189-.458.27-.057.028-.386.183-.051.03s.009-.011-.057.011c-.167.055-.334.09-.5.131-.368.089.436-.018.178-.021-.116,0-.233.018-.35.017-.08,0-.165-.015-.245-.01-.244.014.549.122.157.019a2.7,2.7,0,0,0-.564-.165c.23-.028.372.172.095.03-.09-.045-.179-.094-.265-.146s-.168-.114-.254-.167c-.122-.088-.069-.045.161.128-.064-.052-.125-.105-.186-.16-.09-.083-.328-.427-.421-.442.14.022.232.341.093.114-.063-.1-.132-.2-.191-.306a1.231,1.231,0,0,0-.11-.212l.106.26c-.029-.073-.055-.147-.079-.222s-.045-.15-.063-.226c-.05-.21-.007-.559-.006.077,0-.318-.008-.623.01-.941-.038.686-.017.171.035-.035.047-.185.143-.369.177-.554,0,.012-.224.482-.087.208.051-.1.1-.2.153-.3.087-.158.187-.3.285-.455.206-.315-.329.374-.075.1.066-.072.128-.145.2-.215s.137-.136.21-.2c.139-.124.377-.192-.1.07.169-.091.319-.215.492-.3.063-.032.368-.175.026-.02s.05-.006.131-.028c.063-.018.128-.034.192-.049.515-.114-.382,0-.031,0a5.87,5.87,0,0,1,.636.012,2.007,2.007,0,0,0,2-2A2.054,2.054,0,0,0,155.166,97.5Z"/><path class="b" d="M276.421,20.29q.035,3.186.1,6.371a2,2,0,0,0,4,0q-.069-3.184-.1-6.371a2,2,0,0,0-4,0Z"/><path class="b" d="M290.84,30.168q1.631-2.218,3.067-4.571a2,2,0,1,0-3.454-2.019q-1.435,2.351-3.066,4.571a2.012,2.012,0,0,0-.2,1.542,2.043,2.043,0,0,0,.919,1.2,2.018,2.018,0,0,0,1.541.2l.478-.2a2.006,2.006,0,0,0,.717-.718Z"/><path class="b" d="M297.4,38.58c1.859-1.082,3.747-2.123,5.693-3.043a2.013,2.013,0,0,0,.919-1.2,2.043,2.043,0,0,0-.2-1.541,2.017,2.017,0,0,0-1.2-.919,2.25,2.25,0,0,0-1.541.2c-1.945.92-3.834,1.961-5.693,3.043A2,2,0,1,0,297.4,38.58Z"/></svg>
                    </div>
                    <span class="nav-text">Students</span>
                </a>
            </li>
            <li><a href="{{url('admin/Coupons')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                       
                        <svg width="22" height="22" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.707l6-6A1 1 0 0013.293.293l-6 6a1 1 0 001.414 1.414z" fill="#5C5F62"/><path fill-rule="evenodd" d="M2 0a1 1 0 000 2h1v12.17A3.001 3.001 0 106.83 16h5.34A3 3 0 1015 14H5v-2h11.566a1.5 1.5 0 001.485-1.288l.939-6.57a1 1 0 00-1.98-.283L16.133 10H5V1.5A1.5 1.5 0 003.5 0H2zm13 16a1 1 0 100 2 1 1 0 000-2zM4 16a1 1 0 100 2 1 1 0 000-2z" fill="#5C5F62"/><path d="M8.5 3a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM15 6.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" fill="#5C5F62"/></svg>
                    </div>
                    <span class="nav-text">Coupons</span>
                </a>
            </li>
            <li><a href="{{url('admin/videos')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                       
<svg width="22" height="22" viewBox="0 -43.78 441.212 441.212" xmlns="http://www.w3.org/2000/svg"><defs><style>.a{fill:#ffffff;}.b{fill:#211715;}.c{fill:#957f6e;}.d{fill:#79c6e0;}.e{fill:#cfcfcf;}.f{fill:#5394cf;}.g{fill:#a0a0a0;}</style></defs><path class="a" d="M372.582,10.392c0-2.13-2.118-3.852-4.731-3.85-28.446.022-260.031.181-295.114.2-2.563,0-4.637,1.69-4.64,3.778-.039,21.18-.3,172.137-.338,193.125,4.732,0,300.543.236,305.031.236C372.77,180.3,372.61,30.236,372.582,10.392Z"/><path class="b" d="M379.063,5.009A4.969,4.969,0,0,0,374.131,0c-29.657.029-271.1.235-307.672.255a4.879,4.879,0,0,0-4.838,4.916c-.04,27.559-.31,173.39-.353,200.7a4.971,4.971,0,0,0,4.926,5.022c29.741.034,278.622.269,308.148.3a4.972,4.972,0,0,0,4.938-5.018C379.26,175.493,379.093,30.83,379.063,5.009ZM67.759,203.641c.04-20.988.3-171.945.338-193.125,0-2.088,2.077-3.777,4.64-3.778,35.083-.015,266.668-.174,295.114-.2,2.613,0,4.727,1.72,4.731,3.85.028,19.844.188,169.9.208,193.485C368.3,203.877,72.491,203.641,67.759,203.641Z"/><path class="c" d="M185.422,92.136c-4.907-.63-10.152-3.324-12.023-6.73-2.461-4.477-2.571-10.124-1.464-15.1s2.983-9.792,3.559-14.851c.293-2.57.247-5.173.644-7.729.394-2.532,1.2-23.661,16.96-28.223,3.991-1.414,7.932-2.849,12.162-2.55a37.077,37.077,0,0,1,7.1.892c5.172,1.6,9.233,3.772,12.773,7.815a31.2,31.2,0,0,1,5.594,9.244,110.958,110.958,0,0,1,6.4,32.061,36.957,36.957,0,0,1-.561,10.721c-.821,3.5-2.575,7.265-5.418,9.51-4.242,3.348-6.188,4.119-11.619,4.307l-31.522,2.527Z"/><path class="a" d="M184.346,51.993c4.882-4.529,15.583-14.939,16.772-16.367,5.143-1.341,9.478,1.779,12.964,4.557a29.253,29.253,0,0,1,8,10.506,37.983,37.983,0,0,1,3.068,24.738c-2.074,3.192-5.469,7.289-9.39,9.067a28.5,28.5,0,0,0,.56,4.831c.31,1.81.21,3.43,2.73,4.34.335.138,6.3,3.306,4.2,1.618a20.418,20.418,0,0,1-34.194,4.146l-3.519-4.175,2.489-.767c.611-.189,1.72-.757,1.887-.817,2.52-.91,2.421-2.531,2.738-4.344a29.066,29.066,0,0,0,.547-5.561,21.974,21.974,0,0,1-5.664-4.936,24.294,24.294,0,0,1-4.631-9.038l-.912-.141a6,6,0,0,1-2.8-1.262,9.075,9.075,0,0,1-2.348-3.081c-.051-.1-.1-.206-.15-.31a14.278,14.278,0,0,1-1.307-7.264,4.763,4.763,0,0,1,.5-1.917,3.372,3.372,0,0,1,2.425-1.612,3.59,3.59,0,0,1,2.659.673l1.175-.918C182.5,53.681,183.286,52.976,184.346,51.993Z"/><path class="b" d="M214.269,87.112a16.7,16.7,0,0,0,7.406-4.332,34.242,34.242,0,0,0,5.21-6.35,2.014,2.014,0,0,0-.717-2.736,2.044,2.044,0,0,0-2.736.717q-.463.709-.957,1.4-.261.364-.533.723c-.106.14-.218.277-.044.059-.106.133-.211.267-.318.4a29.273,29.273,0,0,1-2.6,2.839c-.47.446-.96.867-1.464,1.275.22-.178.045-.033-.08.059s-.234.172-.352.255q-.422.3-.862.569a16.344,16.344,0,0,1-1.56.824c-.217.1.3-.105-.055.019-.155.054-.307.114-.462.165-.308.1-.619.186-.935.259a2.017,2.017,0,0,0-1.4,2.46,2.043,2.043,0,0,0,2.46,1.4Z"/><path class="b" d="M182.583,53.625a5.6,5.6,0,0,0-6.98-.394c-2.156,1.6-2.425,4.365-2.218,6.861.392,4.711,2.879,10.555,8.076,11.487a2.057,2.057,0,0,0,2.46-1.4,2.017,2.017,0,0,0-1.4-2.46c-3.128-.561-4.513-3.965-5.027-6.784a11.37,11.37,0,0,1-.158-2.234,4.4,4.4,0,0,1,.275-1.879,1.522,1.522,0,0,1,2.141-.371,2.055,2.055,0,0,0,2.828,0,2.016,2.016,0,0,0,0-2.829Z"/><path class="b" d="M180.208,66.9a28.151,28.151,0,0,0,6.022,13.476,20.222,20.222,0,0,0,13.221,7.472,2.013,2.013,0,0,0,2-2,2.047,2.047,0,0,0-2-2c-4.316-.466-7.949-3.294-10.611-6.562a24.614,24.614,0,0,1-4.775-11.45,2.017,2.017,0,0,0-2.46-1.4,2.045,2.045,0,0,0-1.4,2.461Z"/><path class="b" d="M196.789,30.033a14.77,14.77,0,0,1,1.238,2.594l-.2-.478a35.86,35.86,0,0,1,1.27,3.363,2,2,0,0,0,3.858-1.063,38.281,38.281,0,0,0-1.372-3.6c-.258-.612-.521-1.224-.805-1.825a7.361,7.361,0,0,0-.535-1.008,2.127,2.127,0,0,0-1.195-.919,2,2,0,0,0-2.258,2.938Z"/><path class="b" d="M199.7,34.212c-1.972,2.343-4.339,4.422-6.526,6.557-3.112,3.039-6.241,6.061-9.415,9.035-.989.927-1.964,1.9-3.03,2.741a2.011,2.011,0,0,0,0,2.828,2.049,2.049,0,0,0,2.828,0c2.455-1.938,4.661-4.267,6.916-6.427,3.128-3,6.241-6.011,9.308-9.071.927-.924,1.9-1.832,2.748-2.835a2.054,2.054,0,0,0,0-2.828,2.017,2.017,0,0,0-2.829,0Z"/><path class="b" d="M201.649,37.555c3.6-.86,6.834.923,9.661,3a27.544,27.544,0,0,1,7.6,8.386,37.189,37.189,0,0,1,4.946,22.282,31.983,31.983,0,0,1-4.21,12.685c-1.29,2.233,2.165,4.249,3.454,2.019,8.961-15.514,5.282-37.413-9.165-48.375-3.9-2.961-8.37-5.039-13.345-3.851-2.5.6-1.443,4.455,1.063,3.857Z"/><path class="b" d="M185.954,90.207a17.556,17.556,0,0,1-9.03-3.7c-2.468-2.137-3.4-5.511-3.61-8.675-.525-7.859,3.457-15.129,4.232-22.858.269-2.689.4-5.385.69-8.074.054-.513.107-1.026.167-1.539.035-.3.072-.6.11-.9.012-.094-.041.277.017-.122q.049-.348.1-.7a41.388,41.388,0,0,1,3.095-11.056,20.551,20.551,0,0,1,8.681-9.861,21.994,21.994,0,0,1,3.443-1.376c1.917-.644,3.8-1.353,5.77-1.838a26.493,26.493,0,0,1,10.385-.142,24.024,24.024,0,0,1,15.9,10.568,40.177,40.177,0,0,1,4.676,10.717,102.408,102.408,0,0,1,2.819,11.7c.713,3.925,1.211,7.883,1.534,11.859s.659,8.084-.1,12.019a16.483,16.483,0,0,1-4.251,8.8,15.374,15.374,0,0,1-6.815,4.017,22.067,22.067,0,0,1-4.237.448c-2.566.1-2.579,4.1,0,4a18.767,18.767,0,0,0,16.623-9.242c4.231-7.431,3.271-16.491,2.328-24.634A101.328,101.328,0,0,0,232.5,33.98c-2.852-7.192-8.113-13.359-15.28-16.459a29.66,29.66,0,0,0-5.11-1.805,35.387,35.387,0,0,0-5.343-.657,30.381,30.381,0,0,0-12.432,1.894c-2.924,1.013-5.79,1.956-8.3,3.821a23.864,23.864,0,0,0-5.473,5.74,36.376,36.376,0,0,0-5.239,13.046c-.386,1.823-.663,3.666-.886,5.516-.07.575-.13,1.152-.191,1.728-.021.2-.048.4-.065.6-.015.18-.089.53.036-.253-.082.511-.149,1.027-.209,1.542-.26,2.248-.245,4.52-.514,6.768a44.432,44.432,0,0,1-1.326,6.255c-1.116,4.14-2.489,8.227-2.825,12.529a22.243,22.243,0,0,0,2.042,11.622c1.626,3.269,4.847,5.373,8.13,6.731a21.884,21.884,0,0,0,5.376,1.469,2.068,2.068,0,0,0,2.46-1.4,2.014,2.014,0,0,0-1.4-2.461Z"/><path class="b" d="M213.764,84.5a34.2,34.2,0,0,0,.559,4.952,13.02,13.02,0,0,0,.81,3.395,4.431,4.431,0,0,0,1.06,1.43,6.194,6.194,0,0,0,1.024.746c.138.078.28.146.424.212q.275.123.553.235.384.159-.124-.061a7.7,7.7,0,0,0,1.093.549c.647.327,1.3.65,1.951.959a2.047,2.047,0,0,0,2.737-.717,2.026,2.026,0,0,0-.718-2.737c-1-.469-1.963-.993-2.956-1.466l-.114-.054-.478-.2c-.223-.087-.223-.085,0,.005-.117-.057-.234-.113-.347-.178-.076-.042-.488-.214-.211-.113.241.087-.015-.015-.1-.093-.066-.063-.161-.226-.245-.265.22.1.219.315.054.029-.113-.195-.087-.364.007.077-.086-.406-.24-.791-.309-1.207-.089-.536-.162-1.073-.255-1.608q-.092-.519-.175-1.04c-.023-.148-.045-.3-.067-.445-.075-.487.027.277-.022-.167-.081-.744-.134-1.488-.153-2.237a2,2,0,0,0-4,0Z"/><path class="b" d="M191.2,84.213c-.012.661-.042,1.322-.1,1.98-.031.336-.07.671-.111,1.006.036-.289.019-.139-.01.061-.021.144-.043.288-.066.433-.154.976-.26,2-.506,2.954-.023.087-.046.174-.073.259-.067.211-.2.31.052-.079a5.3,5.3,0,0,0-.289.515c-.1.191.313-.324.065-.1-.013.012-.259.243-.258.246-.018-.07.4-.269-.016-.008-.1.063-.207.121-.313.176-.185.095-.27.115-.028.025-.235.088-.432.168-.673.276-.138.062-.274.127-.411.191-.211.1-.423.2-.635.293-.426.2.413-.148-.007,0-.107.039-.213.079-.321.114a2,2,0,0,0,1.063,3.857,15.75,15.75,0,0,0,1.814-.764c.111-.052.223-.1.333-.157.194-.095.393-.061-.261.105a5.633,5.633,0,0,0,1.211-.523,5.253,5.253,0,0,0,2.514-3.056,20.237,20.237,0,0,0,.568-3.087,33.524,33.524,0,0,0,.459-4.72,2,2,0,0,0-4,0Z"/><path class="a" d="M268.139,121.211s2.269-1.5,2.508-1.662a7.3,7.3,0,0,0,2.726-3.947c.143-1.275-.056-2.578.168-3.842.368-2.086,1.823-3.789,3.222-5.38a30.275,30.275,0,0,1,4.645-4.571,5.118,5.118,0,0,1,3.056-1.208,2.262,2.262,0,0,1,2.276,2,3.442,3.442,0,0,1-1.173,2.178c-1.1,1.2-1.672,1.823-2.77,3.023q1.413.072,2.829.067c1.147-.005,5.705-1.668,7.063-2.182,1.6-.605,2.916-1.246,4.2-1.777a22.555,22.555,0,0,1,4.017-1.538,3.421,3.421,0,0,1,2.952.41,1.764,1.764,0,0,1,.893,1.364,2.329,2.329,0,0,1,1.941,1.67c.413,1.362.433,2.607-.4,3.081,1.936.971,1.087,4.043.884,4.542a5.013,5.013,0,0,1-1.422,1.752,41.4,41.4,0,0,1-19.268,9.611,9.421,9.421,0,0,0-3.8,1.284c-2.107,1.539-2.421,4.692-4.408,6.384"/><path class="a" d="M190.333,162.977c.583-17.909-.626-49.754-1.278-63.552a20.332,20.332,0,0,0,31.823-.431c-.646,13.556-1.886,45.885-1.3,63.983"/><path class="d" d="M219.581,162.977c-.682-20.941,1.086-60.934,1.545-68.856a86.831,86.831,0,0,1,16.655,8.92c3.069,2.01,4.813,3.8,5.75,7.411.891,2.483,1.273,5.165,2.274,7.585.215.52,1.52,3.416,2.379,5.608,1.467,3.791,3.456,8.538,5.066,10.938l.2.293c4.528-4.668,9.054-9.061,13.58-13.959a.589.589,0,0,1,.349-.228c.208-.019.364.177.48.35a42.455,42.455,0,0,0,11.115,11.3s.249.172.494.351a173.037,173.037,0,0,1-22.6,24.884c-1.78,1.613-3.783,3.27-6.181,3.419-3.048.189-5.648-2.1-7.654-4.4-3.706-4.253-5.688-6.782-7.888-11.974.05,4.969.52,10.388.52,17.994"/><path class="d" d="M190.333,162.977c.684-21-1.1-61.166-1.55-68.924a87,87,0,0,0-16.818,8.988c-3.069,2.01-6.11,4.272-8.008,7.411a28.047,28.047,0,0,0-2.123,4.757c-4.712,12.612-6.577,33.318-8.746,47.4"/><path class="b" d="M220.6,96.05a82.691,82.691,0,0,1,12.856,6.592,36.886,36.886,0,0,1,5.421,3.7,9.216,9.216,0,0,1,2.73,4.646c.672,2.482,4.532,1.428,3.857-1.064A13.207,13.207,0,0,0,242.215,104a32.634,32.634,0,0,0-6.1-4.41,89.659,89.659,0,0,0-14.46-7.4,2.013,2.013,0,0,0-2.46,1.4,2.048,2.048,0,0,0,1.4,2.46Z"/><path class="b" d="M234.969,127.749a62.235,62.235,0,0,1-1.1,9.724,44.546,44.546,0,0,0-.7,8.465c.126,5.56.49,11.107.5,16.671,0,2.574,4,2.578,4,0-.007-5.564-.37-11.111-.5-16.671-.026-1.113-.065-2.237-.017-3.35a39.865,39.865,0,0,1,.694-4.752,64.32,64.32,0,0,0,1.126-10.087c.02-2.575-3.98-2.577-4,0Z"/><path class="b" d="M170.521,127.749a63.016,63.016,0,0,0,1.087,9.854,40.724,40.724,0,0,1,.733,4.985c.045,1.114.009,2.237-.016,3.35-.127,5.56-.49,11.107-.5,16.671,0,2.574,4,2.578,4,0,.008-5.564.37-11.111.5-16.671a43.4,43.4,0,0,0-.665-8.231,64.019,64.019,0,0,1-1.139-9.958c-.02-2.573-4.02-2.579-4,0Z"/><path class="b" d="M219.126,94.121c-1.014,17.577-1.539,35.216-1.679,52.82-.043,5.345-.037,10.693.134,16.036.082,2.568,4.082,2.579,4,0-.633-19.815.229-39.723,1.092-59.52.136-3.112.274-6.225.453-9.336.149-2.571-3.852-2.563-4,0Z"/><path class="b" d="M186.787,94.121c1.014,17.577,1.54,35.216,1.68,52.82.043,5.345.036,10.693-.134,16.036-.083,2.575,3.917,2.572,4,0,.633-19.815-.229-39.723-1.093-59.52-.135-3.112-.273-6.225-.453-9.336-.147-2.559-4.148-2.576-4,0Z"/><path class="b" d="M187.644,100.843a22.3,22.3,0,0,0,34.646-.432c1.617-1.977-1.2-4.823-2.828-2.828a18.371,18.371,0,0,1-28.99.432c-1.681-1.955-4.5.885-2.828,2.828Z"/><path class="b" d="M188.089,92.193a92.791,92.791,0,0,0-15.631,8.146,45.95,45.95,0,0,0-7.1,5.257,20.5,20.5,0,0,0-4.83,7.455c-3.973,9.942-5.441,20.827-6.917,31.365-.825,5.886-1.55,11.786-2.45,17.661a2.064,2.064,0,0,0,1.4,2.461,2.016,2.016,0,0,0,2.461-1.4c1.58-10.312,2.663-20.7,4.551-30.962a107.075,107.075,0,0,1,3.551-14.612,25.063,25.063,0,0,1,3.238-7.12,23.459,23.459,0,0,1,5.937-5.228,91.5,91.5,0,0,1,16.858-9.169,2.063,2.063,0,0,0,1.4-2.46,2.013,2.013,0,0,0-2.46-1.4Z"/><path class="b" d="M170.778,127.749a62.777,62.777,0,0,0,1.087,9.854,41.115,41.115,0,0,1,.733,4.985c.045,1.114.009,2.237-.017,3.35-.126,5.56-.49,11.107-.5,16.671,0,2.574,4,2.578,4,0,.007-5.564.37-11.111.5-16.671a43.4,43.4,0,0,0-.664-8.231,63.9,63.9,0,0,1-1.139-9.958c-.02-2.573-4.02-2.579-4,0Z"/><path class="b" d="M241.6,110.984c.842,2.427,1.246,4.99,2.194,7.382.662,1.671,1.44,3.3,2.119,4.962,1.683,4.13,3.146,8.512,5.608,12.264,1.407,2.144,4.872.142,3.454-2.019-2.348-3.579-3.726-7.727-5.349-11.659q-.625-1.516-1.284-3.022-.234-.538-.471-1.077c-.058-.135-.118-.269-.176-.4-.241-.554.2.571-.044-.109-.866-2.423-1.351-4.952-2.194-7.382s-4.7-1.378-3.857,1.064Z"/><path class="b" d="M250.939,140.432c2.907-3.138,5.911-6.181,8.919-9.22,2.937-2.967,5.711-6.165,8.741-9.029l-.883.514.192-.08h-1.064l.275.1-.883-.515c1.775,2.137,3.267,4.423,5.231,6.42a46.265,46.265,0,0,0,6.5,5.439c2.114,1.479,4.115-1.988,2.019-3.454a41.185,41.185,0,0,1-7.671-6.976c-1.092-1.276-1.947-2.748-3.04-4.01a2.468,2.468,0,0,0-2.426-.865,4.671,4.671,0,0,0-2.073,1.648c-5.453,5.829-11.235,11.34-16.661,17.2-1.747,1.886,1.075,4.721,2.829,2.828Z"/><path class="b" d="M277.738,131.679a171.169,171.169,0,0,1-17,19.48q-2.268,2.235-4.618,4.387a13.762,13.762,0,0,1-4.429,3.212c-3.68,1.271-6.683-2.881-8.721-5.293a38.627,38.627,0,0,1-6.108-9.869,2.012,2.012,0,0,0-2.736-.718,2.054,2.054,0,0,0-.718,2.737,40.237,40.237,0,0,0,6.006,9.806c2.638,3.214,5.667,7.031,10.1,7.524,4.642.516,8.2-3.377,11.27-6.274Q266,151.756,270.8,146.42c3.663-4.076,7.119-8.331,10.4-12.722a2.013,2.013,0,0,0-.718-2.736,2.047,2.047,0,0,0-2.736.717Z"/><path class="b" d="M284.208,109.211c1.916-2.088,5.686-4.949,4.165-8.157a4.437,4.437,0,0,0-3.77-2.441,7,7,0,0,0-4.5,1.687,33.529,33.529,0,0,0-6.783,7.16,9.668,9.668,0,0,0-1.8,4.415c-.163,1.28.233,2.939-.363,4.07-.923,1.75-2.388,2.453-4.029,3.539-2.137,1.414-.136,4.879,2.019,3.453a17.9,17.9,0,0,0,4.364-3.393,7.6,7.6,0,0,0,1.895-4.325c.116-1.69-.144-3.22.736-4.757a22.73,22.73,0,0,1,3-3.755,20.125,20.125,0,0,1,3.691-3.459c.412-.272,1.117-.789,1.656-.638a1.3,1.3,0,0,1,.318.184c-.248-.155.107-.2-.163-.035a5.935,5.935,0,0,0-.755.889l-.7.762-1.809,1.972c-1.738,1.894,1.084,4.731,2.828,2.829Z"/><path class="b" d="M281.9,109.742a16.731,16.731,0,0,0,5.657-.22c1.634-.437,3.234-1.016,4.821-1.6,1.919-.7,3.776-1.549,5.655-2.348a22.518,22.518,0,0,1,3.02-1.185,2.685,2.685,0,0,1,1.276-.148c.419.1.5.5.427-.1a2.065,2.065,0,0,0,2,2,2.012,2.012,0,0,0,2-2c-.382-2.981-3.24-4.266-5.989-3.78-2.592.457-5.05,1.92-7.457,2.934-1.814.764-3.693,1.413-5.569,2-.414.129-.829.256-1.247.368-.211.056-.423.106-.635.157-.066.016-.57.088-.234.054s-.347-.011-.415-.011q-.553,0-1.105-.007c-.736-.015-1.47-.059-2.2-.116-2.567-.2-2.554,3.8,0,4Z"/><path class="b" d="M304.753,106.141c.068,0,.134.008.2.017l-.532-.071a1.955,1.955,0,0,1,.384.108l-.478-.2a2.311,2.311,0,0,1,.459.267l-.405-.312a2.851,2.851,0,0,1,.468.47l-.313-.405a2.911,2.911,0,0,1,.351.594l-.2-.478a5.392,5.392,0,0,1,.32,1.3l-.071-.532a3.806,3.806,0,0,1,.015.886l.072-.532a2.155,2.155,0,0,1-.132.512l.2-.478a1.605,1.605,0,0,1-.161.282l.313-.405a1.393,1.393,0,0,1-.226.228l.405-.312a1.565,1.565,0,0,1-.138.091,2.077,2.077,0,0,0-.919,1.2,2,2,0,0,0,2.938,2.258,3.311,3.311,0,0,0,1.567-2.247,6.547,6.547,0,0,0-.149-2.735,4.4,4.4,0,0,0-3.969-3.5,2.014,2.014,0,0,0-2,2,2.042,2.042,0,0,0,2,2Z"/><path class="b" d="M305.285,110.619c.5.292.243,1.406.1,1.866-.331,1.042-2,2.15-2.969,2.9a39.139,39.139,0,0,1-9.243,5.328A40.781,40.781,0,0,1,288,122.4a31.913,31.913,0,0,0-5.27,1.373,7.608,7.608,0,0,0-3.464,3.358c-.755,1.338-1.243,2.858-2.4,3.917-1.9,1.741.931,4.564,2.828,2.828a15.323,15.323,0,0,0,2.864-4.425,4.638,4.638,0,0,1,1.475-1.868,7.64,7.64,0,0,1,2.591-.781,44.858,44.858,0,0,0,11.891-4.194,41.477,41.477,0,0,0,5.324-3.326,19.589,19.589,0,0,0,4.7-4.187c1.64-2.386,1.4-6.391-1.231-7.933-2.225-1.305-4.241,2.151-2.019,3.454Z"/><path class="b" d="M291.731,116.485a89.975,89.975,0,0,0,9.81-4.6,2,2,0,0,0-2.019-3.454c-1.464.835-2.955,1.617-4.487,2.319-.706.323-1.418.631-2.132.935l-.267.113c-.259.11.332-.139.067-.028l-.641.27-1.394.585a2.2,2.2,0,0,0-1.195.919,2.04,2.04,0,0,0-.2,1.541,2.019,2.019,0,0,0,2.46,1.4Z"/><path class="b" d="M280.8,119.1a7.084,7.084,0,0,1,.932-.2l-.532.071a7.011,7.011,0,0,1,1.743,0l-.532-.071a6.853,6.853,0,0,1,1.683.45l-.477-.2c.073.031.145.063.218.1a2.167,2.167,0,0,0,1.541.2,2,2,0,0,0,1.4-2.461,1.952,1.952,0,0,0-.919-1.195,9.541,9.541,0,0,0-1.6-.6,9.835,9.835,0,0,0-1.627-.254,8.275,8.275,0,0,0-2.89.306,2.075,2.075,0,0,0-1.195.919A2,2,0,0,0,280.8,119.1Z"/><path class="b" d="M287.029,113l3.213,5.142a2.092,2.092,0,0,0,1.195.919,2,2,0,0,0,2.259-2.938l-3.213-5.141a2.092,2.092,0,0,0-1.195-.92A2,2,0,0,0,287.029,113Z"/><path class="b" d="M200.5,75.013a10.431,10.431,0,0,0,5.017,1.177,8.332,8.332,0,0,0,5.221-1.608,1.991,1.991,0,0,0,.586-1.414,2.036,2.036,0,0,0-.586-1.414,2.01,2.01,0,0,0-1.414-.586,2.343,2.343,0,0,0-1.414.586c.7-.546.081-.08-.135.033-.17.089-.578.219.087-.02-.132.047-.26.1-.394.143-.362.116-.732.163-1.1.251.165-.039.44-.052.109-.02-.108.011-.216.02-.325.027q-.39.025-.782.022-.351,0-.7-.025c-.107-.008-.214-.016-.321-.027-.2-.02-.444-.141.058.012-.332-.1-.692-.128-1.028-.228-.144-.043-.285-.095-.427-.144-.411-.141.466.218.091.042q-.264-.124-.522-.261a2,2,0,1,0-2.019,3.454Z"/><path class="b" d="M204.138,63.668a21.6,21.6,0,0,1,.509,2.33l-.071-.531a1.5,1.5,0,0,1,.009.321l.071-.531a.865.865,0,0,1-.035.144l.2-.477a.6.6,0,0,1-.051.093l.313-.405a.539.539,0,0,1-.076.075l.4-.313a1.409,1.409,0,0,1-.184.1l.478-.2a1.319,1.319,0,0,1-.311.091l.531-.071a1.3,1.3,0,0,1-.292,0l.532.071c-.11-.015-.218-.042-.328-.056a2.246,2.246,0,0,0-1.542.2,2,2,0,0,0-.717,2.737l.313.4a1.992,1.992,0,0,0,.882.515c.322.043.635.123.963.137a3.216,3.216,0,0,0,1.51-.372A2.357,2.357,0,0,0,208.5,66.4a3.492,3.492,0,0,0-.012-1.559c-.126-.751-.3-1.495-.493-2.232a2.064,2.064,0,0,0-.919-1.2,2,2,0,0,0-2.737.718,2.1,2.1,0,0,0-.2,1.541Z"/><path class="b" d="M192.591,56.854c-.389,1.265-.135,4.174,2.261,4.422,3.167-.019,3.335-3.537,2.269-5.191C196.248,54.731,193.682,54.168,192.591,56.854Z"/><path class="b" d="M217.951,56.854c.39,1.265.136,4.174-2.26,4.422-3.167-.019-3.335-3.537-2.269-5.191C214.294,54.731,216.861,54.168,217.951,56.854Z"/><path class="a" d="M140.581,156.638c13.354,0,201.51-.873,212.111-.873V194.6H140.581Z"/><path class="e" d="M107.293,44.462c0-4.939-3.141-9.572-8.467-9.727.864-.23,4.748-4.059,4.748-8.721a9.665,9.665,0,0,0-19.249,0c0,4.662,3.884,8.491,4.748,8.721-3.61-.08-8.008,4.788-8.008,9.727"/><path class="e" d="M107.293,95.129c0-4.939-3.141-9.572-8.467-9.727.864-.23,4.748-4.06,4.748-8.721a9.665,9.665,0,0,0-19.249,0c0,4.661,3.884,8.491,4.748,8.721-3.61-.081-8.008,4.788-8.008,9.727"/><path class="e" d="M81.065,144.314c0-4.939,4.4-9.808,8.008-9.727-.864-.23-4.748-4.059-4.748-8.721a9.665,9.665,0,0,1,19.249,0c0,4.662-3.884,8.491-4.748,8.721,5.326.155,8.467,4.788,8.467,9.727"/><path class="b" d="M66.179,157.289h54.667c2.574,0,2.578-4,0-4H66.179c-2.574,0-2.578,4,0,4Z"/><path class="b" d="M66.179,107.955h54.667c2.574,0,2.578-4,0-4H66.179c-2.574,0-2.578,4,0,4Z"/><path class="b" d="M66.179,58.622H120.4c2.573,0,2.578-4,0-4H66.179c-2.574,0-2.578,4,0,4Z"/><path class="b" d="M301.639,82.147c0-4.87-.15-9.74-.152-14.611l-2,2h10.576l-2-2c0,4.871.261,9.74.266,14.611,0,2.574,4,2.579,4,0,0-4.871-.261-9.74-.266-14.611a2.03,2.03,0,0,0-2-2H299.487a2.029,2.029,0,0,0-2,2c0,4.871.149,9.741.152,14.611,0,2.574,4,2.579,4,0Z"/><path class="b" d="M318.627,82.147c0-9.023-.15-18.046-.152-27.069l-2,2H327.05l-2-2c.007,7.089.26,14.176.266,21.266,0,2.573,4,2.578,4,0-.006-7.09-.259-14.177-.266-21.266a2.028,2.028,0,0,0-2-2H316.475a2.028,2.028,0,0,0-2,2c0,9.023.148,18.046.152,27.069,0,2.574,4,2.579,4,0Z"/><path class="f" d="M335.3,82.147c0-2.558-.152-37.507-.152-41.6h10.576c0,2.876.266,38.443.266,41.6"/><path class="f" d="M277.915,37.042c3.5,0,9.862-.116,13.255-.116.012-4.131.023-9.872.035-14,9.75,0,14.774,4.316,14.774,13.962,0,6.973-2.93,14.208-13.483,14.208C282.983,51.094,277.915,45.116,277.915,37.042Z"/><path class="b" d="M337.3,82.147c0-11.711-.092-23.424-.133-35.135-.008-2.157-.019-4.313-.019-6.469l-2,2h10.576l-2-2c0,11.84.157,23.682.233,35.522.013,2.027.032,4.055.033,6.082,0,2.574,4,2.578,4,0,0-11.889-.157-23.779-.234-35.668-.012-1.979-.032-3.958-.032-5.936a2.029,2.029,0,0,0-2-2H335.151a2.029,2.029,0,0,0-2,2c0,11.975.088,23.95.133,35.926.007,1.892.018,3.785.019,5.678,0,2.574,4,2.578,4,0Z"/><path class="b" d="M284.5,27.793c-2.831,0-5.663.059-8.5.091l2,2c0-.609.034-1.211.086-1.817.027-.222.019-.172-.022.15.012-.083.025-.165.039-.248.021-.121.045-.241.071-.362.051-.234.112-.466.185-.7a1.987,1.987,0,0,0,.159-.446l-.111.259q.048-.108.1-.216a7.167,7.167,0,0,1,.348-.638q.132-.213.277-.419l.075-.105q.191-.255-.072.092a8,8,0,0,0,.574-.653,8.059,8.059,0,0,1,.595-.559c.046-.04.093-.078.14-.116q.177-.143-.167.129a1.735,1.735,0,0,0,.338-.234,6.486,6.486,0,0,1,.652-.373c.1-.049.22-.088.313-.146-.468.292-.174.075,0,.013a8.949,8.949,0,0,1,1.506-.361q.234-.034-.221.03c.085-.01.17-.018.255-.026.13-.013.26-.022.39-.031.319-.019.638-.026.958-.028l-1.727-3.009a4.051,4.051,0,0,0-.283,1.814c0,.693,0,1.385,0,2.078,0,1.591,0,3.182.018,4.773a4.635,4.635,0,0,0,.289,2.039,2.009,2.009,0,0,0,2.737.717,2.056,2.056,0,0,0,.717-2.736,9.1,9.1,0,0,0,.27.975c0-.019,0-.038,0-.057,0-.062,0-.125,0-.187q0-.318-.007-.636-.009-1.024-.012-2.051-.009-2.284-.007-4.569c0-.261,0-.521,0-.782.006-.652.2-.382-.265.641a2.091,2.091,0,0,0,0-2.019,2.014,2.014,0,0,0-1.727-.991,12.125,12.125,0,0,0-4.006.578,9.289,9.289,0,0,0-3.587,2.3,10.124,10.124,0,0,0-2.321,3.722,13.012,13.012,0,0,0-.558,4.2,2.026,2.026,0,0,0,2,2c2.832-.032,5.664-.09,8.5-.091a2,2,0,0,0,0-4Z"/><path class="b" d="M277.915,39.042c4.419,0,8.837-.113,13.255-.116a2.03,2.03,0,0,0,2-2q.019-7,.035-14l-2,2c3.685.019,7.78.6,10.31,3.472,2.431,2.757,2.7,7.108,2.364,10.663-.325,3.412-1.77,6.816-4.851,8.571-3.692,2.1-9.225,2.017-13,.162-4.189-2.056-6.072-6.23-6.11-10.75-.022-2.572-4.022-2.579-4,0,.044,5.268,2.106,10.307,6.566,13.322,4.563,3.084,11.374,3.612,16.472,1.681a13.743,13.743,0,0,0,8.586-10.578c.9-4.617.682-10.154-1.92-14.221-3.135-4.9-8.928-6.293-14.414-6.322a2.028,2.028,0,0,0-2,2q-.019,7-.035,14l2-2c-4.418,0-8.836.113-13.255.116C275.341,35.044,275.337,39.044,277.915,39.042Z"/><path class="b" d="M119.82,4.714V206.047c0,2.574,4,2.578,4,0V4.714c0-2.574-4-2.578-4,0Z"/><path class="b" d="M273.407,311.317q-8.817,0-17.634.023-15.318.027-30.636.058l-36.4.069q-17.7.032-35.4.06-13.584.02-27.167.029h-2.454c-2.574,0-2.578,4,0,4q12.823,0,25.646-.024,17.379-.024,34.759-.057,18.318-.033,36.637-.069l31.758-.06q9.819-.017,19.639-.029h1.245c2.573,0,2.578-4,0-4Z"/><path class="b" d="M140.581,157.926c2.852,0,5.7-.014,8.556-.024q8.324-.028,16.647-.063l22.625-.094,26.833-.115,28.837-.125,29-.127,27.321-.118,23.435-.1q8.892-.037,17.785-.072,5.007-.02,10.013-.034h1.06c2.574,0,2.578-4,0-4-2.609,0-5.219.013-7.829.023q-8.038.03-16.075.064-11.108.045-22.213.093L280,153.348l-28.74.126L222.2,153.6l-27.539.119q-11.9.05-23.808.1-9.159.037-18.318.072-5.351.019-10.7.034l-1.253,0c-2.574,0-2.578,4,0,4Z"/><path class="a" d="M279.571,167.528c-7.208.782-20.318,2.552-27.044,3.633a.891.891,0,0,0-.4,1.591c4.973,3.768,16.786,12.224,21.864,15.571a4.825,4.825,0,0,0,3.423.736c11.8-1.873,39.189-6.063,48.545-7.562a3.106,3.106,0,0,0,2.549-2.409c2.69-12.344,6.463-32.475,7.716-41.345a.994.994,0,0,0-1.07-1.127c-9.437.747-37.761,3.746-47.912,4.669a3.045,3.045,0,0,0-2.72,2.458c-2.769,14.328-5.942,30.774-8.9,44.7"/><path class="b" d="M279.571,165.528q-13.562,1.479-27.06,3.622a2.932,2.932,0,0,0-1.3,5.394c1.387,1.057,2.8,2.086,4.205,3.115q5.385,3.936,10.844,7.768,2.475,1.74,4.974,3.446c1.917,1.3,3.748,2.461,6.187,2.186,3.548-.4,7.086-1.1,10.613-1.651q12.98-2.019,25.959-4.023,5.216-.81,10.431-1.63c1.727-.273,3.421-.445,4.722-1.772,1.594-1.626,1.738-4.388,2.183-6.516q2.964-14.189,5.432-28.482.5-2.9.963-5.811c.3-1.932,1.131-4.365-.568-5.844-1.276-1.11-3.24-.615-4.781-.478q-2.4.211-4.792.442c-8.343.793-16.68,1.648-25.019,2.488q-5.654.569-11.309,1.124c-1.423.138-2.854.236-4.272.415-2.9.364-4.123,2.548-4.63,5.173-2.278,11.782-4.553,23.566-6.962,35.322q-.831,4.052-1.687,8.1c-.532,2.511,3.323,3.584,3.857,1.063,1.694-7.992,3.3-16,4.876-24.017q1.219-6.2,2.419-12.4L286,146.634c.21-1.089.149-3.087,1.427-3.365a55.4,55.4,0,0,1,6.239-.6q4.05-.4,8.1-.808,8.964-.9,17.926-1.8,4.477-.444,8.957-.87,1.807-.169,3.616-.332c.785-.069,2.238-.464,2.944-.188l-.883-.514c-.38-.3.069-1.135-.1-.393-.044.188-.057.39-.086.581q-.083.556-.169,1.113-.2,1.3-.413,2.6-.495,3.023-1.029,6.038-1.248,7.088-2.619,14.152-1.319,6.832-2.748,13.645a12.536,12.536,0,0,1-.665,3c-.356.667-1.094.683-1.763.789q-2.049.327-4.1.648-11.918,1.868-23.841,3.7-6.113.946-12.225,1.9-2.575.4-5.149.806c-1.765.277-3.17.673-4.764-.372-3.7-2.425-7.3-5.024-10.9-7.6q-2.913-2.081-5.806-4.187-1.323-.964-2.641-1.938-.525-.39-1.05-.781l-.483-.361-.276-.208q-.667-.562.335.837l-.514.882c-.176.227-.267.067.134.02.224-.026.447-.071.67-.1q.718-.112,1.439-.222,1.607-.243,3.214-.476,3.626-.525,7.257-1.013c4.509-.609,9.023-1.191,13.547-1.684a2.06,2.06,0,0,0,2-2,2.013,2.013,0,0,0-2-2Z"/><path class="b" d="M232.028,165.541c1.782,9.79,4.067,19.481,6.135,29.213l1.928-2.532c-14.657,0-29.317-.248-43.974-.36-3.129-.024-6.259-.051-9.388-.051l1.928,2.531c2.829-9.595,5.056-19.359,7.156-29.136l-1.929,1.468c10.6.008,21.193.208,31.789.293,2.761.022,5.522.041,8.284.042,2.574,0,2.578-4,0-4-11.059,0-22.117-.191-33.175-.291-2.3-.021-4.6-.042-6.9-.044a2.028,2.028,0,0,0-1.929,1.469c-2.1,9.776-4.326,19.541-7.155,29.136a2.02,2.02,0,0,0,1.929,2.532c14.94,0,29.881.24,44.82.36,2.847.023,5.695.051,8.542.051a2.026,2.026,0,0,0,1.929-2.531c-2.068-9.733-4.352-19.423-6.135-29.214-.46-2.528-4.316-1.457-3.857,1.064Z"/><path class="b" d="M285.383,181.04c12.012-1.651,24-3.487,36.024-5.04a2.065,2.065,0,0,0,2-2,2.012,2.012,0,0,0-2-2c-12.381,1.6-24.721,3.483-37.088,5.183a2.011,2.011,0,0,0-1.4,2.46,2.054,2.054,0,0,0,2.46,1.4Z"/><path class="b" d="M289.66,84.522c8.206,0,16.412-.078,24.617-.127q16.877-.1,33.753-.2c3.236-.019,6.473-.046,9.71-.047,2.574,0,2.578-4,0-4-7.749,0-15.5.08-23.247.127q-17.067.1-34.133.2c-3.567.02-7.133.046-10.7.047-2.574,0-2.578,4,0,4Z"/><path class="a" d="M315.939,305.141c-2.561-3.831,1.788-13.112-5.695-11.518-2.136.456-1.921,2.878-4.156,2.244-1.109-.314-1.8-2.916-2.551-3.672-3.258-3.277-4-3.4-8.324-2.071-5.147,1.587-12.88,5.289-13.967,10.874-1.28,6.569,3.291,13.293,9.319,15.018l6.318,4.513,19.778-10.3Z"/><path class="a" d="M300.161,316.487q-.378.4-.757.841c-2.261,2.612-6.059,6.25-5.447,9.852.532,3.125,5.67,7.88,7.847,10.052,9.91,9.886,25.337,19.853,39.275,10.977,1.145-.73,3-2.975,5.037-5.77,6.181,0,14.26,0,14.26,0q.554-4.237,1.364-8.436c.517-2.679,1.235-5.551,3.365-7.281s5.089-1.875,7.839-1.936q27.289-.6,54.585.914c-.51-4.942-1.068-9.332-1.533-11.8-1.981-10.544-12.6-33.063-24.034-36.816-8.1-2.145-21.479-1.549-29.343-1.43-10.868,0-23.506,5.594-29.455,14.3-3.107,4.546-5.677,8.551-8.742,13.158-2.651,3.985-6.751,7.445-9.8,11.082L319.2,310.05C311.2,310.05,305.619,310.678,300.161,316.487Z"/><path class="a" d="M436.692,342.268l2.263-9.865a6.473,6.473,0,0,0,.18-2.952c-.568-1.886-2.675-3-4.368-3.283-.518-.061-1.041-.1-1.554-.131q-30.1-1.918-60.269-1.253c-2.75.061-5.722.216-7.839,1.936s-2.848,4.6-3.365,7.281q-.81,4.2-1.364,8.436Z"/><path class="a" d="M378.024,227.777a52.691,52.691,0,0,1-4.694-4.662,60.432,60.432,0,0,1-7.856-11.156l-3.786,1.967c-4.051-1.838-7.4-7.3-7.569-12.149a13.968,13.968,0,0,0-1.662,2.079,25.6,25.6,0,0,0-3.4,9.353c-.637,3.719-.64,6.3-3.068,9.4a34.077,34.077,0,0,1-5.055,5.509c-3.637,3.2-1.343,6.835,2.265,8.2-2.353,8.133-1.442,17.454.207,20.382a15.184,15.184,0,0,0,3.855,4.484c2.431,1.765,11.644,4.111,14.741,4.02l.4.455c1.346,1.532,1.413,6.554,1.531,8.612l.14,2.437a36.665,36.665,0,0,1,8.554-1.061c9.63-.146,27.529-1.007,33.881,3.327a37.009,37.009,0,0,1-2.669-3.924,30.821,30.821,0,0,1-3.571-12.4c.015-.569.064-1.242.136-1.967l-.221-.044c-3.574-.715-9.4-2.747-11.582-5.109-3.423-3.7-6.5-13.2-3.267-11.927a11.137,11.137,0,0,0,2.042-3.523c1.757-5.174-.872-8.592-4.81-8.833A43.156,43.156,0,0,1,378.024,227.777Z"/><path class="b" d="M372.619,273.649a41.292,41.292,0,0,0-24.092,8.054,38.233,38.233,0,0,0-8.82,9.79c-1.484,2.211-2.946,4.438-4.41,6.664a65.28,65.28,0,0,1-4.222,6.093c-3.36,4.026-7.525,7.386-10.34,11.858-1.375,2.185,2.085,4.194,3.454,2.019,2.329-3.7,5.742-6.579,8.64-9.812,3.257-3.632,5.742-7.883,8.425-11.939,2.41-3.645,4.664-7.3,8.006-10.174a34.816,34.816,0,0,1,10.259-5.992,37.388,37.388,0,0,1,13.1-2.561c2.573-.014,2.579-4.014,0-4Z"/><path class="b" d="M319.2,308.05c-4.327.006-8.835.127-12.9,1.769-4.249,1.715-7.252,4.832-10.2,8.229-3.019,3.48-5.618,7.657-3.071,12.153,1.954,3.449,5.1,6.235,7.9,8.979,7.059,6.9,15.906,13.212,25.973,14.325a23.506,23.506,0,0,0,14.429-3.108c2.459-1.441,4.154-3.785,5.833-6.032,2.35-3.143,4.517-6.425,6.62-9.736,1.466-2.309,2.992-4.628,4.243-7.063,1.175-2.286-2.275-4.312-3.454-2.019a123.034,123.034,0,0,1-8.449,13.428,54.88,54.88,0,0,1-4.946,6.459c-.313.334-.639.648-.979.954-.373.337.286-.165-.086.063-.514.316-1.026.632-1.558.918a19.187,19.187,0,0,1-6.538,2.131c-8.933,1.167-17.609-3.939-24.192-9.459a92.02,92.02,0,0,1-8.344-8,17.8,17.8,0,0,1-3.267-4.356c-.7-1.512-.037-2.99.8-4.315a37.948,37.948,0,0,1,4.6-5.517A18.071,18.071,0,0,1,306.692,314c3.833-1.913,8.323-1.939,12.508-1.945,2.574,0,2.579-4,0-4Z"/><path class="b" d="M401.43,279.007a18.944,18.944,0,0,1,7.107,5.011,49.8,49.8,0,0,1,6.568,8.768,72.691,72.691,0,0,1,8.462,19.413,91.824,91.824,0,0,1,1.942,13.314,2.058,2.058,0,0,0,2,2,2.014,2.014,0,0,0,2-2,112.66,112.66,0,0,0-1.833-13.34,60.041,60.041,0,0,0-3.207-9.645c-3.1-7.454-7.07-14.826-12.583-20.788a23.388,23.388,0,0,0-9.392-6.59c-2.444-.828-3.492,3.034-1.064,3.857Z"/><path class="b" d="M317.666,304.132a4.89,4.89,0,0,1-.6-1.947c-.1-1.044-.078-2.1-.085-3.142-.012-1.959-.034-4.163-1.27-5.792-1.5-1.978-4.378-2.2-6.576-1.366a4.935,4.935,0,0,0-1.808,1.22,11.051,11.051,0,0,0-.771.916c-.008-.027.316-.139.227,0,.993-1.515.126.233.147.075.009-.067-.2-.3-.232-.369-.291-.625-.63-1.271-.975-1.869-1.229-2.129-3.858-4.279-6.37-4.5-2.586-.225-5.469,1-7.818,1.968-5.136,2.106-11.376,5.641-12.31,11.679a15.6,15.6,0,0,0,10.806,16.94c2.469.747,3.525-3.112,1.063-3.857a11.59,11.59,0,0,1-8.008-12.013c.57-4.774,6.131-7.577,10.108-9.131,1.082-.422,2.183-.791,3.3-1.116a9.471,9.471,0,0,1,2.647-.491c1.827.237,3.1,2.608,3.957,4.143a4.307,4.307,0,0,0,2.777,2.39,3.77,3.77,0,0,0,3.595-1.131c.577-.6.78-1.132,1.65-1.258a4.715,4.715,0,0,1,.76-.038c.687.014-.286-.079.317.031a.455.455,0,0,1,.321.153c.35.378-.175-.333.08.126q.151.3.018-.008c.043.114.082.228.116.345.046.185.093.369.131.557.085.415-.008-.206.041.275.1.976.077,1.962.083,2.942.012,2.121.056,4.435,1.226,6.288,1.371,2.171,4.833.166,3.454-2.019Z"/><path class="b" d="M372.619,277.649c4.8-.075,9.59-.225,14.387-.138a62.264,62.264,0,0,1,14.424,1.5c2.494.645,3.558-3.212,1.064-3.857a65.962,65.962,0,0,0-15.1-1.631c-4.927-.1-9.852.053-14.778.13-2.571.041-2.579,4.041,0,4Z"/><path class="b" d="M350.587,221.583c-.928,1.322-1.729,4.8.956,5.983,3.679,1.167,5.2-2.855,4.585-5.176C355.626,220.49,352.862,218.872,350.587,221.583Z"/><path class="b" d="M343.748,234.4c-1.115-.447-2.655-1.465-2.656-2.825,0-1.606,2.214-2.865,3.22-3.9,2.664-2.741,5.146-5.868,5.964-9.674.871-4.057,1.147-8.076,3.141-11.818,1.91-3.582,5.538-5.677,7.687-9.09,1.375-2.185-2.084-4.194-3.454-2.019-1.827,2.9-4.906,4.749-6.815,7.613a26.845,26.845,0,0,0-3.811,10.6,40.73,40.73,0,0,1-.852,4.654,12.034,12.034,0,0,1-2.384,4.245,34.321,34.321,0,0,1-3.07,3.419c-1.327,1.267-2.709,2.394-3.328,4.189-1.362,3.945,1.955,7.123,5.294,8.463a2.014,2.014,0,0,0,2.461-1.4,2.049,2.049,0,0,0-1.4-2.46Z"/><path class="b" d="M341.149,236.194a41.706,41.706,0,0,0-1.364,11.864,24.416,24.416,0,0,0,1.535,8.9,13.658,13.658,0,0,0,6.046,6.6,38.089,38.089,0,0,0,7.612,2.554c2.562.627,5.383,1.355,8.031.984a2.012,2.012,0,0,0,1.4-2.46,2.052,2.052,0,0,0-2.46-1.4c.647-.091-.057-.021-.2-.028-.253-.012-.506-.017-.759-.037a15.46,15.46,0,0,1-1.631-.218c-1.575-.271-3.136-.634-4.679-1.05-2.5-.675-5.289-1.293-7.175-3.125-2.482-2.411-3.254-4.827-3.576-8.253a37.857,37.857,0,0,1,1.075-13.268c.665-2.489-3.192-3.552-3.857-1.063Z"/><path class="b" d="M342.064,246.538a8.285,8.285,0,0,0,2.862,1.214,11.491,11.491,0,0,0,3.175.286,2.114,2.114,0,0,0,1.414-.586,2,2,0,0,0,0-2.829,2,2,0,0,0-1.414-.585,10.024,10.024,0,0,1-1.841-.069l.532.071a8.413,8.413,0,0,1-2.1-.561l.478.2a6.25,6.25,0,0,1-1.084-.6,2,2,0,0,0-2.938,2.258,2.248,2.248,0,0,0,.919,1.2Z"/><path class="b" d="M353.056,199.1a6.821,6.821,0,0,0-1.269.935c-.391.333-.761.692-1.121,1.058a30.934,30.934,0,0,0-2.478,2.874,7.174,7.174,0,0,0-.734,1.093,2.12,2.12,0,0,0-.2,1.541,2,2,0,0,0,3.656.478,7.444,7.444,0,0,1,.768-1.138l-.313.405c.553-.712,1.148-1.392,1.768-2.047a16.414,16.414,0,0,1,1.808-1.7l-.405.313a3.594,3.594,0,0,1,.541-.358,2.016,2.016,0,0,0,.718-2.737,2.048,2.048,0,0,0-2.737-.717Z"/><path class="g" d="M373.33,223.115a60.432,60.432,0,0,1-7.856-11.156l-3.786,1.967c-4.5-2.043-8.134-8.564-7.518-13.737a69.839,69.839,0,0,1,4.035-5.87,27.746,27.746,0,0,1,15.8-9.182c17.173-2.85,42.454,7.53,39.387,24.059,7.072-1.094,10.484,17.464,2.153,32.38,4.55.6,8.566,2.186,11.23,5.469,3.333,4.106,3.483,9.782,1.546,14.425-2.948,7.07-8.168,17.068-3.455,22.959-3.606,3.156-11.31-.064-13.881-1.525-3.269-1.857-5.247-4.728-7.15-7.852a30.821,30.821,0,0,1-3.571-12.4c.015-.569.064-1.242.136-1.967l-.221-.044c-3.574-.715-9.4-2.747-11.582-5.109-3.423-3.7-6.5-13.2-3.267-11.927a11.137,11.137,0,0,0,2.042-3.523c1.757-5.174-.872-8.592-4.81-8.833A48.048,48.048,0,0,1,373.33,223.115Z"/><path class="b" d="M360.98,267.075c.192.226-.291-.454-.142-.183.029.054.067.105.1.158.074.127.126.266.2.394-.338-.59-.067-.151,0,.062.055.168.1.338.149.509.1.371.174.748.239,1.127.034.2.061.4.093.6.04.25-.061-.5-.02-.142.013.113.027.225.039.337.161,1.441.2,2.889.286,4.335a2,2,0,0,0,4,0c-.088-1.559-.133-3.12-.325-4.672-.233-1.883-.523-3.859-1.792-5.354a2.008,2.008,0,0,0-2.828,0,2.052,2.052,0,0,0,0,2.828Z"/><path class="b" d="M378.763,234.1a7.951,7.951,0,0,1,1.578-.619,8.935,8.935,0,0,1,.889-.2c.385-.064-.08-.012.333-.034.279-.015.556-.024.836-.013.135,0,.27.014.4.027q-.3-.048.057.012a6.376,6.376,0,0,1,.655.159c.081.025.666.262.311.1a5.632,5.632,0,0,1,.642.352c.1.066.2.134.3.206-.168-.126-.164-.116.012.032.131.127.257.252.378.388q.222.264.025.023c.07.1.137.2.2.308a3.952,3.952,0,0,1,.541,2.278c-.042,2.459-1.537,4.683-3.3,6.5a25.526,25.526,0,0,1-6.033,4.694c-2.242,1.264-.228,4.72,2.019,3.454a27.955,27.955,0,0,0,6.031-4.507,17.177,17.177,0,0,0,4.746-6.908,9.629,9.629,0,0,0-.285-7.033,7.3,7.3,0,0,0-4.61-3.766,10.769,10.769,0,0,0-7.744,1.1,2,2,0,1,0,2.019,3.454Z"/><path class="b" d="M382.162,246.692a23.356,23.356,0,0,0,2.261,6.175,14.592,14.592,0,0,0,3.678,4.9,22.206,22.206,0,0,0,5.787,3.083,35.3,35.3,0,0,0,5.755,1.714,2.049,2.049,0,0,0,2.46-1.4,2.019,2.019,0,0,0-1.4-2.46,25.219,25.219,0,0,1-10.03-3.967c.293.218-.159-.136-.177-.151-.13-.114-.257-.233-.378-.356-.135-.138-.263-.282-.388-.429.019.023-.388-.494-.227-.28a18.5,18.5,0,0,1-1.63-2.677,19.349,19.349,0,0,1-1.858-5.219,2.018,2.018,0,0,0-2.46-1.4,2.042,2.042,0,0,0-1.4,2.46Z"/><path class="b" d="M360.756,206.384A56.468,56.468,0,0,0,380.287,232.1a2.016,2.016,0,0,0,2.737-.717,2.046,2.046,0,0,0-.718-2.737,54.619,54.619,0,0,1-17.693-23.327c-.877-2.4-4.745-1.362-3.857,1.063Z"/><path class="b" d="M352.1,201.112a16.65,16.65,0,0,0,2.438,8.572,14.754,14.754,0,0,0,6.143,5.969,2.047,2.047,0,0,0,2.736-.718,2.024,2.024,0,0,0-.718-2.736,9.883,9.883,0,0,1-1.458-.835c-.034-.024-.487-.367-.155-.1-.092-.074-.183-.148-.273-.224-.229-.193-.451-.4-.665-.6a14.348,14.348,0,0,1-1.235-1.373c.235.3-.131-.183-.141-.2-.074-.1-.146-.207-.218-.311q-.3-.435-.563-.887a17.4,17.4,0,0,1-.88-1.706c-.144-.32.161.426-.06-.141-.057-.149-.115-.3-.169-.447-.108-.3-.208-.6-.3-.9a18.623,18.623,0,0,1-.412-1.82c-.046-.235.018.282-.012-.1-.012-.15-.029-.3-.039-.451-.021-.327-.027-.653-.022-.981a2,2,0,0,0-4,0Z"/><path class="b" d="M415.179,243.526c3.171.4,6.522,1.387,8.921,3.6a11.113,11.113,0,0,1,3.458,8.826c-.138,3.284-1.716,6.224-2.971,9.19a45.535,45.535,0,0,0-3.275,9.884c-.617,3.577-.472,7.427,1.823,10.416l.313-2.423c-2.192,1.8-6.29.351-8.57-.5a15.708,15.708,0,0,1-7.532-5.718,27.929,27.929,0,0,1-4.485-10.036,17.152,17.152,0,0,1-.6-4.112,41.7,41.7,0,0,1,.722-6.248,2.06,2.06,0,0,0-1.4-2.46,2.015,2.015,0,0,0-2.46,1.4c-.554,3.363-1.127,6.727-.593,10.12a32.976,32.976,0,0,0,2.976,9.518,24.609,24.609,0,0,0,6.829,8.569,22.685,22.685,0,0,0,7.72,3.55c3.463.931,7.305,1.147,10.219-1.251a2,2,0,0,0,.313-2.424c-1.937-2.522-1.846-5.613-1.166-8.59a58.5,58.5,0,0,1,3.652-10.081c1.491-3.448,2.773-6.856,2.445-10.692a14.821,14.821,0,0,0-4.727-9.884c-3.243-2.9-7.382-4.107-11.614-4.646a2.01,2.01,0,0,0-2,2,2.051,2.051,0,0,0,2,2Z"/><path class="b" d="M414.714,211.318a4.013,4.013,0,0,1,1.248,1.109,9.571,9.571,0,0,1,1.2,2.3,22.561,22.561,0,0,1,1.241,7.017A36.773,36.773,0,0,1,414.2,239.86c-1.191,2.279,2.26,4.3,3.454,2.019a40.741,40.741,0,0,0,4.724-20.825c-.243-4.5-1.273-10.764-5.643-13.19-2.253-1.25-4.273,2.2-2.019,3.454Z"/><path class="b" d="M354.385,203.1c1.933-2.157,3.134-4.812,4.954-7.043a26.414,26.414,0,0,1,6.31-5.522,25.909,25.909,0,0,1,13.954-3.87c8.689-.078,18.109,2.4,25.077,7.744,3.288,2.52,5.968,5.849,6.79,9.979.5,2.523,4.359,1.455,3.857-1.063-1.83-9.187-10.894-14.874-19.082-17.808-9.562-3.426-21.235-4.452-30.5.347a31.2,31.2,0,0,0-8,6.008c-2.455,2.539-3.851,5.8-6.185,8.4-1.713,1.912,1.107,4.75,2.829,2.828Z"/><path class="b" d="M438.621,342.8c.831-3.625,1.908-7.279,2.475-10.955a5.931,5.931,0,0,0-.865-4.606,7.709,7.709,0,0,0-3.694-2.664,17.115,17.115,0,0,0-4.817-.631q-2.985-.185-5.971-.343-5.973-.317-11.95-.532-11.7-.421-23.417-.454-5.979-.017-11.958.07c-3.519.05-7.295-.21-10.742.642-3.731.921-6.048,3.631-7.169,7.207a71.2,71.2,0,0,0-2.137,11.9,2.01,2.01,0,0,0,2,2,2.051,2.051,0,0,0,2-2,87.476,87.476,0,0,1,1.69-9.745c.621-2.482,1.68-4.658,4.3-5.409,2.864-.82,6.112-.537,9.058-.584q5.356-.084,10.712-.086,21.306-.011,42.586,1.27c1.966.118,6.871-.165,6.491,3.04a47.916,47.916,0,0,1-1.105,4.942l-1.347,5.872c-.575,2.5,3.28,3.575,3.857,1.063Z"/><path class="a" d="M2,332.7l.023-15.3a5.54,5.54,0,0,1,.407-2.46,4.5,4.5,0,0,1,4.151-1.868c.43.048.861.116,1.282.187q24.726,4.136,49.031,10.41c2.215.572,4.592,1.263,5.985,3.078s1.445,4.322,1.363,6.622q-.129,3.6-.474,7.19Z"/><path class="a" d="M114.661,318.637c-1.942-11.866-11.874-23.951-22.36-29.3-.261-4.218-1.039-9.472-1.3-13.689a2.413,2.413,0,0,0-2.167-2.7l-22.781-7.305L54.358,261.9a2.03,2.03,0,0,0-1.6-.056,1.975,1.975,0,0,0-.641.737,75.536,75.536,0,0,0-6.5,13.547c-12.472,8.568-23.123,23.75-27.3,39q19.429,3.608,38.578,8.555c2.215.572,4.592,1.263,5.985,3.078s1.445,4.322,1.363,6.622q-.045,1.238-.114,2.474h49.7c.565-4.612,1.311-9.23,1.164-13.874A25.662,25.662,0,0,0,114.661,318.637Z"/><path class="a" d="M77.518,213.558c1.846-1.094,1.874-2.664,2.312-3.892,2.2-6.172,2.4-14.124,7.382-17.857,1.964-1.473,10.155-3.4,13.909-4.243l1.422,2.228a60.511,60.511,0,0,1,5.03,11.7c2.141,7.862,5.69,15.795,12.277,20.593a4.42,4.42,0,0,1,1.875,2.02c.511,1.661-1.149,3.085-2.277,4.408-3.122,3.662-2.2,8.661-1.606,13.689.38,3.228.624,6.467-.426,9.373-3.4,9.411-15.855,13.115-26.368,15.234-.72,2.165-3.571,6.607-3.562,5.709q-10.716-3.441-21.433-6.876L54.358,261.9A2.484,2.484,0,0,0,53,261.739a22.514,22.514,0,0,0,.217-2.4,11.084,11.084,0,0,0-2.541-4.913c10.718-7.857,12.561-9.841,18.236-20.931a20.273,20.273,0,0,1-2.032-4.171,11.1,11.1,0,0,1-.369-7.312c.833-2.344,3.126-4.283,5.608-4.1,1.87.139,3.476,1.383,4.987,2.431a28.152,28.152,0,0,1-.325-6.387"/><path class="g" d="M56.708,249.841c5.71-4.629,7.807-7.754,12.2-16.346a20.441,20.441,0,0,1-2.03-4.174,11.1,11.1,0,0,1-.369-7.312c.833-2.344,3.126-4.283,5.608-4.1,1.871.139,3.478,1.384,4.99,2.433a28.258,28.258,0,0,1-.328-6.426c2.581-1.08,2.558-2.879,3.048-4.252,2.2-6.172,2.4-14.124,7.382-17.857,2.052-1.539,11.688-2.986,15.166-3.785h0c-2.45-11.819-24.86-18.362-32.927-14.435-5.389.654-9.569,1.271-14.489,3.567s-10.005,6.249-12.706,12.287c0,0-.905,2.022-1.832,4.057-8.985,4.948-12.149,25.209-7.625,36.376,3.611,8.914,9.186,18.193,17.131,23.592"/><path class="b" d="M89.119,266.283c-.071.211-.152.418-.238.624l.2-.478a22.388,22.388,0,0,1-1.3,2.536,19.772,19.772,0,0,1-1.394,2.125l.313-.4c-.08.1-.163.2-.25.3a2.107,2.107,0,0,0-.586,1.415,2,2,0,0,0,3.415,1.414,17.219,17.219,0,0,0,2-2.9,19.813,19.813,0,0,0,1.7-3.57,2.014,2.014,0,0,0-1.4-2.46,2.048,2.048,0,0,0-2.46,1.4Z"/><path class="b" d="M77.579,218.24c-2.749-1.92-5.806-3.159-9.016-1.51a8.968,8.968,0,0,0-4.514,7.819c-.212,6.39,4.1,12.531,9.021,16.188a2.014,2.014,0,0,0,2.736-.718,2.047,2.047,0,0,0-.717-2.736,17.58,17.58,0,0,1-6.98-11.247c-.254-1.987.134-4.216,1.84-5.471,1.966-1.446,3.913-.058,5.612,1.128a2.017,2.017,0,0,0,2.736-.717,2.04,2.04,0,0,0-.718-2.736Z"/><path class="b" d="M67.186,232.483c-1.677,2.938-3.478,5.811-5.435,8.572a37,37,0,0,1-6.457,7.372,2.014,2.014,0,0,0,0,2.829,2.046,2.046,0,0,0,2.828,0,40.562,40.562,0,0,0,6.934-7.972A102.879,102.879,0,0,0,70.64,234.5c1.278-2.239-2.177-4.256-3.454-2.018Z"/><path class="b" d="M115.827,335.849a97.365,97.365,0,0,0,1.179-13.154,31.068,31.068,0,0,0-1.956-10.339,46.892,46.892,0,0,0-12.073-17.825,43.6,43.6,0,0,0-9.666-6.917c-2.284-1.18-4.31,2.271-2.019,3.454a42.5,42.5,0,0,1,14.661,12.806c3.774,5.2,6.771,11.406,7.031,17.924.188,4.708-.581,9.394-1.157,14.051a2.01,2.01,0,0,0,2,2,2.049,2.049,0,0,0,2-2Z"/><path class="b" d="M94.3,289.341c-.3-4.632-.918-9.243-1.313-13.868a4.731,4.731,0,0,0-1.111-3.057,6.8,6.8,0,0,0-2.986-1.545q-3.8-1.222-7.593-2.434l-15.415-4.943-7.718-2.475c-2.1-.674-5.185-2.32-7.08-.391a15.393,15.393,0,0,0-2.079,3.3q-1,1.791-1.908,3.634a82.483,82.483,0,0,0-3.412,8.029c-.886,2.421,2.978,3.465,3.857,1.063a72.576,72.576,0,0,1,3.009-7.073q.8-1.638,1.686-3.236c.524-.948,1.069-2.412,1.931-3.092l-.883.514c.674-.233,2.175.58,2.88.806l3.274,1.05,6.556,2.1,13.526,4.337,6.645,2.131c.553.178,1.108.354,1.661.533a3.2,3.2,0,0,1,1.036.355c.327.345.2,1.49.24,1.986.334,4.1.93,8.168,1.2,12.271.167,2.555,4.168,2.574,4,0Z"/><path class="b" d="M44.605,274.4c-13.4,9.276-23.479,23.869-28.016,39.472-.72,2.477,3.139,3.535,3.857,1.064,4.234-14.56,13.654-28.413,26.178-37.082,2.1-1.455.1-4.924-2.019-3.454Z"/><path class="b" d="M81.788,285.052A194.785,194.785,0,0,0,46.146,274.2c-2.516-.478-3.594,3.376-1.064,3.857a194.8,194.8,0,0,1,35.643,10.855,2.013,2.013,0,0,0,2.46-1.4,2.048,2.048,0,0,0-1.4-2.46Z"/><path class="b" d="M101.409,306.945c-7.426-1.02-14.252,2.731-19.194,8.062a67.062,67.062,0,0,0-12.047,18.91,2.066,2.066,0,0,0,.717,2.736,2.013,2.013,0,0,0,2.736-.718,65.7,65.7,0,0,1,10.7-17.3c3.944-4.479,9.715-8.7,16.022-7.83a2.07,2.07,0,0,0,2.46-1.4,2.014,2.014,0,0,0-1.4-2.46Z"/><path class="b" d="M99.082,213.62c-.214,1.87.9,5.875,4.307,5.6,4.413-.85,3.731-5.816,1.812-7.852C103.63,209.7,99.9,209.578,99.082,213.62Z"/><path class="b" d="M81.588,194.693a14.712,14.712,0,0,0-2.817,5.089,19.7,19.7,0,0,0-.617,4.581,25.034,25.034,0,0,1-.454,4.4,11.253,11.253,0,0,1-.721,2.3,1.352,1.352,0,0,1-.361.533,3.054,3.054,0,0,1-.845.6c-2.242,1.266-.228,4.722,2.019,3.454,3.41-1.925,4.056-6.1,4.283-9.691.2-3.229.2-5.759,2.342-8.433a2.061,2.061,0,0,0,0-2.828,2.014,2.014,0,0,0-2.829,0Z"/><path class="b" d="M38.623,192.258c-6.875,4.765-9.166,14.347-9.747,22.2A39.769,39.769,0,0,0,29.967,227.7a53.315,53.315,0,0,0,6.441,13.738A46.549,46.549,0,0,0,48.921,255.2l-.718-.718a31.628,31.628,0,0,1,2.123,2.89,5.43,5.43,0,0,1,.749,3.821,2.014,2.014,0,0,0,2,2,2.045,2.045,0,0,0,2-2,8.374,8.374,0,0,0-.71-4.723,16.608,16.608,0,0,0-2.194-3.351,14.969,14.969,0,0,0-2.682-2.451,36.221,36.221,0,0,1-3.2-2.926,54.391,54.391,0,0,1-9.709-14.275,34.014,34.014,0,0,1-3.744-13.048,42,42,0,0,1,1.424-13.873c1.1-3.94,2.966-8.459,6.386-10.83,2.1-1.456.1-4.925-2.019-3.453Z"/><path class="b" d="M44.161,190.064a24.3,24.3,0,0,1,12.624-11.548,36.707,36.707,0,0,1,8.54-2.361,45.5,45.5,0,0,0,4.657-.638,5.623,5.623,0,0,0,.753-.338c.485-.21-.4.13.117-.043.33-.11.659-.213,1-.294a7.413,7.413,0,0,1,1.805-.259,22.446,22.446,0,0,1,2.708,0,31.061,31.061,0,0,1,5.345.8,38.8,38.8,0,0,1,11.827,4.755c3.387,2.108,6.568,5.013,7.409,8.85.551,2.514,4.408,1.45,3.857-1.063-1.246-5.685-6.3-9.75-11.19-12.36a41.884,41.884,0,0,0-17.485-4.99,15.246,15.246,0,0,0-7.685,1.293l1.01-.273c-5.956.727-11.724,1.753-17.07,4.629a27.074,27.074,0,0,0-11.674,11.827c-1.115,2.308,2.333,4.339,3.454,2.019Z"/><path class="b" d="M100.816,190.8c2.983,4.768,4.3,10.155,6.11,15.4,2.315,6.693,5.854,13.057,11.6,17.38.311.234,1.23.716,1.284,1.12.067.491-.643,1.13-.932,1.457a13.952,13.952,0,0,0-2.819,4.279c-1.28,3.339-.79,7.06-.367,10.514.44,3.593,1.063,7.532-.551,10.931a15.545,15.545,0,0,1-5.186,5.95c-5.678,4-12.733,5.693-19.437,7.053-2.521.511-1.454,4.368,1.063,3.857,12-2.435,28.952-7.5,28.58-22.634-.1-3.953-1.163-7.874-.874-11.838a7.75,7.75,0,0,1,1.694-4.472c1.138-1.363,2.508-2.608,2.778-4.454.287-1.963-.84-3.437-2.324-4.56a27.551,27.551,0,0,1-3.927-3.511,32.409,32.409,0,0,1-5.592-9.153c-1.321-3.129-2.077-6.429-3.233-9.612a51.206,51.206,0,0,0-4.411-9.725c-1.363-2.177-4.825-.171-3.454,2.019Z"/><path class="b" d="M115.76,236.536a6.969,6.969,0,0,0-6.87,4.81,6.571,6.571,0,0,0,3.067,7.55,6.734,6.734,0,0,0,4.857.817,2.013,2.013,0,0,0,1.4-2.461,2.048,2.048,0,0,0-2.46-1.4c-.081.017-.162.033-.244.045.327-.041.382-.051.163-.031-.144,0-.286.009-.43,0-.061,0-.123-.006-.184-.011-.218-.023-.163-.014.167.025a1.739,1.739,0,0,0-.42-.091c-.14-.037-.274-.086-.412-.129q-.3-.115.135.062c-.076-.034-.15-.069-.224-.107-.11-.056-.219-.117-.325-.181-.061-.036-.357-.288-.413-.276.106-.023.352.3.02,0-.123-.11-.241-.227-.353-.349-.083-.09-.157-.192-.241-.282.392.416.042.034-.04-.1-.063-.1-.116-.217-.178-.323-.091-.193-.074-.146.05.143-.031-.076-.059-.153-.085-.23-.04-.117-.074-.235-.1-.354-.02-.08-.037-.16-.052-.241q-.052-.325.022.164c.041-.053-.015-.37-.013-.45,0-.065,0-.13.009-.194.021-.221.013-.172-.026.147.022-.014.2-.89.24-.866q-.182.417-.047.123c.038-.077.078-.154.12-.229.062-.114.13-.225.2-.333.048-.072.1-.143.149-.213q-.275.348-.07.1c.088-.1.173-.194.266-.287.036-.036.348-.368.385-.35q-.327.246-.147.114c.053-.038.106-.075.16-.111a5.142,5.142,0,0,1,.446-.266c.443-.234.009.015-.009-.015-.007-.013.782-.231.865-.25.218-.035.169-.029-.149.02.085-.008.171-.013.257-.015a4.52,4.52,0,0,1,.52.02,2.009,2.009,0,0,0,2-2,2.052,2.052,0,0,0-2-2Z"/><path class="b" d="M95.4,185.949c-1.544-.881-3.1-1.782-4.725-2.51a10.99,10.99,0,0,0-5.542-1.2,2.045,2.045,0,0,0-2,2,2.022,2.022,0,0,0,2,2,6.8,6.8,0,0,1,1.142-.023c.108.008.215.018.323.031-.263-.037-.28-.036-.049,0,.159.037.32.064.479.1a10.631,10.631,0,0,1,1.1.338c.08.029.741.3.3.107.179.077.357.158.534.241,1.512.708,2.971,1.543,4.42,2.37a2,2,0,1,0,2.019-3.454Z"/><path class="b" d="M88.291,188.036c-3.884-.231-8.028-.648-11.545,1.386a2,2,0,1,0,2.019,3.453c.2-.117.411-.219.616-.329.211-.095.21-.1,0-.008.08-.033.161-.064.242-.094a9.758,9.758,0,0,1,1.245-.365c.17-.038.34-.071.512-.1.114-.02.229-.039.345-.056-.243.032-.246.033-.01,0,.412-.036.822-.072,1.235-.087,1.781-.063,3.566.091,5.342.2a2.012,2.012,0,0,0,2-2,2.045,2.045,0,0,0-2-2Z"/><path class="b" d="M100.625,241.423a8.254,8.254,0,0,0,1.1,6.977,2.158,2.158,0,0,0,1.195.919,2.045,2.045,0,0,0,1.542-.2,2.017,2.017,0,0,0,.919-1.195,1.97,1.97,0,0,0-.2-1.541,6.426,6.426,0,0,1-.681-1.224l.2.478a6.68,6.68,0,0,1-.429-1.608l.071.532a6.658,6.658,0,0,1,0-1.663l-.071.532a6.563,6.563,0,0,1,.206-.942,2.02,2.02,0,0,0-1.4-2.46,2.041,2.041,0,0,0-2.461,1.4Z"/><path class="b" d="M4,332.7l.015-9.622.007-4.687c0-.888-.285-2.26.538-2.866a3.265,3.265,0,0,1,2.347-.4c1.587.2,3.168.533,4.743.809q4.556.8,9.1,1.668c12.18,2.335,24.4,4.905,36.358,8.2,2.69.741,4.8,1.824,5.1,4.854a52.2,52.2,0,0,1-.44,9.911,2.014,2.014,0,0,0,2,2,2.043,2.043,0,0,0,2-2,55.521,55.521,0,0,0,.44-9.911,8.719,8.719,0,0,0-4.161-7.2c-2.648-1.543-5.931-2.052-8.867-2.787q-5.2-1.3-10.413-2.5-10.2-2.349-20.479-4.329-5.137-.99-10.294-1.886c-2.916-.507-6.047-1.5-8.878-.178C-.37,313.4.024,317.116.019,320.367L0,332.7c0,2.574,4,2.578,4,0Z"/></svg>
                    </div>
                    <span class="nav-text">Videos</span>
                </a>
            </li>
            <li><a href="{{url('admin/sale_reports')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                      
                        <svg fill="#000000" width="22" height="22" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><title/><path d="M24,5H22V4a1,1,0,0,0-1-1H11a1,1,0,0,0-1,1V5H8A1,1,0,0,0,7,6V28a1,1,0,0,0,1,1H24a1,1,0,0,0,1-1V6A1,1,0,0,0,24,5ZM12,5h8V7H12V5ZM23,27H9V7h1V8a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V7h1ZM21,12a1,1,0,0,1-1,1H12a1,1,0,0,1,0-2h8A1,1,0,0,1,21,12Zm0,4a1,1,0,0,1-1,1H12a1,1,0,0,1,0-2h8A1,1,0,0,1,21,16Zm0,4a1,1,0,0,1-1,1H12a1,1,0,0,1,0-2h8A1,1,0,0,1,21,20Zm0,4a1,1,0,0,1-1,1H12a1,1,0,0,1,0-2h8A1,1,0,0,1,21,24Z"/></svg>
                    </div>
                    <span class="nav-text">Sales Report</span>
                </a>
            </li>
            <li><a href="{{url('admin/mails')}}" class="" aria-expanded="false">
                    <div class="menu-icon">
                       
                        <svg fill="#000000" width="22" height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="M11,13h2a1,1,0,0,0,0-2H11a1,1,0,0,0,0,2Zm8,7H18V9h1a1,1,0,0,0,0-2H17.91A6,6,0,0,0,6.09,7H5A1,1,0,0,0,5,9H6V20H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2ZM12,4a4,4,0,0,1,3.86,3H8.14A4,4,0,0,1,12,4Zm4,16H8V18h8Zm0-4H8V9h8Z"/></svg>
                    </div>
                    <span class="nav-text">Mailbox</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="has-arrow" aria-expanded="false">
                    <div class="menu-icon">
                       
<svg width="22" height="22" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg">

<g id="layer1">

<path d="M 4 1 L 4 6 L 7 6 L 7 1 L 4 1 z M 5 2 L 6 2 L 6 5 L 5 5 L 5 2 z M 0 3 L 0 4 L 3 4 L 3 3 L 0 3 z M 8 3 L 8 4 L 20 4 L 20 3 L 8 3 z M 13 8 L 13 13 L 16 13 L 16 8 L 13 8 z M 14 9 L 15 9 L 15 12 L 14 12 L 14 9 z M 0 10 L 0 11 L 12 11 L 12 10 L 0 10 z M 17 10 L 17 11 L 20 11 L 20 10 L 17 10 z M 4 15 L 4 20 L 7 20 L 7 15 L 4 15 z M 5 16 L 6 16 L 6 19 L 5 19 L 5 16 z M 0 17 L 0 18 L 3 18 L 3 17 L 0 17 z M 8 17 L 8 18 L 20 18 L 20 17 L 8 17 z " style="fill:#222222; fill-opacity:1; stroke:none; stroke-width:0px;"/>

</g>

</svg>
                    </div>
                    <span class="nav-text">Configurations</span>
                </a>

                <!-- Submenu -->
                <ul aria-expanded="false">
                    <li><a href="{{url('admin/general')}}">General</a></li>
                    <li><a href="{{url('admin/paymentsettings')}}">Payment Settings</a></li>
                    <li><a href="{{url('admin/Languages')}}">Question Language</a></li>
                    <li><a href="{{url('admin/currency')}}">Currency</a></li>
                    <li><a href="{{url('admin/Weblogos')}}">Organisation Logo</a></li>
                    <li><a href="{{url('admin/Signatures')}}">Certificate Signature</a></li>
                    <li><a href="{{url('admin/diffcultys')}}">Diffculty Level</a></li>
                    <li><a href="{{url('admin/qtypes')}}">Question Type</a></li>
                    <li><a href="{{url('admin/Menunames')}}">Menu Names</a></li>

                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" class="has-arrow" aria-expanded="false">
                    <div class="menu-icon">
                       
                        <svg fill="#000000" height="22" width="22" version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              viewBox="-871 873 256 256" xml:space="preserve">
                        <g>
                            <circle cx="-677.7" cy="1016.6" r="16.8"/>
                            <circle cx="-698.4" cy="1058.4" r="16.8"/>
                            <path d="M-725.2,1078.3h-18.9H-763c-11.5,0-18.7,9.5-18.7,21.4v29.3h12.9v-25.9c0-1.2,1-2,2-2c1.2,0,2,0.8,2,2v25.8h41.5v-25.8
                                c0-1.2,1-2,2-2c1.2,0,2,1,2,2v25.8h12.9v-29.1C-706.2,1087.8-713.5,1078.3-725.2,1078.3z"/>
                            <circle cx="-720.5" cy="1016.6" r="16.8"/>
                            <path d="M-671.1,1058.4c0,9.3,7.5,16.8,16.8,16.8s16.8-7.5,16.8-16.8c0-9.3-7.5-16.8-16.8-16.8S-671.1,1049.1-671.1,1058.4z"/>
                            <path d="M-672.8,1078.3c-11.5,0-18.7,9.5-18.7,21.4v29.3h12.9v-25.9c0-1.2,1-2,2-2c1.2,0,2,0.8,2,2v25.8h41.5v-25.8c0-1.2,1-2,2-2
                                c1.2,0,2,1,2,2v25.8h12.9v-29.1c0.2-12.1-7.1-21.6-18.7-21.6h-18.9h-19V1078.3z"/>
                            <circle cx="-830.4" cy="1058.4" r="16.8"/>
                            <path d="M-855.4,1128.9v-25.8c0-1.2,1-2,2-2c1.2,0,2,0.8,2,2v25.8h41.5v-25.8c0-1.2,1-2,2-2c1.2,0,2,1,2,2v25.8h12.9v-29.1
                                c0.2-12.1-7.1-21.6-18.7-21.6h-18.9h-18.9c-11.5,0-18.7,9.5-18.7,21.4v29.3H-855.4L-855.4,1128.9z"/>
                            <path d="M-760.9,1058.4c0,9.3,7.5,16.8,16.8,16.8c9.3,0,16.8-7.5,16.8-16.8c0-9.3-7.5-16.8-16.8-16.8
                                C-753.4,1041.6-760.9,1049.1-760.9,1058.4z"/>
                            <circle cx="-808.9" cy="1016.6" r="16.8"/>
                            <circle cx="-763.5" cy="1016.6" r="16.8"/>
                            <circle cx="-786.1" cy="1058.4" r="16.8"/>
                        </g>
                        <path d="M-743.1,979.8c28.6,0.3,51.5-23.4,51.6-51.4c0.3-28.6-22.7-51.4-51.4-51.6c-28.7-0.2-51.5,23.4-51.6,51.4
                            C-794.8,956.8-771.1,979.6-743.1,979.8z M-722.6,907.8c5.1,0.3,8.8,3.9,8.6,9c-0.3,5.1-3.9,8.8-9,8.6c-5.1-0.3-8.8-3.9-8.6-9
                            C-731.4,911.3-727.7,907.6-722.6,907.8z M-742.9,965.8c-12.5-0.1-23.7-7.4-29.4-19.5c-1-2.4,0.3-5.1,2.6-6.1c2.4-1,5.1,0.3,6.8,2.8
                            c3.7,8,11.5,13.2,20.3,13.4c8.8,0.2,16.4-5,20.1-13.1c1.3-2.7,4.3-3.6,6.4-2.5c2.7,1.3,3.8,3.7,2.5,6.4
                            C-718.7,958.5-730.4,966-742.9,965.8z M-761.7,907.8c5.1,0.3,8.8,3.9,8.6,9c-0.3,5.1-3.9,8.8-9,8.6c-4.4-0.1-8.8-3.9-8.6-9
                            C-770.6,912-766.8,907.6-761.7,907.8z"/>
                        </svg>
                    </div>
                    <span class="nav-text">Contents</span>
                </a>

                <!-- Submenu -->
                <ul aria-expanded="false">
                    <li><a href="{{url('admin/news')}}">News</a></li>
                    <li><a href="{{url('admin/pages')}}">Pages</a></li>
                    <li><a href="{{url('admin/Slides')}}">Home Slides</a></li>
                    <li><a href="{{url('admin/Homesections')}}">Home Content</a></li>
                    <li><a href="{{url('admin/Helpcontents')}}">Help Content</a></li>
                    <li><a href="{{url('admin/Testimonials')}}">Testimonial</a></li>
                    <li><a href="{{url('admin/Advertisements')}}">Advertisement</a></li>
                    <li><a href="{{url('admin/seos')}}">Seo</a></li>


                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="has-arrow" aria-expanded="false">
                    <div class="menu-icon">
                        
                        <svg width="22" height="" viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="_x3C_Layer_x3E_" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        
                        <g id="message_x2C__letter_x2C__mail_x2C__tick_x2C__e-mail_x2C__check">
                        
                        <g id="XMLID_2986_">
                        
                        <g id="XMLID_3882_">
                        
                        <line fill="none" id="XMLID_4293_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="26.5" x2="26.5" y1="15.8" y2="1.5"/>
                        
                        <polyline fill="none" id="XMLID_4292_" points="     26.5,1.5 5.5,1.5 5.5,15.8    " stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                        
                        <polyline fill="none" id="XMLID_4234_" points="     21,20.111 29.5,13.5 29.5,30.5 2.5,30.5 2.5,13.5 11.054,20.153    " stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                        
                        <polyline fill="none" id="XMLID_4233_" points="     2.5,29 16,19.5 29.5,29    " stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                        
                        <line fill="none" id="XMLID_4232_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="26.495" x2="29.5" y1="11.052" y2="13.5"/>
                        
                        <line fill="none" id="XMLID_3935_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="2.5" x2="5.5" y1="13.5" y2="11.056"/>
                        
                        <path d="     M20.972,9.48c0.018,0.171,0.027,0.344,0.027,0.52c0,2.762-2.239,5-5,5s-5-2.238-5-5c0-2.761,2.239-5,5-5     c0.92,0,1.781,0.249,2.522,0.682" fill="none" id="XMLID_3934_" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                        
                        <polyline fill="none" id="XMLID_3883_" points="     20.79,6.481 15.999,11.272 13.69,8.965    " stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                        
                        </g>
                        
                        </g>
                        
                        <g id="XMLID_2976_">
                        
                        <g id="XMLID_2977_">
                        
                        <line fill="none" id="XMLID_2985_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="26.5" x2="26.5" y1="15.8" y2="1.5"/>
                        
                        <polyline fill="none" id="XMLID_2984_" points="     26.5,1.5 5.5,1.5 5.5,15.8    " stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                        
                        <polyline fill="none" id="XMLID_2983_" points="     21,20.111 29.5,13.5 29.5,30.5 2.5,30.5 2.5,13.5 11.054,20.153    " stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                        
                        <polyline fill="none" id="XMLID_2982_" points="     2.5,29 16,19.5 29.5,29    " stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                        
                        <line fill="none" id="XMLID_2981_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="26.495" x2="29.5" y1="11.052" y2="13.5"/>
                        
                        <line fill="none" id="XMLID_2980_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="2.5" x2="5.5" y1="13.5" y2="11.056"/>
                        
                        <path d="     M20.972,9.48c0.018,0.171,0.027,0.344,0.027,0.52c0,2.762-2.239,5-5,5s-5-2.238-5-5c0-2.761,2.239-5,5-5     c0.92,0,1.781,0.249,2.522,0.682" fill="none" id="XMLID_2979_" stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                        
                        <polyline fill="none" id="XMLID_2978_" points="     20.79,6.481 15.999,11.272 13.69,8.965    " stroke="#263238" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"/>
                        
                        </g>
                        
                        </g>
                        
                        </g>
                        
                        </svg>
                    </div>
                    <span class="nav-text">Email & SMS</span>
                </a>

                <!-- Submenu -->
                <ul aria-expanded="false">
                    <li><a href="{{url('admin/Emailsettings')}}">E-Mail Settings</a></li>
                    <li><a href="{{url('admin/Emailtemplates')}}">Email Templates</a></li>
                    <li><a href="{{url('admin/Sendemails')}}">Send Emails</a></li>
                    <li><a href="{{url('admin/Smssettings')}}">SMS Settings</a></li>
                    <li><a href="{{url('admin/Smstemplates')}}">SMS Templates</a></li>
                    <li><a href="{{url('admin/Sendsms')}}">Send Sms</a></li>


                </ul>
            </li>



        </ul>
    </div>
</div>
