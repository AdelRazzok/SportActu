<?php
if (isset($_POST) && count($_POST) != 0) {
    if (count($_POST) == 4) {
        $preferences = json_encode($_POST);
        setcookie('preferences', $preferences, time() + 86400);
        $success_msg = 'Vos choix ont bien été pris en compte';
    } else $err_msg = 'Veuillez sélectionner 3 catégories';
}

if (isset($_COOKIE)) {
    $preferences = json_decode($_COOKIE['preferences'], true);
    $preferences = array_values($preferences);
}

$svgArray = [
    'Basket-ball'=>'<svg
    data-svg="sport"
    xmlns:svg="http://www.w3.org/2000/svg"
    xmlns="http://www.w3.org/2000/svg"
    version="1.0"
    width="40px"
    height="40px"
    viewBox="0 0 300 300"
    id="svg2243">
   <defs
      id="defs2245">
     <clipPath
        id="clip0">
       <rect
          width="30"
          height="30"
          x="0"
          y="0"
          id="rect2248" />
     </clipPath>
   </defs>
   <path
      d="M 246.53125,8.46875 C 234.68956,8.46875 225.0625,18.064556 225.0625,29.90625 C 225.0625,41.747944 234.68955,51.375 246.53125,51.375 C 258.37294,51.375 267.96876,41.747945 267.96875,29.90625 C 267.96875,18.064556 258.37294,8.46875 246.53125,8.46875 z M 246.6875,14.09375 C 255.32611,14.09375 262.34375,21.111387 262.34375,29.75 C 262.34374,38.388613 255.32611,45.375 246.6875,45.375 C 238.04889,45.375001 231.0625,38.388613 231.0625,29.75 C 231.0625,21.111387 238.04889,14.09375 246.6875,14.09375 z "
      style="fill-opacity:1;stroke:none;stroke-width:1.20000005;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
      id="path2226" />
   <path
      d="M 83.554379 60.079575 A 17.108753 17.108753 0 1 1  49.336872,60.079575 A 17.108753 17.108753 0 1 1  83.554379 60.079575 z"
      transform="matrix(1.2926928,0,0,1.2926928,34.197113,-27.463538)"
      style="fill-opacity:1;stroke:none;stroke-width:1.20000005;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
      id="path2224" />
   <path
      d="M 165.26756,54.30809 C 189.62415,40.848068 209.85075,21.530441 230.19347,2.851776 C 224.76625,14.922882 218.6165,26.839874 210.01576,36.996185 C 196.7057,53.170258 182.75302,69.941605 163.94026,79.874985 C 157.92078,83.648254 148.31886,78.503738 149.93716,70.946533 C 150.55814,62.581146 159.09747,58.369919 165.26756,54.30809 z "
      style="fill-rule:nonzero;stroke:none"
      id="path2257" />
   <path
      d="M 116.40909,162.49899 C 123.44685,160.41692 129.16621,168.59872 127.91214,175.02338 C 127.63443,194.39491 117.00241,211.60431 108.16597,228.19663 C 94.661697,249.51035 82.947876,272.03134 67.761795,292.23225 C 72.242874,274.88841 78.185547,257.95291 82.488937,240.55928 C 88.326202,218.00739 93.406891,194.90089 103.97215,173.96518 C 106.54245,168.95946 110.21826,163.05377 116.40909,162.49899 z "
      style="fill-rule:nonzero;stroke:none"
      id="path2285" />
   <path
      d="M 163.66777,124.62373 C 168.08896,122.8549 173.62883,123.30412 176.6324,127.3331 C 181.08211,133.29919 181.69095,141.26585 181.53966,148.44861 C 177.5537,180.31715 157.21561,206.67677 136.93068,230.27333 C 142.06792,214.98157 150.63887,200.91615 153.96352,185.00688 C 155.46668,178.74298 156.15897,172.3335 157.09909,165.97288 C 154.34215,168.61662 151.9475,171.78857 148.59352,173.70149 C 143.80312,175.56262 138.67844,172.54327 137.0984,167.98341 C 133.95029,161.6826 135.54387,154.31117 138.15483,148.11917 C 143.38853,137.61162 152.1657,128.08156 163.66777,124.62373 z "
      style="fill-rule:nonzero;stroke:none"
      id="path2281" />
   <path
      d="M 68.354935,100.37206 C 76.009567,93.849396 84.254822,85.809601 95.057983,86.02803 C 100.61311,85.634354 105.2758,91.956604 103.30287,97.158798 C 102.09891,101.84953 97.305771,104.0401 93.857925,106.87906 C 77.635956,117.75069 60.786667,128.01556 46.763412,141.7623 C 37.46553,150.70389 30.111984,161.65335 19.494888,169.19572 C 29.727158,142.69484 47.589218,119.54225 68.354935,100.37206 z "
      style="fill-rule:nonzero;stroke:none"
      id="path2277" />
   <path
      d="M 221.28677,54.863342 C 241.61266,53.476227 262.03925,53.553741 282.37651,54.726944 C 280.93036,61.864868 278.56723,68.771103 276.99875,75.877777 C 275.5544,83.576462 275.00357,91.414215 273.51836,99.105698 C 271.83635,99.061981 270.15778,99.017456 268.48264,98.972107 C 267.87398,85.735275 270.62187,72.704254 274.3443,60.083939 C 259.29893,59.957031 244.25615,59.986404 229.21419,59.967468 C 232.58049,71.684128 235.23033,83.732071 234.96773,95.996078 C 235.19035,98.590271 231.79719,98.739868 230.17856,99.916412 C 228.82251,90.640228 228.3719,81.185913 225.84854,72.116653 C 224.33148,66.369827 222.03848,60.793671 221.28677,54.863342 z "
      style="fill-rule:nonzero;stroke:none"
      id="path2273" />
 </svg>',
    'Football'=>'<svg version="1.1" data-svg="sport" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    width="40px" height="40px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
<path d="M120.163,79.848c13.524,1.706,27.135,3.15,40.786,2.92c6.136,0.008,12.645,0.205,18.295-2.561
   c3.264-2.302,6.336-6.75,4.238-10.794c-2.514-4.375-7.617-6.611-12.402-7.435c-10.658-0.759-21.28,0.821-31.893,1.574
   c-17.685,1.791-35.369,3.786-53.137,4.463c-10.848,1.287-21.983,1.338-32.54,4.277c1.434,0.517,2.92,0.902,4.445,1.015
   C78.669,75.657,99.371,78.226,120.163,79.848z"/>
<path d="M260.076,102.089c-2.561-8.924-8.135-17.373-16.873-21.197c-4.596-0.393-10.525,1.21-11.93,6.181
   c-1.16,8.042,3.834,15.196,8.121,21.52c3.7,5.441,8.387,10.613,9.594,17.304c-6.599,4.915-13.533,9.385-20.786,13.265
   c-4.949,2.22-10.175,3.736-15.184,5.809c-3.356,1.432-7.125,2.438-9.666,5.218c2.133,0.869,4.462,0.535,6.695,0.437
   c11.242-0.83,22.604-1.738,33.441-5.044c7.444-2.449,15.104-5.919,19.707-12.57c1.763-3.357,2.134-7.266,2.271-11.001
   C265.609,114.938,261.767,108.768,260.076,102.089z"/>
<path d="M157.645,125.861c-8.942,1.175-15.687,7.964-21.519,14.284c-6.569,6.822-11.853,14.711-17.584,22.217
   c-3.4,5.105-6.497,10.625-7.638,16.72c-0.617,3.571,1.544,7.505,5.177,8.353c4.871,1.979,10.235-0.073,14.003-3.334
   c11.879-10.753,23.484-22.082,32.369-35.512c2.999-4.355,5.368-9.311,5.926-14.62c0.085-2.156-0.413-4.946-2.795-5.651
   C163.034,127.285,160.53,125.435,157.645,125.861z"/>
<path d="M175.107,147.4c-10.387,5.202-16.377,15.62-23.266,24.471c-20.378,28.703-38.357,58.995-57.394,88.583
   c-2.573,4.779-5.659,9.358-7.552,14.462c1.414-0.42,2.876-0.931,3.811-2.147c5.827-6.854,12.319-13.102,19.184-18.907
   c13.409-11.194,25.265-24.072,37.965-36.037c10.576-10.434,21.542-20.546,30.744-32.264c6.287-8.013,12.593-16.424,15.554-26.307
   c1.354-4.176,0.764-9.204-2.48-12.361C186.611,143.643,180.15,144.657,175.107,147.4z"/>
<path d="M54.287,206.147c-12.682,0-22.963,10.28-22.963,22.963c0,12.682,10.281,22.963,22.963,22.963
   c12.682,0,22.963-10.281,22.963-22.963C77.25,216.428,66.969,206.147,54.287,206.147z M54.287,246.073
   c-9.354,0-16.963-7.609-16.963-16.963c0-9.354,7.609-16.963,16.963-16.963s16.963,7.608,16.963,16.963
   C71.25,238.464,63.641,246.073,54.287,246.073z"/>
<circle cx="220.968" cy="50.342" r="22"/>
</svg>',
    'Tennis'=>'<svg version="1.0" data-svg="sport" xmlns="http://www.w3.org/2000/svg"
    width="40px" height="40px" viewBox="0 0 240.000000 240.000000"
    preserveAspectRatio="xMidYMid meet">
   <metadata>
   Created by potrace 1.15, written by Peter Selinger 2001-2017
   </metadata>
   <g transform="translate(0.000000,240.000000) scale(0.100000,-0.100000)"
   stroke="none">
   <path d="M1285 1964 c-37 -19 -64 -43 -77 -69 -35 -64 -26 -160 20 -209 85
   -91 220 -80 289 23 52 77 16 208 -67 251 -47 24 -123 26 -165 4z"/>
   <path d="M155 1811 c-55 -24 -78 -62 -78 -126 0 -58 18 -97 65 -141 72 -68
   172 -91 241 -56 l37 20 140 -84 c136 -82 190 -101 190 -68 0 10 6 14 14 11 8
   -3 60 -8 117 -12 125 -8 304 20 372 57 52 29 71 80 43 122 -24 37 -76 34 -174
   -9 -150 -66 -281 -86 -425 -65 -69 9 -100 20 -159 53 l-73 42 -6 67 c-5 67
   -10 77 -58 132 -35 38 -117 76 -166 76 -22 0 -58 -9 -80 -19z m117 -51 c100
   -28 163 -145 106 -197 -49 -44 -123 -35 -188 24 -64 57 -67 137 -8 166 39 20
   42 20 90 7z"/>
   <path d="M1712 1595 c-40 -17 -48 -36 -32 -76 17 -39 42 -51 182 -83 129 -30
   173 -53 203 -108 18 -33 18 -42 7 -108 -7 -39 -26 -97 -42 -130 -34 -68 -35
   -70 -17 -70 22 0 123 106 146 153 43 88 46 213 6 273 -78 119 -331 202 -453
   149z"/>
   <path d="M230 1390 c-26 -26 -27 -90 -2 -113 26 -24 87 -22 112 3 28 28 26 81
   -3 108 -30 28 -80 29 -107 2z"/>
   <path d="M1665 1135 c-14 -13 -25 -31 -25 -40 0 -22 -18 -18 -25 6 -4 11 -22
   28 -41 37 -30 14 -41 14 -82 4 -72 -19 -134 -61 -380 -257 -443 -351 -620
   -490 -638 -502 -18 -10 -18 -11 -1 -18 23 -10 101 28 477 235 475 260 627 348
   653 380 l24 28 13 -71 c29 -169 104 -352 165 -405 51 -46 103 -66 253 -101
   193 -45 247 -55 265 -48 34 13 14 26 -95 62 -214 70 -320 147 -352 255 -9 29
   -20 123 -26 207 -8 117 -15 164 -29 192 -33 63 -111 82 -156 36z"/>
   </g>
   </svg>',
    'Handball'=>'<svg version="1.1" data-svg="sport" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    width="40px" height="40px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
<path d="M169.021,7.917c8.479,0,15.354,6.874,15.354,15.354s-6.874,15.354-15.354,15.354c-8.48,0-15.354-6.874-15.354-15.354
   S160.541,7.917,169.021,7.917 M169.021,13.917c-5.158,0-9.354,4.196-9.354,9.354s4.196,9.354,9.354,9.354
   c5.156,0,9.354-4.196,9.354-9.354S174.179,13.917,169.021,13.917L169.021,13.917z"/>
<path d="M133.485,94.242c4.615,0.826,10.36,1.609,14.113-1.87c3.044-3.435,1.003-8.465-1.221-11.776
   c-6.35-8.573-18.399-9.78-25.084-17.943c-4.873-6.12-3.712-15.031,0.457-21.194c5.893-8.673,15.064-14.145,23.443-20.097
   c2.827-2.168,6.524-3.427,8.431-6.604c-8.859,1.034-17.919,2.598-25.839,6.947c-9.658,5.174-18.848,12.644-23.039,23.057
   c-3.77,10.188-0.343,21.433,4.885,30.448C115.168,83.873,123.373,91.515,133.485,94.242z"/>
<path d="M240.561,136.557c-6.002-8.333-14.004-15.001-22.389-20.824c-4.278-2.802-8.909-5.642-14.166-5.83
   c-2.855-0.443-5.549,1.546-7.246,3.65c-1.816,4.291,1.584,8.395,4.203,11.49c7.102,8.505,17.994,12.524,25.127,20.984
   c-3.769,4.002-8.445,6.999-13.117,9.827c-6.9,4.285-14.063,8.141-21.254,11.91c-2.959,1.62-6.592,1.686-9.301,3.785
   c8.99,1.113,17.998-0.74,26.799-2.426c8.293-1.473,16.539-3.758,23.964-7.822c5.058-2.753,9.54-7.347,10.729-13.137
   C245.02,144.003,242.723,139.953,240.561,136.557z"/>
<path d="M89.011,207.21c5.134-0.414,9.211-3.954,12.69-7.438c10.829-9.915,21.167-20.566,29.227-32.9
   c2.765-4.139,4.893-8.836,5.447-13.821c0.096-2.162-0.365-4.95-2.73-5.705c-2.55-1.08-5.097-2.869-7.99-2.488
   c-4.539,0.534-8.728,2.679-12.254,5.517c-7.627,6.03-13.851,13.627-19.682,21.351c-4.683,6.4-9.923,12.539-12.904,19.99
   c-1.284,3.411-2.885,7.288-1.307,10.891C81.09,206.21,85.451,207.2,89.011,207.21z"/>
<path d="M146.13,165.085c-9.447,3.413-15.901,11.616-21.58,19.488c-5.497,7.225-10.626,14.719-15.753,22.209
   c-16.11,24.424-31.478,49.324-47.161,74.021c-2.143,4.451-5.322,8.471-6.646,13.271c1.574-0.653,3.14-1.46,4.192-2.849
   c6.114-7.205,13.081-13.603,20.256-19.729c10.22-8.394,19.161-18.18,28.787-27.221c13.305-13.378,27.633-25.852,39.243-40.813
   c5.964-7.68,11.872-15.772,14.688-25.203c1.337-4.165,0.784-9.207-2.477-12.341C155.66,163.365,150.462,163.244,146.13,165.085z"/>
<circle cx="188.967" cy="69.349" r="21.875"/>
</svg>',
    'Rugby'=>'<svg version="1.1" data-svg="sport"
    xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;" i:viewOrigin="156.5 545.5" i:rulerOrigin="0 0" i:pageBounds="0 792 612 0"
    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
    x="0px" y="0px" width="40px" height="40px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
<metadata><?xpacket begin="﻿" id="W5M0MpCehiHzreSzNTczkc9d"?>
<x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="Adobe XMP Core 4.1-c036 46.277092, Fri Feb 23 2007 14:17:08        ">
    <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
        <rdf:Description rdf:about="" xmlns:xap="http://ns.adobe.com/xap/1.0/"
            xmlns:xapGImg="http://ns.adobe.com/xap/1.0/g/img/">
            <xap:Thumbnails>
                <rdf:Alt>
                    <rdf:li rdf:parseType="Resource">
                        <xapGImg:width>256</xapGImg:width>
                        <xapGImg:height>252</xapGImg:height>
                        <xapGImg:format>JPEG</xapGImg:format>
                        <xapGImg:image>
                            /9j/4AAQSkZJRgABAgEASABIAAD/7QAsUGhvdG9zaG9wIDMuMAA4QklNA+0AAAAAABAASAAAAAEA&#xA;AQBIAAAAAQAB/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJCwgGBggLDAoKCwoK&#xA;DBAMDAwMDAwQDA4PEA8ODBMTFBQTExwbGxscHx8fHx8fHx8fHwEHBwcNDA0YEBAYGhURFRofHx8f&#xA;Hx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8f/8AAEQgA/AEAAwER&#xA;AAIRAQMRAf/EAaIAAAAHAQEBAQEAAAAAAAAAAAQFAwIGAQAHCAkKCwEAAgIDAQEBAQEAAAAAAAAA&#xA;AQACAwQFBgcICQoLEAACAQMDAgQCBgcDBAIGAnMBAgMRBAAFIRIxQVEGE2EicYEUMpGhBxWxQiPB&#xA;UtHhMxZi8CRygvElQzRTkqKyY3PCNUQnk6OzNhdUZHTD0uIIJoMJChgZhJRFRqS0VtNVKBry4/PE&#xA;1OT0ZXWFlaW1xdXl9WZ2hpamtsbW5vY3R1dnd4eXp7fH1+f3OEhYaHiImKi4yNjo+Ck5SVlpeYmZ&#xA;qbnJ2en5KjpKWmp6ipqqusra6voRAAICAQIDBQUEBQYECAMDbQEAAhEDBCESMUEFURNhIgZxgZEy&#xA;obHwFMHR4SNCFVJicvEzJDRDghaSUyWiY7LCB3PSNeJEgxdUkwgJChgZJjZFGidkdFU38qOzwygp&#xA;0+PzhJSktMTU5PRldYWVpbXF1eX1RlZmdoaWprbG1ub2R1dnd4eXp7fH1+f3OEhYaHiImKi4yNjo&#xA;+DlJWWl5iZmpucnZ6fkqOkpaanqKmqq6ytrq+v/aAAwDAQACEQMRAD8A9U4q7FXYq7FXYq7FXYq7&#xA;FXYq7FXYq7FUFrWtaVomlXWratdR2enWcZlubmU0VFH4kk7ADcnYb4q+OfzW/wCctvNeu3M2n+S3&#xA;fQtFUlReAD69OAftc/iEI8AnxeLdsVeE6jq2qancNcaleT3twxJaa4keVyT1JZyxxVFaF5q8zaBc&#xA;rc6Jqt3ps6bh7WZ4voIUgEHwOKvo/wDJ/wD5y8vfrdvov5h8JIJSI4vMEShGQnYG6jWilfF0Ap3B&#xA;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
                        </xapGImg:image>
                    </rdf:li>
                </rdf:Alt>
            </xap:Thumbnails>
            <xap:CreatorTool>Adobe Illustrator CS3</xap:CreatorTool>
            <xap:ModifyDate>2008-01-04T01:11:45-08:00</xap:ModifyDate>
            <xap:MetadataDate>2008-01-04T01:11:45-08:00</xap:MetadataDate>
        </rdf:Description>
        <rdf:Description rdf:about="" xmlns:xapTPg="http://ns.adobe.com/xap/1.0/t/pg/"
            xmlns:stDim="http://ns.adobe.com/xap/1.0/sType/Dimensions#" xmlns:xapG="http://ns.adobe.com/xap/1.0/g/">
            <xapTPg:MaxPageSize rdf:parseType="Resource">
                <stDim:w>612.000000</stDim:w>
                <stDim:h>792.000000</stDim:h>
                <stDim:unit>Points</stDim:unit>
            </xapTPg:MaxPageSize>
            <xapTPg:NPages>1</xapTPg:NPages>
            <xapTPg:HasVisibleTransparency>False</xapTPg:HasVisibleTransparency>
            <xapTPg:HasVisibleOverprint>False</xapTPg:HasVisibleOverprint>
            <xapTPg:PlateNames>
                <rdf:Seq>
                    <rdf:li>Cyan</rdf:li>
                    <rdf:li>Magenta</rdf:li>
                    <rdf:li>Yellow</rdf:li>
                    <rdf:li>Black</rdf:li>
                </rdf:Seq>
            </xapTPg:PlateNames>
            <xapTPg:SwatchGroups>
                <rdf:Seq>
                    <rdf:li rdf:parseType="Resource">
                        <xapG:groupName>Default Swatch Group</xapG:groupName>
                        <xapG:groupType>0</xapG:groupType>
                    </rdf:li>
                </rdf:Seq>
            </xapTPg:SwatchGroups>
        </rdf:Description>
        <rdf:Description rdf:about="" xmlns:dc="http://purl.org/dc/elements/1.1/">
            <dc:format>image/svg+xml</dc:format>
        </rdf:Description>
        <rdf:Description rdf:about="" xmlns:xapMM="http://ns.adobe.com/xap/1.0/mm/">
            <xapMM:InstanceID>uuid:D0ABF190A4BADC11828F907C0EB444D3</xapMM:InstanceID>
        </rdf:Description>
    </rdf:RDF>
</x:xmpmeta>
<?xpacket end="w"?>
</metadata>
<g id="Layer_1" i:layer="yes" i:dimmedPercent="50" i:rgbTrio="#4F008000FFFF">
    <g>
        <g id="surface0" i:knockout="Off">
            <path fill="none" stroke="none" stroke-width="0.1" stroke-miterlimit="10" d="M138.709,30.938
               c5.609-0.752,11.406,1.083,15.914,4.42c5.193,3.894,7.9,10.298,8.531,16.621c-0.295,8.417-5.155,16.962-13.223,20.111
               c-7.173,3.311-15.957,1.923-22.096-2.922c-5.224-4.494-8.544-11.351-8.015-18.312C120.559,40.872,128.731,32.145,138.709,30.938z
               " />
            <path d="M138.709,30.938c5.609-0.752,11.406,1.083,15.914,4.42c5.193,3.894,7.9,10.298,8.531,16.621
               c-0.295,8.417-5.155,16.962-13.223,20.111c-7.173,3.311-15.957,1.923-22.096-2.922c-5.224-4.494-8.544-11.351-8.015-18.312
               C120.559,40.872,128.731,32.145,138.709,30.938z" />
            <path fill="none" stroke="none" stroke-width="0.1" stroke-miterlimit="10" d="M80.708,66.875
               c7.386-2.163,15.97-1.732,22.092,3.353c1.917,2.876,3.946,6.594,2.431,10.088c-1.416,3.29-4.979,4.698-8.044,6.012
               c-7.894,2.683-16.457,3.841-23.707,8.161c-5.154,3.081-6.941,9.597-5.855,15.241c0.5,6.843,5.978,11.954,11.813,14.8
               c4.678,2.798,10.345,2.349,15.574,2.216c4.266-0.208,8.066-2.58,12.318-2.738c-0.103,2.978-2.86,4.734-5.127,6.142
               c-7.209,3.908-15.691,4.301-23.712,3.991c-4.148-0.199-8.006-1.968-11.519-4.065c-5.816-3.631-12.024-7.484-15.131-13.878
               c-5.994-12.084-2.534-27.284,6.337-37.039C64.017,72.554,72.544,69.487,80.708,66.875z" />
            <path
                d="M80.708,66.875c7.386-2.163,15.97-1.732,22.092,3.353c1.917,2.876,3.946,6.594,2.431,10.088
               c-1.416,3.29-4.979,4.698-8.044,6.012c-7.894,2.683-16.457,3.841-23.707,8.161c-5.154,3.081-6.941,9.597-5.855,15.241
               c0.5,6.843,5.978,11.954,11.813,14.8c4.678,2.798,10.345,2.349,15.574,2.216c4.266-0.208,8.066-2.58,12.318-2.738
               c-0.103,2.978-2.86,4.734-5.127,6.142c-7.209,3.908-15.691,4.301-23.712,3.991c-4.148-0.199-8.006-1.968-11.519-4.065
               c-5.816-3.631-12.024-7.484-15.131-13.878c-5.994-12.084-2.534-27.284,6.337-37.039C64.017,72.554,72.544,69.487,80.708,66.875z" />
            <path fill="none" stroke="none" stroke-width="0.1" stroke-miterlimit="10" d="M157.501,76.707
               c1.079-0.584,2.237-0.912,3.475-0.984c21.44-0.625,42.759,2.389,63.873,5.841c15.21,2.599,30.544,4.428,45.769,6.903
               c0.748,1.864-2.445,1.671-3.57,2.198c-24.506,3.485-49.292,4.094-73.98,5.48c-8.992,0.102-17.988,0.678-26.979,0.191
               c-4.705-0.327-9.841-1.833-12.842-5.695C149.871,85.955,152.674,79.153,157.501,76.707z" />
            <path
                d="M157.501,76.707c1.079-0.584,2.237-0.912,3.475-0.984c21.44-0.625,42.759,2.389,63.873,5.841
               c15.21,2.599,30.544,4.428,45.769,6.903c0.748,1.864-2.445,1.671-3.57,2.198c-24.506,3.485-49.292,4.094-73.98,5.48
               c-8.992,0.102-17.988,0.678-26.979,0.191c-4.705-0.327-9.841-1.833-12.842-5.695C149.871,85.955,152.674,79.153,157.501,76.707z" />
            <g>
                <path i:knockout="Off" d="M99.674,90.979c3.651,0,7.299,0.609,10.709,1.822c4.505,1.858,8.272,5.036,12.029,8.062
                   c-1.307,9.05-8.023,17.218-16.883,19.755c-3.133,1.32-6.466,1.625-9.815,1.625c-1.865,0-3.734-0.094-5.577-0.16
                   c-6.755-1.242-12.693-5.212-17.796-9.649c1.625-4.728,3.091-9.78,6.623-13.492C84.458,93.62,92.072,90.98,99.674,90.979
                    M99.675,95.979C99.674,95.979,99.674,95.979,99.675,95.979c-6.613,0-12.859,2.361-17.157,6.48
                   c-2.001,2.14-3.208,5.098-4.33,8.316c4.44,3.448,8.56,5.527,12.518,6.326l0.885,0.033c1.429,0.056,2.779,0.108,4.123,0.108
                   c3.424,0,5.852-0.38,7.874-1.232l0.277-0.117l0.289-0.083c5.941-1.702,10.877-6.851,12.719-12.991
                   c-2.721-2.169-5.377-4.131-8.282-5.35C105.765,96.481,102.766,95.979,99.675,95.979L99.675,95.979z" />
            </g>
            <path fill="none" stroke="none" stroke-width="0.1" stroke-miterlimit="10" d="M92.555,145.724
               c8.434-4.452,18.034,0.25,25.649,4.312c4.229-2.854,9.524-4.887,14.655-3.598c4.44,1.239,7.31,5.328,8.821,9.456
               c0.998,3.519-1.058,6.729-2.616,9.704c6.281,6.408,12.217,13.459,15.594,21.873c3.68,9.916-0.072,21.463-7.806,28.381
               c-6.924,6.119-13.784,12.48-21.829,17.122c-8.743,4.793-18.221,8.864-28.132,10.144c4.46-4.734,10.246-7.979,14.874-12.548
               c6.003-5.296,11.119-11.508,15.767-18.004c3.385-4.89,6.505-10.239,7.045-16.293c-2.169-4.983-6.929-7.782-10.875-11.178
               c-5.996,7.16-11.934,14.403-18.748,20.815c-11.779,10.943-24.62,20.648-36.96,30.937c-13.131,10.562-26.014,21.44-39.269,31.843
               c-0.993-1.783,0.792-2.996,1.64-4.264c23.061-27.893,44.325-57.189,66.219-85.992c1.433-1.931,2.662-4,3.898-6.059
               c-5.839-3.695-12.259-8.715-12.688-16.207C87.933,152.346,88.416,147.299,92.555,145.724z" />
            <path
                d="M92.555,145.724c8.434-4.452,18.034,0.25,25.649,4.312c4.229-2.854,9.524-4.887,14.655-3.598
               c4.44,1.239,7.31,5.328,8.821,9.456c0.998,3.519-1.058,6.729-2.616,9.704c6.281,6.408,12.217,13.459,15.594,21.873
               c3.68,9.916-0.072,21.463-7.806,28.381c-6.924,6.119-13.784,12.48-21.829,17.122c-8.743,4.793-18.221,8.864-28.132,10.144
               c4.46-4.734,10.246-7.979,14.874-12.548c6.003-5.296,11.119-11.508,15.767-18.004c3.385-4.89,6.505-10.239,7.045-16.293
               c-2.169-4.983-6.929-7.782-10.875-11.178c-5.996,7.16-11.934,14.403-18.748,20.815c-11.779,10.943-24.62,20.648-36.96,30.937
               c-13.131,10.562-26.014,21.44-39.269,31.843c-0.993-1.783,0.792-2.996,1.64-4.264c23.061-27.893,44.325-57.189,66.219-85.992
               c1.433-1.931,2.662-4,3.898-6.059c-5.839-3.695-12.259-8.715-12.688-16.207C87.933,152.346,88.416,147.299,92.555,145.724z" />
        </g>
    </g>
</g>
</svg>'
];