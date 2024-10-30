<?php

Class CallLeadsHelper {
    
    public function calds_country_call_code_list() {
        $countryCallCodeArray = array( 'AD'=>array('name'=>'ANDORRA','code'=>'376'), 'AE'=>array('name'=>'UNITED ARAB EMIRATES','code'=>'971'), 'AF'=>array('name'=>'AFGHANISTAN','code'=>'93'), 'AG'=>array('name'=>'ANTIGUA AND BARBUDA','code'=>'1268'), 'AI'=>array('name'=>'ANGUILLA','code'=>'1264'), 'AL'=>array('name'=>'ALBANIA','code'=>'355'), 'AM'=>array('name'=>'ARMENIA','code'=>'374'), 'AN'=>array('name'=>'NETHERLANDS ANTILLES','code'=>'599'), 'AO'=>array('name'=>'ANGOLA','code'=>'244'), 'AQ'=>array('name'=>'ANTARCTICA','code'=>'672'), 'AR'=>array('name'=>'ARGENTINA','code'=>'54'), 'AS'=>array('name'=>'AMERICAN SAMOA','code'=>'1684'), 'AT'=>array('name'=>'AUSTRIA','code'=>'43'), 'AU'=>array('name'=>'AUSTRALIA','code'=>'61'), 'AW'=>array('name'=>'ARUBA','code'=>'297'), 'AZ'=>array('name'=>'AZERBAIJAN','code'=>'994'), 'BA'=>array('name'=>'BOSNIA AND HERZEGOVINA','code'=>'387'), 'BB'=>array('name'=>'BARBADOS','code'=>'1246'), 'BD'=>array('name'=>'BANGLADESH','code'=>'880'), 'BE'=>array('name'=>'BELGIUM','code'=>'32'), 'BF'=>array('name'=>'BURKINA FASO','code'=>'226'), 'BG'=>array('name'=>'BULGARIA','code'=>'359'), 'BH'=>array('name'=>'BAHRAIN','code'=>'973'), 'BI'=>array('name'=>'BURUNDI','code'=>'257'), 'BJ'=>array('name'=>'BENIN','code'=>'229'), 'BL'=>array('name'=>'SAINT BARTHELEMY','code'=>'590'), 'BM'=>array('name'=>'BERMUDA','code'=>'1441'), 'BN'=>array('name'=>'BRUNEI DARUSSALAM','code'=>'673'), 'BO'=>array('name'=>'BOLIVIA','code'=>'591'), 'BR'=>array('name'=>'BRAZIL','code'=>'55'), 'BS'=>array('name'=>'BAHAMAS','code'=>'1242'), 'BT'=>array('name'=>'BHUTAN','code'=>'975'), 'BW'=>array('name'=>'BOTSWANA','code'=>'267'), 'BY'=>array('name'=>'BELARUS','code'=>'375'), 'BZ'=>array('name'=>'BELIZE','code'=>'501'), 'CA'=>array('name'=>'CANADA','code'=>'1'), 'CC'=>array('name'=>'COCOS (KEELING) ISLANDS','code'=>'61'), 'CD'=>array('name'=>'CONGO, THE DEMOCRATIC REPUBLIC OF THE','code'=>'243'), 'CF'=>array('name'=>'CENTRAL AFRICAN REPUBLIC','code'=>'236'), 'CG'=>array('name'=>'CONGO','code'=>'242'), 'CH'=>array('name'=>'SWITZERLAND','code'=>'41'), 'CI'=>array('name'=>'COTE D IVOIRE','code'=>'225'), 'CK'=>array('name'=>'COOK ISLANDS','code'=>'682'), 'CL'=>array('name'=>'CHILE','code'=>'56'), 'CM'=>array('name'=>'CAMEROON','code'=>'237'), 'CN'=>array('name'=>'CHINA','code'=>'86'), 'CO'=>array('name'=>'COLOMBIA','code'=>'57'), 'CR'=>array('name'=>'COSTA RICA','code'=>'506'), 'CU'=>array('name'=>'CUBA','code'=>'53'), 'CV'=>array('name'=>'CAPE VERDE','code'=>'238'), 'CX'=>array('name'=>'CHRISTMAS ISLAND','code'=>'61'), 'CY'=>array('name'=>'CYPRUS','code'=>'357'), 'CZ'=>array('name'=>'CZECH REPUBLIC','code'=>'420'), 'DE'=>array('name'=>'GERMANY','code'=>'49'), 'DJ'=>array('name'=>'DJIBOUTI','code'=>'253'), 'DK'=>array('name'=>'DENMARK','code'=>'45'), 'DM'=>array('name'=>'DOMINICA','code'=>'1767'), 'DO'=>array('name'=>'DOMINICAN REPUBLIC','code'=>'1809'), 'DZ'=>array('name'=>'ALGERIA','code'=>'213'), 'EC'=>array('name'=>'ECUADOR','code'=>'593'), 'EE'=>array('name'=>'ESTONIA','code'=>'372'), 'EG'=>array('name'=>'EGYPT','code'=>'20'), 'ER'=>array('name'=>'ERITREA','code'=>'291'), 'ES'=>array('name'=>'SPAIN','code'=>'34'), 'ET'=>array('name'=>'ETHIOPIA','code'=>'251'), 'FI'=>array('name'=>'FINLAND','code'=>'358'), 'FJ'=>array('name'=>'FIJI','code'=>'679'), 'FK'=>array('name'=>'FALKLAND ISLANDS (MALVINAS)','code'=>'500'), 'FM'=>array('name'=>'MICRONESIA, FEDERATED STATES OF','code'=>'691'), 'FO'=>array('name'=>'FAROE ISLANDS','code'=>'298'), 'FR'=>array('name'=>'FRANCE','code'=>'33'), 'GA'=>array('name'=>'GABON','code'=>'241'), 'GB'=>array('name'=>'UNITED KINGDOM','code'=>'44'), 'GD'=>array('name'=>'GRENADA','code'=>'1473'), 'GE'=>array('name'=>'GEORGIA','code'=>'995'), 'GH'=>array('name'=>'GHANA','code'=>'233'), 'GI'=>array('name'=>'GIBRALTAR','code'=>'350'), 'GL'=>array('name'=>'GREENLAND','code'=>'299'), 'GM'=>array('name'=>'GAMBIA','code'=>'220'), 'GN'=>array('name'=>'GUINEA','code'=>'224'), 'GQ'=>array('name'=>'EQUATORIAL GUINEA','code'=>'240'), 'GR'=>array('name'=>'GREECE','code'=>'30'), 'GT'=>array('name'=>'GUATEMALA','code'=>'502'), 'GU'=>array('name'=>'GUAM','code'=>'1671'), 'GW'=>array('name'=>'GUINEA-BISSAU','code'=>'245'), 'GY'=>array('name'=>'GUYANA','code'=>'592'), 'HK'=>array('name'=>'HONG KONG','code'=>'852'), 'HN'=>array('name'=>'HONDURAS','code'=>'504'), 'HR'=>array('name'=>'CROATIA','code'=>'385'), 'HT'=>array('name'=>'HAITI','code'=>'509'), 'HU'=>array('name'=>'HUNGARY','code'=>'36'), 'ID'=>array('name'=>'INDONESIA','code'=>'62'), 'IE'=>array('name'=>'IRELAND','code'=>'353'), 'IL'=>array('name'=>'ISRAEL','code'=>'972'), 'IM'=>array('name'=>'ISLE OF MAN','code'=>'44'), 'IN'=>array('name'=>'INDIA','code'=>'91'), 'IQ'=>array('name'=>'IRAQ','code'=>'964'), 'IR'=>array('name'=>'IRAN, ISLAMIC REPUBLIC OF','code'=>'98'), 'IS'=>array('name'=>'ICELAND','code'=>'354'), 'IT'=>array('name'=>'ITALY','code'=>'39'), 'JM'=>array('name'=>'JAMAICA','code'=>'1876'), 'JO'=>array('name'=>'JORDAN','code'=>'962'), 'JP'=>array('name'=>'JAPAN','code'=>'81'), 'KE'=>array('name'=>'KENYA','code'=>'254'), 'KG'=>array('name'=>'KYRGYZSTAN','code'=>'996'), 'KH'=>array('name'=>'CAMBODIA','code'=>'855'), 'KI'=>array('name'=>'KIRIBATI','code'=>'686'), 'KM'=>array('name'=>'COMOROS','code'=>'269'), 'KN'=>array('name'=>'SAINT KITTS AND NEVIS','code'=>'1869'), 'KP'=>array('name'=>'KOREA DEMOCRATIC PEOPLES REPUBLIC OF','code'=>'850'), 'KR'=>array('name'=>'KOREA REPUBLIC OF','code'=>'82'), 'KW'=>array('name'=>'KUWAIT','code'=>'965'), 'KY'=>array('name'=>'CAYMAN ISLANDS','code'=>'1345'), 'KZ'=>array('name'=>'KAZAKSTAN','code'=>'7'), 'LA'=>array('name'=>'LAO PEOPLES DEMOCRATIC REPUBLIC','code'=>'856'), 'LB'=>array('name'=>'LEBANON','code'=>'961'), 'LC'=>array('name'=>'SAINT LUCIA','code'=>'1758'), 'LI'=>array('name'=>'LIECHTENSTEIN','code'=>'423'), 'LK'=>array('name'=>'SRI LANKA','code'=>'94'), 'LR'=>array('name'=>'LIBERIA','code'=>'231'), 'LS'=>array('name'=>'LESOTHO','code'=>'266'), 'LT'=>array('name'=>'LITHUANIA','code'=>'370'), 'LU'=>array('name'=>'LUXEMBOURG','code'=>'352'), 'LV'=>array('name'=>'LATVIA','code'=>'371'), 'LY'=>array('name'=>'LIBYAN ARAB JAMAHIRIYA','code'=>'218'), 'MA'=>array('name'=>'MOROCCO','code'=>'212'), 'MC'=>array('name'=>'MONACO','code'=>'377'), 'MD'=>array('name'=>'MOLDOVA, REPUBLIC OF','code'=>'373'), 'ME'=>array('name'=>'MONTENEGRO','code'=>'382'), 'MF'=>array('name'=>'SAINT MARTIN','code'=>'1599'), 'MG'=>array('name'=>'MADAGASCAR','code'=>'261'), 'MH'=>array('name'=>'MARSHALL ISLANDS','code'=>'692'), 'MK'=>array('name'=>'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF','code'=>'389'), 'ML'=>array('name'=>'MALI','code'=>'223'), 'MM'=>array('name'=>'MYANMAR','code'=>'95'), 'MN'=>array('name'=>'MONGOLIA','code'=>'976'), 'MO'=>array('name'=>'MACAU','code'=>'853'), 'MP'=>array('name'=>'NORTHERN MARIANA ISLANDS','code'=>'1670'), 'MR'=>array('name'=>'MAURITANIA','code'=>'222'), 'MS'=>array('name'=>'MONTSERRAT','code'=>'1664'), 'MT'=>array('name'=>'MALTA','code'=>'356'), 'MU'=>array('name'=>'MAURITIUS','code'=>'230'), 'MV'=>array('name'=>'MALDIVES','code'=>'960'), 'MW'=>array('name'=>'MALAWI','code'=>'265'), 'MX'=>array('name'=>'MEXICO','code'=>'52'), 'MY'=>array('name'=>'MALAYSIA','code'=>'60'), 'MZ'=>array('name'=>'MOZAMBIQUE','code'=>'258'), 'NA'=>array('name'=>'NAMIBIA','code'=>'264'), 'NC'=>array('name'=>'NEW CALEDONIA','code'=>'687'), 'NE'=>array('name'=>'NIGER','code'=>'227'), 'NG'=>array('name'=>'NIGERIA','code'=>'234'), 'NI'=>array('name'=>'NICARAGUA','code'=>'505'), 'NL'=>array('name'=>'NETHERLANDS','code'=>'31'), 'NO'=>array('name'=>'NORWAY','code'=>'47'), 'NP'=>array('name'=>'NEPAL','code'=>'977'), 'NR'=>array('name'=>'NAURU','code'=>'674'), 'NU'=>array('name'=>'NIUE','code'=>'683'), 'NZ'=>array('name'=>'NEW ZEALAND','code'=>'64'), 'OM'=>array('name'=>'OMAN','code'=>'968'), 'PA'=>array('name'=>'PANAMA','code'=>'507'), 'PE'=>array('name'=>'PERU','code'=>'51'), 'PF'=>array('name'=>'FRENCH POLYNESIA','code'=>'689'), 'PG'=>array('name'=>'PAPUA NEW GUINEA','code'=>'675'), 'PH'=>array('name'=>'PHILIPPINES','code'=>'63'), 'PK'=>array('name'=>'PAKISTAN','code'=>'92'), 'PL'=>array('name'=>'POLAND','code'=>'48'), 'PM'=>array('name'=>'SAINT PIERRE AND MIQUELON','code'=>'508'), 'PN'=>array('name'=>'PITCAIRN','code'=>'870'), 'PR'=>array('name'=>'PUERTO RICO','code'=>'1'), 'PT'=>array('name'=>'PORTUGAL','code'=>'351'), 'PW'=>array('name'=>'PALAU','code'=>'680'), 'PY'=>array('name'=>'PARAGUAY','code'=>'595'), 'QA'=>array('name'=>'QATAR','code'=>'974'), 'RO'=>array('name'=>'ROMANIA','code'=>'40'), 'RS'=>array('name'=>'SERBIA','code'=>'381'), 'RU'=>array('name'=>'RUSSIAN FEDERATION','code'=>'7'), 'RW'=>array('name'=>'RWANDA','code'=>'250'), 'SA'=>array('name'=>'SAUDI ARABIA','code'=>'966'), 'SB'=>array('name'=>'SOLOMON ISLANDS','code'=>'677'), 'SC'=>array('name'=>'SEYCHELLES','code'=>'248'), 'SD'=>array('name'=>'SUDAN','code'=>'249'), 'SE'=>array('name'=>'SWEDEN','code'=>'46'), 'SG'=>array('name'=>'SINGAPORE','code'=>'65'), 'SH'=>array('name'=>'SAINT HELENA','code'=>'290'), 'SI'=>array('name'=>'SLOVENIA','code'=>'386'), 'SK'=>array('name'=>'SLOVAKIA','code'=>'421'), 'SL'=>array('name'=>'SIERRA LEONE','code'=>'232'), 'SM'=>array('name'=>'SAN MARINO','code'=>'378'), 'SN'=>array('name'=>'SENEGAL','code'=>'221'), 'SO'=>array('name'=>'SOMALIA','code'=>'252'), 'SR'=>array('name'=>'SURINAME','code'=>'597'), 'ST'=>array('name'=>'SAO TOME AND PRINCIPE','code'=>'239'), 'SV'=>array('name'=>'EL SALVADOR','code'=>'503'), 'SY'=>array('name'=>'SYRIAN ARAB REPUBLIC','code'=>'963'), 'SZ'=>array('name'=>'SWAZILAND','code'=>'268'), 'TC'=>array('name'=>'TURKS AND CAICOS ISLANDS','code'=>'1649'), 'TD'=>array('name'=>'CHAD','code'=>'235'), 'TG'=>array('name'=>'TOGO','code'=>'228'), 'TH'=>array('name'=>'THAILAND','code'=>'66'), 'TJ'=>array('name'=>'TAJIKISTAN','code'=>'992'), 'TK'=>array('name'=>'TOKELAU','code'=>'690'), 'TL'=>array('name'=>'TIMOR-LESTE','code'=>'670'), 'TM'=>array('name'=>'TURKMENISTAN','code'=>'993'), 'TN'=>array('name'=>'TUNISIA','code'=>'216'),'TO' => array('name'=>'TONGA','code'=>'676'), 'TR'=>array('name'=>'TURKEY','code'=>'90'), 'TT'=>array('name'=>'TRINIDAD AND TOBAGO','code'=>'1868'), 'TV'=>array('name'=>'TUVALU','code'=>'688'), 'TW'=>array('name'=>'TAIWAN, PROVINCE OF CHINA','code'=>'886'), 'TZ'=>array('name'=>'TANZANIA, UNITED REPUBLIC OF','code'=>'255'), 'UA'=>array('name'=>'UKRAINE','code'=>'380'), 'UG'=>array('name'=>'UGANDA','code'=>'256'), 'US'=>array('name'=>'UNITED STATES','code'=>'1'), 'UY'=>array('name'=>'URUGUAY','code'=>'598'), 'UZ'=>array('name'=>'UZBEKISTAN','code'=>'998'), 'VA'=>array('name'=>'HOLY SEE (VATICAN CITY STATE)','code'=>'39'), 'VC'=>array('name'=>'SAINT VINCENT AND THE GRENADINES','code'=>'1784'), 'VE'=>array('name'=>'VENEZUELA','code'=>'58'), 'VG'=>array('name'=>'VIRGIN ISLANDS, BRITISH','code'=>'1284'), 'VI'=>array('name'=>'VIRGIN ISLANDS, U.S.','code'=>'1340'), 'VN'=>array('name'=>'VIET NAM','code'=>'84'), 'VU'=>array('name'=>'VANUATU','code'=>'678'), 'WF'=>array('name'=>'WALLIS AND FUTUNA','code'=>'681'), 'WS'=>array('name'=>'SAMOA','code'=>'685'), 'XK'=>array('name'=>'KOSOVO','code'=>'381'), 'YE'=>array('name'=>'YEMEN','code'=>'967'), 'YT'=>array('name'=>'MAYOTTE','code'=>'262'), 'ZA'=>array('name'=>'SOUTH AFRICA','code'=>'27'), 'ZM'=>array('name'=>'ZAMBIA','code'=>'260'), 'ZW'=>array('name'=>'ZIMBABWE','code'=>'263') );
        
        return $countryCallCodeArray;
    }
    
    public function calds_cookies_time() {
        
        $cookies_time = array(
            '3'       =>      __('3 minutes', 'callleads'),
            '5'       =>      __('5 minutes', 'callleads'),
            '10'      =>      __('10 minutes', 'callleads'),
            '15'      =>      __('15 minutes', 'callleads'),
            '20'      =>      __('20 minutes', 'callleads'),
            '30'      =>      __('30 minutes', 'callleads'),
            '60'      =>      __('1 hour', 'callleads'),
            '180'     =>      __('3 hours', 'callleads'),
            '1'       =>      __('1 day', 'callleads'),
            '2'       =>      __('2 days', 'callleads'),
            '7'       =>      __('7 days', 'callleads'),
            '30'       =>      __('30 days', 'callleads'),
        );
        
        return $cookies_time;
    }
    
    public function calds_icon_pos() {
        
        $iconpos = array(
            'b_right'     =>      __('Bottom Right', 'callleads'),
            'b_left'      =>      __('Bottom Left', 'callleads'),
            'b_mid'       =>      __('Bottom Middle', 'callleads'),
            'm_right'     =>      __('Middle Right', 'callleads'),
            'm_left'      =>      __('Middle Left', 'callleads'),
            't_right'     =>      __('Top Right', 'callleads'),
            't_left'      =>      __('Top Left', 'callleads')
        );
        
        return $iconpos;
    }
    
    public function calds_style_by_pos() {
        $iconposstyle = array(
            'b_right'     =>      'right: 38px;bottom: 38px;',
            'b_left'      =>      'left: 38px;bottom: 38px;',
            'b_mid'       =>      '-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);transform: translateY(-50%);left: 0;right: 0;margin: auto;bottom: 0%;',
            'm_right'     =>      '-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);transform: translateY(-50%);right: 38px;top:50%;',
            'm_left'      =>      '-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);transform: translateY(-50%);left: 38px;top:50%;',
            't_right'     =>      'right: 38px;top: 38px;',
            't_left'      =>      'left: 38px;top: 38px;'
        );
        
        return $iconposstyle;    
    }
    
    public function calds_sanitize($input) {
        return esc_html($input);
    }
    
    public function calds_call_icon() {
        return '          
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="348.077px" height="348.077px" viewBox="0 0 348.077 348.077" style="enable-background:new 0 0 348.077 348.077;" xml:space="preserve"> <g> <g> <g> <path d="M340.273,275.083l-53.755-53.761c-10.707-10.664-28.438-10.34-39.518,0.744l-27.082,27.076 c-1.711-0.943-3.482-1.928-5.344-2.973c-17.102-9.476-40.509-22.464-65.14-47.113c-24.704-24.701-37.704-48.144-47.209-65.257 c-1.003-1.813-1.964-3.561-2.913-5.221l18.176-18.149l8.936-8.947c11.097-11.1,11.403-28.826,0.721-39.521L73.39,8.194 C62.708-2.486,44.969-2.162,33.872,8.938l-15.15,15.237l0.414,0.411c-5.08,6.482-9.325,13.958-12.484,22.02 C3.74,54.28,1.927,61.603,1.098,68.941C-6,127.785,20.89,181.564,93.866,254.541c100.875,100.868,182.167,93.248,185.674,92.876 c7.638-0.913,14.958-2.738,22.397-5.627c7.992-3.122,15.463-7.361,21.941-12.43l0.331,0.294l15.348-15.029 C350.631,303.527,350.95,285.795,340.273,275.083z"/> </g> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
        ';
    }
    
    public function calds_time_array() {
        $time = array('12:00 AM','12:10 AM','12:20 AM','12:30 AM','12:40 AM','12:50 AM','1:00 AM','1:10 AM','1:20 AM','1:30 AM','1:40 AM','1:50 AM','2:00 AM','2:10 AM','2:20 AM','2:30 AM','2:40 AM','2:50 AM','3:00 AM','3:10 AM','3:20 AM','3:30 AM','3:40 AM','3:50 AM','4:00 AM','4:10 AM','4:20 AM','4:30 AM','4:40 AM','4:50 AM','5:00 AM','5:10 AM','5:20 AM','5:30 AM','5:40 AM','5:50 AM','6:00 AM','6:10 AM','6:20 AM','6:30 AM','6:40 AM','6:50 AM','7:00 AM','7:10 AM','7:20 AM','7:30 AM','7:40 AM','7:50 AM','8:00 AM','8:10 AM','8:20 AM','8:30 AM','8:40 AM','8:50 AM','9:00 AM','9:10 AM','9:20 AM','9:30 AM','9:40 AM','9:50 AM','10:00 AM','10:10 AM','10:20 AM','10:30 AM','10:40 AM','10:50 AM','11:00 AM','11:10 AM','11:20 AM','11:30 AM','11:40 AM','11:50 AM','12:00 PM','12:10 PM','12:20 PM','12:30 PM','12:40 PM','12:50 PM','1:00 PM','1:10 PM','1:20 PM','1:30 PM','1:40 PM','1:50 PM','2:00 PM','2:10 PM','2:20 PM','2:30 PM','2:40 PM','2:50 PM','3:00 PM','3:10 PM','3:20 PM','3:30 PM','3:40 PM','3:50 PM','4:00 PM','4:10 PM','4:20 PM','4:30 PM','4:40 PM','4:50 PM','5:00 PM','5:10 PM','5:20 PM','5:30 PM','5:40 PM','5:50 PM','6:00 PM','6:10 PM','6:20 PM','6:30 PM','6:40 PM','6:50 PM','7:00 PM','7:10 PM','7:20 PM','7:30 PM','7:40 PM','7:50 PM','8:00 PM','8:10 PM','8:20 PM','8:30 PM','8:40 PM','8:50 PM','9:00 PM','9:10 PM','9:20 PM','9:30 PM','9:40 PM','9:50 PM','10:00 PM','10:10 PM','10:20 PM','10:30 PM','10:40 PM','10:50 PM','11:00 PM','11:10 PM','11:20 PM','11:30 PM','11:40 PM','11:50 PM');
        
        return $time;
    }
    
    public function calds_close_icon() {
        return '
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve"><g><path d="M538.7,500L980.5,58.2c6-6,9.5-14.1,9.5-22.3c0-7.1-2.7-13.7-7.5-18.5c-4.8-4.8-11.4-7.5-18.5-7.5c-8.1,0-16.2,3.5-22.2,9.5L500,461.3L58.2,19.5c-6-6-14.1-9.5-22.2-9.5c-7.1,0-13.7,2.7-18.5,7.5C12.7,22.2,10,28.8,10,36c0,8.1,3.5,16.1,9.5,22.2L461.3,500L19.5,941.8c-5.8,5.8-9.1,13.2-9.5,20.9c-0.3,7.6,2.3,14.7,7.4,19.8c4.8,4.8,11.4,7.4,18.5,7.4c8.1,0,16.2-3.4,22.2-9.5L500,538.7l441.8,441.8c11.3,11.3,30.4,12.2,40.7,2c10.7-10.7,9.8-28.9-2-40.7L538.7,500z"/></g></svg>
        ';
    }
    
    public function calds_form_icon() {
        return '
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 32.667 32.667" style="enable-background:new 0 0 32.667 32.667;" xml:space="preserve"> <g> <path d="M16.333,0C7.327,0,0,7.327,0,16.334c0,9.006,7.326,16.333,16.333,16.333c0.557,0,1.007-0.451,1.007-1.006 c0-0.556-0.45-1.007-1.007-1.007c-7.896,0-14.318-6.424-14.318-14.319c0-7.896,6.422-14.32,14.318-14.32 c7.896,0,14.317,6.424,14.317,14.32c0,3.299-1.756,6.571-4.269,7.955c-0.913,0.502-1.903,0.751-2.959,0.761 c0.634-0.378,1.183-0.887,1.591-1.531c0.08-0.121,0.186-0.226,0.238-0.359c0.328-0.789,0.357-1.684,0.555-2.516 c0.243-1.066-4.658-3.143-5.084-1.815c-0.154,0.493-0.39,2.048-0.699,2.458c-0.275,0.365-0.953,0.193-1.377-0.168 c-1.117-0.952-2.364-2.352-3.458-3.457l0.002-0.001c-0.028-0.029-0.062-0.062-0.092-0.091c-0.031-0.03-0.062-0.062-0.093-0.092l0,0 c-1.106-1.093-2.506-2.338-3.457-3.458c-0.36-0.424-0.534-1.1-0.168-1.376c0.41-0.31,1.966-0.543,2.458-0.698 c1.326-0.425-0.75-5.329-1.816-5.084c-0.832,0.195-1.727,0.225-2.516,0.552c-0.134,0.056-0.238,0.16-0.359,0.24 c-2.799,1.775-3.16,6.083-0.428,9.292c1.041,1.228,2.127,2.416,3.245,3.576l-0.006,0.004c0.031,0.031,0.063,0.06,0.095,0.09 c0.03,0.031,0.059,0.062,0.088,0.095l0.006-0.006c1.16,1.118,2.535,2.764,4.769,4.255c4.703,3.141,8.312,2.264,10.438,1.098 c3.67-2.021,5.312-6.338,5.312-9.719C32.667,7.327,25.339,0,16.333,0z"/> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
        ';
    }
    
    public function calds_on_load_icon_one($params) {
        $default_params = array(
            'text_one'        =>   isset($params['text_one']) ? $params['text_one'] : '',
            'text_two'        =>   isset($params['text_two']) ? $params['text_two'] : '',
            'pri_col'          =>   isset($params['pri_col']) ? $params['pri_col'] : '#663399',
            'icon_pos'        =>   isset($params['icon_pos']) ? $params['icon_pos'] : 'b_right',
            'icon_image'      =>   isset($params['icon_image']) ? $params['icon_image'] : '', 
            'enab_icon_anim'  =>   isset($params['enab_icon_anim']) ? $params['enab_icon_anim'] : 0,
            'anim_splash'     =>   isset($params['anim_splash']) ? $params['anim_splash'] : '',
            'icon_shadow'     =>   isset($params['icon_shadow']) ? $params['icon_shadow'] : '',
        );
        
        if ($default_params['enab_icon_anim'] == 1) {
            $anim_bx_shdw =  'animation: calds_icon_splash 2s infinite;box-shadow:'.$default_params['anim_splash'].';';  
        }else{
            $anim_bx_shdw = '';    
        }
        
        if ($default_params['icon_shadow'] == 1) {
            $icon_shadow =  'box-shadow: 0 3px 5px -1px rgba(0,0,0,0.5);';  
        }else {
            $icon_shadow = '';   
        }
        
        $skin = "
            <div class='on_load_icon_one on_load_icon'>
                <div class='on_load_icon_one_inner on_load_icon'>{$this->calds_call_icon()}</div>
            <style>
                .on_load_icon {font-family: \"Open Sans\",sans-serif;}
                .on_load_icon_one { position: fixed; {$this->calds_style_by_pos()[$default_params['icon_pos']]} width: 70px; height: 70px; background: {$default_params['pri_col']}; border-radius: 50%;cursor:pointer;{$anim_bx_shdw}{$icon_shadow}} 
                .on_load_icon_one_inner { position: relative; height: 100%; width: 100%; } .on_load_icon_one_inner svg { position: absolute; top: 50%; -webkit-transform: translateY(-50%); -ms-transform: translateY(-50%); transform: translateY(-50%); left: 0; right: 0; margin: auto; height: 42px; width: 42px; fill: #fff;}
                @keyframes calds_icon_splash{0%{transform(scale(.85));}68%{transform(scale(1));box-shadow:0 0 0 20px rgba(0, 0, 0,0);}100%{transform(scale(.85));box-shadow:0 0 0 20px rgba(0, 0, 0,0);}} 
            </style>
            </div>
        ";  
        return $skin;
    }
    
    public function calds_on_load_icon_two($params) {
        $default_params = array(
            'enable_rtl'      =>   isset($params['enable_rtl']) ? $params['enable_rtl'] : 0,
            'text_one'        =>   isset($params['text_one']) ? $params['text_one'] : '',
            'text_two'        =>   isset($params['text_two']) ? $params['text_two'] : '',
            'pri_col'         =>   isset($params['pri_col']) ? $params['pri_col'] : '#663399',
            'icon_pos'        =>   isset($params['icon_pos']) ? $params['icon_pos'] : 'b_right',
            'icon_image'      =>   isset($params['icon_image']) ? $params['icon_image'] : '', 
            'enab_icon_anim'  =>   isset($params['enab_icon_anim']) ? $params['enab_icon_anim'] : 0,
            'anim_splash'     =>   isset($params['anim_splash']) ? $params['anim_splash'] : '',
            'icon_shadow'     =>   isset($params['icon_shadow']) ? $params['icon_shadow'] : '',
        );
        
        if ($default_params['enab_icon_anim'] == 1) {
            $anim_bx_shdw =  'animation: calds_icon_splash 2s infinite;box-shadow:'.$default_params['anim_splash'].';';  
        }else{
            $anim_bx_shdw = '';    
        }
        
        if ($default_params['icon_shadow'] == 1) {
            $icon_shadow =  'box-shadow: 0 3px 5px -1px rgba(0,0,0,0.5);';  
        }else {
            $icon_shadow = '';   
        }
        
        $skin = "
            <div class='on_load_icon_two on_load_icon'>
                <div class='on_load_icon_two_inner'>
                    <div class='on_load_icon_two_icon'>{$this->calds_call_icon()}</div>
                    <div class='on_load_icon_two_text'>
                        <div class='on_load_icon_two_text_inner'>
                            <div class='on_load_icon_two_text_one'>{$this->calds_sanitize($default_params['text_one'])}</div>
                            <div class='on_load_icon_two_text_two'>{$this->calds_sanitize($default_params['text_two'])}</div>
                        </div>
                    </div>
                </div>";
        
    if ($default_params['enable_rtl'] == 0) {
        $skin .="
                <style>
                    .on_load_icon {font-family: \"Open Sans\",sans-serif;}
                    .on_load_icon_two { width: 250px;background: {$default_params['pri_col']};padding: 12.5px 10px;border-radius: 100px;position: fixed;{$this->calds_style_by_pos()[$default_params['icon_pos']]}z-index: 99999;cursor:pointer;{$anim_bx_shdw}{$icon_shadow}}
                    .on_load_icon_two_inner {position: relative;width: 100%;height: 50px;}
                    .on_load_icon_two_icon {float: left;width: 25%;margin-right: 2%;height: 50px;    position: relative;display: table;}
                    .on_load_icon_two_icon svg {fill: #fff;width: 45px;height: 50px;display: table-cell;vertical-align: middle;margin: 0 auto;}
                    .on_load_icon_two_text {width: 73%;float: left;text-align: center;height: 50px;    display: table;}
                    .on_load_icon_two_text_inner {display: table-cell;vertical-align: middle;}
                    .on_load_icon_two_text_one {font-size: 14px;color: rgb(255, 255, 255);font-weight: 300;text-align: center;line-height: 1;}
                    .on_load_icon_two_text_two {font-size: 18px;color: rgb(255, 255, 255);font-weight: 600;text-align: center;margin-top: 5px;line-height: 1;}
                    @keyframes calds_icon_splash{0%{transform(scale(.85));}68%{transform(scale(1));box-shadow:0 0 0 20px rgba(0, 0, 0,0);}100%{transform(scale(.85));box-shadow:0 0 0 20px rgba(0, 0, 0,0);}}
                </style>";
    }else {
        $skin .= "
                <style>
                    .on_load_icon {font-family: \"Open Sans\",sans-serif;}
                    .on_load_icon_two { width: 250px;background: {$default_params['pri_col']};padding: 12.5px 10px;border-radius: 100px;position: fixed;{$this->calds_style_by_pos()[$default_params['icon_pos']]}z-index: 99999;cursor:pointer;{$anim_bx_shdw}{$icon_shadow}}
                    .on_load_icon_two_inner {position: relative;width: 100%;height: 50px;}
                    .on_load_icon_two_icon {float: right;width: 25%;margin-left: 2%;height: 50px;    position: relative;display: table;}
                    .on_load_icon_two_icon svg {fill: #fff;width: 45px;height: 50px;display: table-cell;vertical-align: middle;margin: 0 auto;}
                    .on_load_icon_two_text {width: 73%;float: right;text-align: center;height: 50px;    display: table;}
                    .on_load_icon_two_text_inner {display: table-cell;vertical-align: middle;}
                    .on_load_icon_two_text_one {font-size: 14px;color: rgb(255, 255, 255);font-weight: 300;text-align: center;line-height: 1;}
                    .on_load_icon_two_text_two {font-size: 18px;color: rgb(255, 255, 255);font-weight: 600;text-align: center;margin-top: 5px;line-height: 1;}
                    @keyframes calds_icon_splash{0%{transform(scale(.85));}68%{transform(scale(1));box-shadow:0 0 0 20px rgba(0, 0, 0,0);}100%{transform(scale(.85));box-shadow:0 0 0 20px rgba(0, 0, 0,0);}}
                </style>
        ";
    }
        $skin .="
            </div>
        ";  
        return $skin;
    }
    
    public function calds_on_load_icon_three($params) {
        $default_params = array(
            'enable_rtl'      =>   isset($params['enable_rtl']) ? $params['enable_rtl'] : 0,
            'text_one'        =>   isset($params['text_one']) ? $params['text_one'] : '',
            'text_two'        =>   isset($params['text_two']) ? $params['text_two'] : '',
            'pri_col'          =>   isset($params['pri_col']) ? $params['pri_col'] : '#663399',
            'icon_pos'        =>   isset($params['icon_pos']) ? $params['icon_pos'] : 'b_right',
            'icon_image'      =>   isset($params['icon_image']) ? $params['icon_image'] : '', 
            'enab_icon_anim'  =>   isset($params['enab_icon_anim']) ? $params['enab_icon_anim'] : 0,
            'anim_splash'     =>   isset($params['anim_splash']) ? $params['anim_splash'] : '',
            'icon_shadow'     =>   isset($params['icon_shadow']) ? $params['icon_shadow'] : '',
        );
        
        if ($default_params['enab_icon_anim'] == 1) {
            $anim_bx_shdw =  'animation: calds_icon_splash 2s infinite;box-shadow:'.$default_params['anim_splash'].';';  
        }else{
            $anim_bx_shdw = '';    
        }
        
        if ($default_params['icon_shadow'] == 1) {
            $icon_shadow =  'box-shadow: 0 3px 5px -1px rgba(0,0,0,0.5);';  
        }else {
            $icon_shadow = '';   
        }
        
        $skin = "
            <div class='on_load_icon_three on_load_icon'>
                <div class='on_load_icon_three_inner'>
                    <div class='on_load_icon_three_icon'>";
        if(empty($this->calds_sanitize($default_params['icon_image']))) {
            $skin .= "<img src='".CALDS_PLUGIN_URL."/assets/img/calds_call_agent.gif' />";    
        }else{
            $skin .= "<img src='{$this->calds_sanitize($default_params['icon_image'])}' />";    
        }
                        
        $skin .= "</div>
                    <div class='on_load_icon_three_text'>
                        <div class='on_load_icon_three_text_inner'>
                            <div class='on_load_icon_three_text_one'>{$this->calds_sanitize($default_params['text_one'])}</div>
                            <div class='on_load_icon_three_text_two'>{$this->calds_sanitize($default_params['text_two'])}</div>
                        </div>
                    </div>
                </div>";
        if ($default_params['enable_rtl'] == 0) {
            $skin .="
                <style>
                    .on_load_icon {font-family: \"Open Sans\",sans-serif;}
                    .on_load_icon_three { width: 250px;background: {$default_params['pri_col']};padding:10px;border-radius: 100px;position: fixed;{$this->calds_style_by_pos()[$default_params['icon_pos']]}z-index: 99999;cursor:pointer;{$anim_bx_shdw}{$icon_shadow}}
                    .on_load_icon_three_inner {position: relative;width: 100%;height: 50px;}
                    .on_load_icon_three_icon {float: left;width: 25%;margin-right: 2%;height: 50px;    position: relative;display: table;}
                    .on_load_icon_three_icon img {fill: #fff;width: 50px;height: 50px;display: table-cell;vertical-align: middle;margin: 0 auto;border-radius: 50%;}
                    .on_load_icon_three_text {width: 73%;float: left;text-align: center;height: 50px;    display: table;}
                    .on_load_icon_three_text_inner {display: table-cell;vertical-align: middle;}
                    .on_load_icon_three_text_one {font-size: 14px;color: rgb(255, 255, 255);font-weight: 300;text-align: center;line-height: 1;}
                    .on_load_icon_three_text_two {font-size: 18px;color: rgb(255, 255, 255);font-weight: 700;text-align: center;margin-top: 5px;line-height: 1;}
                    @keyframes calds_icon_splash{0%{transform(scale(.85));}68%{transform(scale(1));box-shadow:0 0 0 20px rgba(0, 0, 0,0);}100%{transform(scale(.85));box-shadow:0 0 0 20px rgba(0, 0, 0,0);}}
                </style>";
        }else{
            $skin .="
                <style>
                    .on_load_icon {font-family: \"Open Sans\",sans-serif;}
                    .on_load_icon_three { width: 250px;background: {$default_params['pri_col']};padding:10px;border-radius: 100px;position: fixed;{$this->calds_style_by_pos()[$default_params['icon_pos']]}z-index: 99999;cursor:pointer;{$anim_bx_shdw}{$icon_shadow}}
                    .on_load_icon_three_inner {position: relative;width: 100%;height: 50px;}
                    .on_load_icon_three_icon {float: right;width: 25%;margin-left: 2%;height: 50px;    position: relative;display: table;}
                    .on_load_icon_three_icon img {fill: #fff;width: 50px;height: 50px;display: table-cell;vertical-align: middle;margin: 0 auto;border-radius: 50%;}
                    .on_load_icon_three_text {width: 73%;float: right;text-align: center;height: 50px;    display: table;}
                    .on_load_icon_three_text_inner {display: table-cell;vertical-align: middle;}
                    .on_load_icon_three_text_one {font-size: 14px;color: rgb(255, 255, 255);font-weight: 500;text-align: center;line-height: 1;}
                    .on_load_icon_three_text_two {font-size: 18px;color: rgb(255, 255, 255);font-weight: 700;text-align: center;margin-top: 5px;line-height: 1;}
                    @keyframes calds_icon_splash{0%{transform(scale(.85));}68%{transform(scale(1));box-shadow:0 0 0 20px rgba(0, 0, 0,0);}100%{transform(scale(.85));box-shadow:0 0 0 20px rgba(0, 0, 0,0);}}
                </style>";    
        }
        $skin .="
            </div>
        "; 
        return $skin;
    }
    
    public function calds_on_load_icon_four($params) {
        $default_params = array(
            'text_one'        =>   isset($params['text_one']) ? $params['text_one'] : '',
            'text_two'        =>   isset($params['text_two']) ? $params['text_two'] : '',
            'pri_col'          =>   isset($params['pri_col']) ? $params['pri_col'] : '#663399',
            'icon_pos'        =>   isset($params['icon_pos']) ? $params['icon_pos'] : 'b_right',
            'icon_image'      =>   isset($params['icon_image']) ? $params['icon_image'] : '', 
            'enab_icon_anim'  =>   isset($params['enab_icon_anim']) ? $params['enab_icon_anim'] : 0,
            'anim_splash'     =>   isset($params['anim_splash']) ? $params['anim_splash'] : '',
            'icon_shadow'     =>   isset($params['icon_shadow']) ? $params['icon_shadow'] : '',
        );
        
        if ($default_params['enab_icon_anim'] == 1) {
            $anim_bx_shdw =  'animation: calds_icon_splash 2s infinite;box-shadow:'.$default_params['anim_splash'].';';  
        }else{
            $anim_bx_shdw = '';    
        }
        
        if ($default_params['icon_shadow'] == 1) {
            $icon_shadow =  'box-shadow: 0 3px 5px -1px rgba(0,0,0,0.5);';  
        }else {
            $icon_shadow = '';   
        }
        
        $skin = "
            <div class='on_load_icon_four on_load_icon'>
            <div class='on_load_icon_four_text'>
                {$this->calds_sanitize($default_params['text_one'])}
            </div>
            <style>
                .on_load_icon {font-family: \"Open Sans\",sans-serif;}
                .on_load_icon_four {width: auto;background: {$default_params['pri_col']};padding: 15px 32px;border-radius: 50px;position: fixed;{$this->calds_style_by_pos()[$default_params['icon_pos']]}z-index: 99999;text-decoration: none !important;cursor:pointer;{$anim_bx_shdw}{$icon_shadow}}  
                .on_load_icon_four_text {font-size: 14px;color: rgb(255, 255, 255);font-weight: 700;text-align: center;line-height: 1;}
                @keyframes calds_icon_splash{0%{transform(scale(.85));}68%{transform(scale(1));box-shadow:0 0 0 20px rgba(0, 0, 0,0);}100%{transform(scale(.85));box-shadow:0 0 0 20px rgba(0, 0, 0,0);}}
            </style>
            </div>
        ";   
        return $skin;
    }
    
    public function calds_on_click_skin_one($params) {
        $default_params = array(
           'click_el_tit'       =>  isset($params['click_el_tit']) ? $this->calds_sanitize($params['click_el_tit']) : '',  
           'cl_el_subtit'       =>  isset($params['cl_el_subtit']) ? $this->calds_sanitize($params['cl_el_subtit']) : '',
           'cl_el_btn_txt'      =>  isset($params['cl_el_btn_txt']) ? $this->calds_sanitize($params['cl_el_btn_txt']) : '', 
           'cl_el_fotr_txt'     =>  isset($params['cl_el_fotr_txt']) ? $this->calds_sanitize($params['cl_el_fotr_txt']) : '', 
           'g_site_key'         =>  isset($params['g_site_key']) ? $this->calds_sanitize($params['g_site_key']) : '', 
           'g_secr_key'         =>  isset($params['g_secr_key']) ? $this->calds_sanitize($params['g_secr_key']) : '', 
           'enable_rtl'         =>  isset($params['enable_rtl']) ? (int) $params['enable_rtl'] : 0,
           'en_dis_el_tit'      =>  isset($params['en_dis_el_tit']) ? (int) $params['en_dis_el_tit'] : 0,
           'en_dis_el_subtit'   =>  isset($params['en_dis_el_subtit']) ? (int)$params['en_dis_el_subtit'] : 0,
           'en_dis_el_date'     =>  isset($params['en_dis_el_date']) ? (int) $params['en_dis_el_date'] : 0,
           'en_dis_el_time'     =>  isset($params['en_dis_el_time']) ? (int) $params['en_dis_el_time'] : 0,
           'en_dis_el_name'     =>  isset($params['en_dis_el_name']) ? (int) $params['en_dis_el_name'] : 0,
           'en_dis_el_email'    =>  isset($params['en_dis_el_email']) ? (int) $params['en_dis_el_email'] : 0,
           'en_dis_el_phone'    =>  isset($params['en_dis_el_phone']) ? (int) $params['en_dis_el_phone'] : 0,
           'en_dis_fotr_txt'    =>  isset($params['en_dis_fotr_txt']) ? (int) $params['en_dis_fotr_txt'] : 0,
           'enb_g_captcha'      =>  isset($params['enb_g_captcha']) ?(int) $params['enb_g_captcha'] : 0,
           'on_cl_bg_col'       =>  isset($params['on_cl_bg_col']) ? $this->calds_sanitize( $params['on_cl_bg_col'] ) : '#663399',
           'pri_col'            =>  isset($params['pri_col']) ? $this->calds_sanitize( $params['pri_col'] ) : '#663399',
           'overlay_bg_col'     =>  isset($params['overlay_bg_col']) ? $this->calds_sanitize( $params['overlay_bg_col'] ) : 'rgba(0, 0, 0, 0.5)',
           'on_cl_bg_img'       =>  isset($params['on_cl_bg_img']) ? $this->calds_sanitize( $params['on_cl_bg_img'] ) : '',
           'on_cl_bg_img_ovr'   =>  isset($params['on_cl_bg_img_ovr']) && !empty($params['on_cl_bg_img']) ? '.c-inner_cont:before{content: "";position: absolute;top: 0;left: 0;bottom: 0;right: 0;background-color:'.$this->calds_sanitize( $params["on_cl_bg_img_ovr"] ).';' : '',
        );
        
        
        
        $skin = '
            <div class="c-dark_overlay c-skin_1 on_click_el"> <!--skin 1 template-->
                <div class="c-dark_overlay_inner"> <!--dark overlay inner-->
                    <div class="c-cont_container"> <!--main container-->
                    <div class="c-cont_container_inner"> <!--main container inner-->
        ';
        
        $skin .= '
            <div class="c-overlay_close"> <!--overlay close-->
                '.$this->calds_close_icon().'
            </div> <!--overlay close end-->
        ';
                        
        $skin .= '<div class="c-inner_cont"> <!--overlay inner content-->';
        
        $skin .= '<div class="upper_icon"><div class="upper_icon_inner">'.$this->calds_form_icon().'</div></div>';
        
        $skin .= '<div class="c-inner_content">';
        
        if ($default_params['en_dis_el_tit'] != 0) {
           $skin .= '
                <div class="c-inner_cont_h2"> <!--overlay inner content title-->
                    '.$default_params['click_el_tit'].'
                </div> <!--overlay inner content title end-->      
           ';      
        }  
        if ($default_params['en_dis_el_subtit'] != 0) {
           $skin .= '
                <div class="c-inner_cont_h5"> <!--overlay inner content sub title-->
                    '.$default_params['cl_el_subtit'].'
                </div> <!--overlay inner content sub title end-->      
           ';      
        }
        
        $skin .= '<div class="c-inner_cont_data"> <!--overlay inner content data-->';
        
        $skin .= '<form action="" id="calds_front_submission"><!--calds overlay form-->';
        $skin .= wp_nonce_field( 'calds_wp_nonce', 'calds_wp_save_nonce' );
        $skin .= '<div class="c-inner_cont_data_when"> <!--overlay inner content data when-->';      
        if ($default_params['en_dis_el_date'] != 0) {
            $skin .= '
                <div class="c-custom_input_cont">
                    <input type="text" name="c-inner_cont_date" id="datepicker" class="c-inner_cont_date c-custom_input calds_date_picker" placeholder="'.current_time("F d, Y").'" value="'.current_time("F d, Y").'"/>
                    <label class="c-label-input" for="c-inner_cont_date">
                        <span class="c-icon"><i class="demo-icon icon-calendar">&#xe800;</i></span>
                    </label>
                </div>
            ';
        }
        
        if ($default_params['en_dis_el_time'] != 0) {
            $times = $this->calds_time_interval('0:00', '23:50', '10 mins');
            $skin .= '
                <div class="c-inner_cont_time">
                    <div class="c-custom_input_cont c-inner_cont_sel_from">
                        <select name="c-inner_cont_time_from" class="c-inner_cont_time_from c-custom_select">
                        <option value="">'.__("From" , "callleads").'</option>
                   ';
                 foreach($times as $key => $value) {
                    $skin .= '<option value="'.($key + 1).'">'.$value.'</option>';
                 }              
            $skin .= '                  
                        </select>
                        <label class="c-label-input" for="c-inner_cont_time_from">
                            <span class="c-icon"><i class="demo-icon icon-clock">&#xe801;</i></span>
                        </label>
                    </div>
                    <div class="c-custom_input_cont c-inner_cont_sel_to">
                        <select name="c-inner_cont_time_to" class="c-inner_cont_time_to c-custom_select">
                        <option value="">'.__("To" , "callleads").'</option>
                   ';
                 foreach($times as $key => $value) {
                    $skin .= '<option value="'.($key + 1).'">'.$value.'</option>';
                 }              
            $skin .= '                  
                        </select>
                        <label class="c-label-input" for="c-inner_cont_time_to">
                            <span class="c-icon"><i class="demo-icon icon-clock">&#xe801;</i></span>
                        </label>
                    </div>
                </div>
            ';    
        }
        $skin .= '<div class="c-clear_fix"></div></div> <!--overlay inner content data when end-->';
        
        $skin .= '<div class="c-inner_cont_data_info"> <!--overlay inner content data info-->';
        if ($default_params['en_dis_el_name'] != 0) {
            $skin .= '
                <div class="c-custom_input_cont">
                    <input type="text" name="c-inner_cont_name" class="c-inner_cont_name c-custom_input" placeholder="'.__("Name" , "callleads").'" />
                    <label class="c-label-input" for="c-inner_cont_name">
                        <span class="c-icon"><i class="demo-icon icon-user">&#xe802;</i></span>
                    </label>
                </div>
            ';    
        }
        if ($default_params['en_dis_el_email'] != 0) {
            $skin .= '
                <div class="c-custom_input_cont">
                    <input type="text" name="c-inner_cont_email" class="c-inner_cont_email c-custom_input" placeholder="'.__("Email" , "callleads").'" />
                    <label class="c-label-input" for="c-inner_cont_email">
                        <span class="c-icon"><i class="demo-icon icon-mail-alt">&#xf0e0;</i></span>
                    </label>
                </div>
            ';    
        }
        if ($default_params['en_dis_el_phone'] != 0) {
            $skin .= '
                <div class="c-custom_input_cont">
                    <input type="text" name="c-inner_cont_phone" class="c-inner_cont_phone c-custom_input" placeholder="'.__("Phone Number" , "callleads").'" />
                    <label class="c-label-input" for="c-inner_cont_phone">
                        <span class="c-icon"><i class="demo-icon icon-phone-1">&#xe805;</i></span>
                    </label>
                </div>
            ';    
        }
        $skin .= '</div> <!--overlay inner content data info end-->';
        
        if ($default_params['enb_g_captcha'] == 1 && !empty($default_params['g_site_key']) && !empty($default_params['g_secr_key'])) {
            $skin .= '<div class="calds_recaptcha g-recaptcha" data-sitekey="'.$default_params["g_site_key"].'" style="margin-bottom: 10px;    display: inline-block;"></div>';    
        }
        
        $skin .= '
             <div class="c-inner_cont_data_submit">
                <div class="c-inner_cont_submit c-custom_input_cont">
                    <input type="submit" name="c-inner_cont_submit" class="c-custom_input_submit" value="'.$default_params['cl_el_btn_txt'].'" />
                </div>
            </div>
        ';
        $skin .= '</form><!--calds overlay form end-->';
        $skin .= '</div> <!--overlay inner content data end-->';
        
        if ($default_params['en_dis_fotr_txt'] != 0) {
            $skin .= '
                <div class="c-data_assure"><i class="demo-icon icon-lock">&#xe806;</i> '.$default_params['cl_el_fotr_txt'].'</div>
            ';    
        }
        $skin .= '</div>';            
        $skin .= '
            </div> <!--overlay inner content end-->
            </div> <!--main container inner end-->
            </div> <!--main container end-->
            </div> <!--dark overlay inner end-->
        ';
        
        if($default_params['enable_rtl'] == 0) {
            $skin .='
                    <style>
                        .upper_icon_inner {text-align: center;display: block;height: 40px;}
                        .upper_icon img{max-width: 40px;}
                        .upper_icon svg{fill: '.$default_params["pri_col"].';width: 40px;height: 40px;}
                        @font-face { font-family: "fontello"; src: url("'.CALDS_PLUGIN_URL.'assets/font/fontello.eot?49888072"); src: url("'.CALDS_PLUGIN_URL.'assets/font/fontello.eot?49888072#iefix") format("embedded-opentype"), url("'.CALDS_PLUGIN_URL.'assets/font/fontello.woff?49888072") format("woff"), url("'.CALDS_PLUGIN_URL.'assets/font/fontello.ttf?49888072") format("truetype"), url("'.CALDS_PLUGIN_URL.'assets/font/fontello.svg?49888072#fontello") format("svg"); font-weight: normal; font-style: normal; }.demo-icon { font-family: "fontello"; font-style: normal; font-weight: normal; speak: none;display: inline-block; text-decoration: inherit; width: 1em; margin-right: .2em; text-align: center; /* opacity: .8; *//* For safety - reset parent styles, that can break glyph codes*/ font-variant: normal; text-transform: none;/* fix buttons height, for twitter bootstrap */ line-height: 1em;/* Animation center compensation - margins should be symmetric */ /* remove if not needed */ margin-left: .2em;/* You can be more comfortable with increased icons size */ font-size: 90% !important;/* Font smoothing. That was taken from TWBS */ -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;/* Uncomment for 3D effect */ /* text-shadow: 1px 1px 1px rgba(127, 127, 127, 0.3); */ } .demo-icon:before { content: unset !important; } .c-dark_overlay { position: fixed; background: '.$default_params["overlay_bg_col"].'; left: 0; right: 0; top: 0; bottom: 0; width: 100%; height: 100%; overflow-y: scroll; z-index: 9999999; display: none; } .c-dark_overlay_inner { position: absolute; display: table; width: 100%; height: 100%; }.c-overlay_close { top: -12px; right: -12px; cursor: pointer;position: absolute;background: '.$default_params["pri_col"].';z-index: 999;border-radius: 50%;height: 30px;width: 30px;} .c-overlay_close svg {width: 15px;fill: #fff;position: absolute;-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);transform: translateY(-50%);left: 0;right: 0;margin: auto;bottom: 0%;}

                        .c-cont_container { display: table-cell; vertical-align: middle; } .c-cont_container_inner { width: 90%; margin: 50px auto; max-width: 600px;position: relative; } .c-inner_cont_h2 { font-size: 28px; text-align: center; font-family: "Open Sans",sans-serif; color: '.$default_params['pri_col'].'; margin: 15px 0;line-height:24px;} .c-inner_cont_h5 { text-align: center; font-size: 16px; margin-bottom: 20px; font-family: "Open Sans",sans-serif; line-height: 1.4; color: #827e7e; } .c-inner_cont { padding: 30px 20px; background-color: '.$default_params["on_cl_bg_col"].';background-image:url('.$default_params["on_cl_bg_img"].');background-repeat: no-repeat;background-size: cover;background-position: center;position:relative;} .c-inner_cont_data_when { margin-bottom: 30px; position: relative; } .c-custom_input_cont { margin-bottom: 10px; position: relative; } .c-custom_input , .c-custom_select { width: 100%; box-sizing: border-box; height: 45px !important; padding: 0 20px 0 58px !important; font-family: "Open Sans",sans-serif; font-size: 14px !important; color: #43383e; line-height: 1.2 !important;border: 1px solid #dfdfdf !important;background: #fafafa !important;} .c-custom_input:focus , .c-custom_select:focus { border-color: #dfdfdf !important; outline: none !important; border-width: 1px; } .c-label-input { width: 55px; height: 45px; position: absolute; top: 0; left: 0; cursor: pointer; font-size: 18px; color: #999999; display: table; } .c-icon { display: table-cell; vertical-align: middle; text-align: center; } .c-inner_cont_time , .c-inner_cont_sel_from , .c-inner_cont_sel_to { width: 100%; float: none; } @media only screen and (min-width: 800px) { .c-inner_cont_sel_from { width: 48%; float: left; margin-right: 2%; } .c-inner_cont_sel_to { width: 48%; float: left; margin-left: 2%; } }.c-inner_cont_time:after{content: "";clear:both;display:block;} @media only screen and (min-width: 600px) { .c-inner_cont { padding: 20px 40px 30px; } .c-cont_container_inner { width: 80%; } } .c-clear_fix { clear: both; display: block; } .c-custom_input_submit { text-transform: uppercase;font-weight: 600 !important;width: 100%; box-sizing: border-box; height: 55px; padding: 0 20px; font-family: "Open Sans",sans-serif !important; font-size: 14px !important; color: #43383e; line-height: 1.2; border-width: 0; width: 100%; box-sizing: border-box; letter-spacing: 0!important; text-decoration: none!important; cursor: pointer!important; filter: brightness(100%)!important; transition: filter .15s ease-in-out!important; color: #fff!important; line-height: 1.1!important; box-shadow: 0 3px 6px 0 rgba(0,0,0,.16)!important; background-color: '.$default_params["pri_col"].' !important; border-radius: 5px; outline: none; }.c-custom_input_submit:focus{outline: none !important;} .c-data_assure { text-align: center; font-family: "Open Sans",sans-serif; font-size: 12px;line-height: 1.4;color: #929292;} .c-vert_dots { position: absolute; top: 0; display: table; bottom: 0; width: 40px; height: 45px; right: 0px; } .c-vert_dots_inner { display: table-cell; vertical-align: middle; } .c-dot { height: 5px; width: 5px; background-color: rebeccapurple; border-radius: 50%; display: inline-block; }'.$default_params["on_cl_bg_img_ovr"].'.calds_disable_click{pointer-events:none;opacity:0.8;}.calds_success {text-align: center;margin-top: 20px;font-size: 14px;color: #424242;font-family: "Open Sans",sans-serif;}.calds_front_error {border: 1px solid red !important;}
                        .c-custom_select_nt_nw{background: url(http://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/br_down.png) no-repeat right;-webkit-appearance: none;background-position-x: 221px;}
                    </style>
                </div> <!--skin 1 template end-->
            ';
        }else{     
            $skin .= '
            <style>
                .upper_icon_inner {text-align: center;display: block;height: 40px;}
                .upper_icon img{max-width: 40px;}
                .upper_icon svg{fill: '.$default_params["pri_col"].';width: 40px;height: 40px;}
                @font-face { font-family: "fontello"; src: url("'.CALDS_PLUGIN_URL.'assets/font/fontello.eot?49888072"); src: url("'.CALDS_PLUGIN_URL.'assets/font/fontello.eot?49888072#iefix") format("embedded-opentype"), url("'.CALDS_PLUGIN_URL.'assets/font/fontello.woff?49888072") format("woff"), url("'.CALDS_PLUGIN_URL.'assets/font/fontello.ttf?49888072") format("truetype"), url("'.CALDS_PLUGIN_URL.'assets/font/fontello.svg?49888072#fontello") format("svg"); font-weight: normal; font-style: normal; }.demo-icon { font-family: "fontello"; font-style: normal; font-weight: normal; speak: none;display: inline-block; text-decoration: inherit; width: 1em; margin-left: .2em; text-align: center; /* opacity: .8; *//* For safety - reset parent styles, that can break glyph codes*/ font-variant: normal; text-transform: none;/* fix buttons height, for twitter bootstrap */ line-height: 1em;/* Animation center compensation - margins should be symmetric */ /* remove if not needed */ margin-right: .2em;/* You can be more comfortable with increased icons size */ font-size: 90% !important;/* Font smoothing. That was taken from TWBS */ -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;/* Uncomment for 3D effect */ /* text-shadow: 1px 1px 1px rgba(127, 127, 127, 0.3); */ } .demo-icon:before { content: unset !important; } .c-dark_overlay { position: fixed; background: '.$default_params['overlay_bg_col'].'; right: 0; left: 0; top: 0; bottom: 0; width: 100%; height: 100%; overflow-y: scroll; z-index: 9999999; display: none; } .c-dark_overlay_inner { position: absolute; display: table; width: 100%; height: 100%; }.c-overlay_close { top: -12px; left: -12px; cursor: pointer; display: table; position: absolute; padding: 8px;background: '.$default_params['pri_col'].';z-index: 999;border-radius: 50%;height: 30px;width: 30px;} .c-overlay_close svg { width: 15px; fill: #fff; top: 0; display: table-cell; vertical-align: middle;} 

                .c-cont_container { display: table-cell; vertical-align: middle; } .c-cont_container_inner { width: 90%; margin: 50px auto; max-width: 600px;position: relative; } .c-inner_cont_h2 { font-size: 28px; text-align: center; font-family: "Open Sans",sans-serif; color: '.$default_params['pri_col'].'; } .c-inner_cont_h5 { text-align: center; font-size: 16px; margin-bottom: 20px; font-family: "Open Sans",sans-serif; line-height: 1.4; color: #827e7e; } .c-inner_cont { padding: 30px 20px; background-color: '.$default_params['on_cl_bg_col'].';background-image:url('.$default_params['on_cl_bg_img'].');background-repeat: no-repeat;background-size: cover;background-position: center;position:relative;} .c-inner_cont_data_when { margin-bottom: 30px; position: relative; } .c-custom_input_cont { margin-bottom: 10px; position: relative; } .c-custom_input , .c-custom_select {direction: rtl;width: 100%; box-sizing: border-box; height: 45px; padding: 0 58px 0 20px !important; font-family: "Open Sans",sans-serif; font-size: 14px; color: #43383e; line-height: 1.2;border: 1px solid #dfdfdf !important;background: #fafafa !important;} .c-custom_input:focus , .c-custom_select:focus { border-color: #dfdfdf !important; outline: none !important; border-width: 1px; } .c-label-input { width: 55px; height: 45px; position: absolute; top: 0; right: 0; cursor: pointer; font-size: 18px; color: #999999; display: table; } .c-icon { display: table-cell; vertical-align: middle; text-align: center; } .c-inner_cont_time , .c-inner_cont_sel_from , .c-inner_cont_sel_to { width: 100%; float: none; } @media only screen and (min-width: 800px) { .c-inner_cont_sel_from { width: 48%; float: right; margin-left: 2%; } .c-inner_cont_sel_to { width: 48%; float: right; margin-right: 2%; } }.c-inner_cont_time:after{content: "";clear:both;display:block;} @media only screen and (min-width: 600px) { .c-inner_cont { padding: 20px 40px 30px; } .c-cont_container_inner { width: 80%; } } .c-clear_fix { clear: both; display: block; } .c-custom_input_submit { text-transform: uppercase;font-weight: 600 !important;width: 100%; box-sizing: border-box; height: 55px; padding: 0 20px; font-family: "Open Sans",sans-serif !important; font-size: 14px !important; color: #43383e; line-height: 1.2; border-width: 0; width: 100%; box-sizing: border-box; letter-spacing: 0!important; text-decoration: none!important; cursor: pointer!important; filter: brightness(100%)!important; transition: filter .15s ease-in-out!important; color: #fff!important; line-height: 1.1!important; box-shadow: 0 3px 6px 0 rgba(0,0,0,.16)!important; background-color: '.$default_params['pri_col'].' !important; border-radius: 5px; outline: none; }.c-custom_input_submit:focus{outline: none !important;} .c-data_assure { text-align: center; font-family: "Open Sans",sans-serif; font-size: 12px;line-height: 1.4;color: #929292;} .c-vert_dots { position: absolute; top: 0; display: table; bottom: 0; width: 40px; height: 45px; left: 0px; } .c-vert_dots_inner { display: table-cell; vertical-align: middle; } .c-dot { height: 5px; width: 5px; background-color: rebeccapurple; border-radius: 50%; display: inline-block; }'.$default_params['on_cl_bg_img_ovr'].'.calds_disable_click{pointer-events:none;opacity:0.8;}.calds_success {text-align: center;margin-top: 20px;font-size: 14px;color: #424242;font-family: "Open Sans",sans-serif;}.calds_front_error {border: 1px solid red !important;}
                .c-custom_select_nt_nw{background: url(http://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/br_down.png) no-repeat left;-webkit-appearance: none;background-position-x: 221px;}
            </style>
            ';
        }
        
        return $skin;
    }
    
    public function calds_time_interval($start, $end, $interval = '30 mins', $format = '12') {
        $startTime = strtotime($start); 
        $endTime   = strtotime($end);
        $returnTimeFormat = ($format == '12')?'g:i A':'G:i';

        $current   = time(); 
        $addTime   = strtotime('+'.$interval, $current); 
        $diff      = $addTime - $current;

        $times = array(); 
        while ($startTime < $endTime) { 
            $times[] = date($returnTimeFormat, $startTime); 
            $startTime += $diff; 
        } 
        $times[] = date($returnTimeFormat, $startTime); 
        return $times; 
    }
    
    public function calds_add_new_call_lead($data) {
        $post_arg = array (
            'post_author'    =>     1,
            'post_type'      =>     'callleads',
            'post_status'    =>     'publish',
            'meta_input'     =>     array(
                'name'       =>  (isset($data['c-inner_cont_name']) && !empty($data['c-inner_cont_name'])) ? $data['c-inner_cont_name'] : '',
                'email'      =>  (isset($data['c-inner_cont_email']) && !empty($data['c-inner_cont_email'])) ? $data['c-inner_cont_email'] : '',
                'phone'      =>  (isset($data['c-inner_cont_phone']) && !empty($data['c-inner_cont_phone'])) ? $data['c-inner_cont_phone'] : '',
                'call_date'       =>  (isset($data['c-inner_cont_date']) && !empty($data['c-inner_cont_date'])) ? $data['c-inner_cont_date'] : '',
                'time_from'  =>  (isset($data['c-inner_cont_time_from']) && !empty($data['c-inner_cont_time_from'])) ? $data['c-inner_cont_time_from'] : '',
                'time_to'    =>  (isset($data['c-inner_cont_time_to']) && !empty($data['c-inner_cont_time_to'])) ? $data['c-inner_cont_time_to'] : ''
            ),
        );
        
        // Insert new Call Request
        $post_id = wp_insert_post( $post_arg , true );      
        if ( ! is_wp_error( $post_id ) ) {
            return true; 
        }else{
            return false;
        }
    }
    
    public function calds_send_admin_email_notif($data) {
        $calds_u_name = (isset($data['c-inner_cont_name']) && !empty($data['c-inner_cont_name'])) ? $this->calds_sanitize( $data['c-inner_cont_name'] ) : '';
        $calds_u_email = (isset($data['c-inner_cont_email']) && !empty($data['c-inner_cont_email'])) ? sanitize_email( $data['c-inner_cont_email'] ) : '';
        $calds_u_phone = (isset($data['c-inner_cont_phone']) && !empty($data['c-inner_cont_phone'])) ? $this->calds_sanitize( $data['c-inner_cont_phone'] ) : '';
        $calds_u_date = (isset($data['c-inner_cont_date']) && !empty($data['c-inner_cont_date'])) ? $this->calds_sanitize( $data['c-inner_cont_date'] ) : '';
        $calds_u_from = (isset($data['c-inner_cont_time_from']) && !empty($data['c-inner_cont_time_from'])) ? $data['c-inner_cont_time_from'] : '';
        $calds_u_to = (isset($data['c-inner_cont_time_to']) && !empty($data['c-inner_cont_time_to'])) ? $this->calds_sanitize( $data['c-inner_cont_time_to'] ) : '';

        $to = sanitize_email( $data['calds_admin_email'] );
        $from_name = get_bloginfo('name') ? get_bloginfo('name') : 'Wordpress';
        $from_email = get_bloginfo('admin_email') ? get_bloginfo('admin_email') : 'admin@wordpress.com';
        $subject = __('Call Request Notification', 'callleads');
        $headers[] = "From: ".$from_name." <".$from_email.">"."\r\n";
        $headers[] = "Reply-To: ".$from_name." <".$from_email.">"."\r\n";
        $headers[] = "MIME-Version: 1.0"."\r\n";
        $headers[] = "Content-Type: text/html; charset=UTF-8"."\r\n";
        $message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head><body>';
        $message .= '<div><h2>'.__("You have received a new call request, Below are the details of the Lead" , "calds").'.</h2></div>';
        $message .= '<p><b>'.__("Name" , "callleads").':&nbsp;</b>'.$calds_u_name.'</p>';
        $message .= '<p><b>'.__("Email" , "callleads").':&nbsp;</b>'.$calds_u_email. '</p>';
        $message .= '<p><b>'.__("Phone" , "callleads").':&nbsp;</b>'.$calds_u_phone. '</p>';
        $message .= '<p><b>'.__("Date" , "callleads").':&nbsp;</b>'.$calds_u_date. '</p>';
        $message .= '<p><b>'.__("From" , "callleads").':&nbsp;</b>'.$calds_u_from. '</p>';
        $message .= '<p><b>'.__("To" , "callleads").':&nbsp;</b>'.$calds_u_to. '</p>';
        $message .= '</body></html>';
        wp_mail($to, $subject, $message, $headers);    
    }
    
    public function calds_send_admin_sms_notif($data) {
        require_once CALDS_DIRECTORY . '/vendor/autoload.php';
        $calds_u_name = (isset($data['c-inner_cont_name']) && !empty($data['c-inner_cont_name'])) ? $this->calds_sanitize( $data['c-inner_cont_name'] ) : '';
        $calds_u_email = (isset($data['c-inner_cont_email']) && !empty($data['c-inner_cont_email'])) ? sanitize_email( $data['c-inner_cont_email'] ) : '';
        $calds_u_phone = (isset($data['c-inner_cont_phone']) && !empty($data['c-inner_cont_phone'])) ? $this->calds_sanitize( $data['c-inner_cont_phone'] ) : '';
        $calds_u_date = (isset($data['c-inner_cont_date']) && !empty($data['c-inner_cont_date'])) ? $this->calds_sanitize( $data['c-inner_cont_date'] ) : '';
        $calds_u_from = (isset($data['c-inner_cont_time_from']) && !empty($data['c-inner_cont_time_from'])) ? $data['c-inner_cont_time_from'] : '';
        $calds_u_to = (isset($data['c-inner_cont_time_to']) && !empty($data['c-inner_cont_time_to'])) ? $this->calds_sanitize( $data['c-inner_cont_time_to'] ) : '';
        
        $admin_number = sanitize_text_field( $data['admin_number'] );
        $enab_sms_admin = (int) $data['enab_sms_admin'];
        $enab_sms_lead = (int) $data['enab_sms_lead'];
        $twilio_id = sanitize_text_field( $data['twilio_id'] );
        $twilio_token = sanitize_text_field( $data['twilio_token'] );
        $twilio_number = sanitize_text_field( $data['twilio_phn_num'] );


        try {
            $client = new Twilio\Rest\Client($twilio_id, $twilio_token);
            $break = "\r\n";
            if($enab_sms_admin == 1 && !empty($admin_number)) {
                $admin_text = __('You have received a new call request from your website, below are the details of the sender, follow it up as soon as it is th requested time [[linebreak]] Name: [[name]] [[linebreak]] Phone: [[phone]] [[linebreak]] Email: [[email]] [[linebreak]] Date: [[cdate]] [[linebreak]] From: [[cfrom]] [[linebreak]] To: [[cto]] [[linebreak]]', 'callleads');    
                
                $formt_admin_text = str_replace('[[name]]',$calds_u_name,$admin_text);
                $formt_admin_text = str_replace('[[phone]]',$calds_u_phone,$formt_admin_text);
                $formt_admin_text = str_replace('[[email]]',$calds_u_email,$formt_admin_text);
                $formt_admin_text = str_replace('[[cdate]]',$calds_u_date,$formt_admin_text);
                $formt_admin_text = str_replace('[[cfrom]]',$calds_u_from,$formt_admin_text);
                $formt_admin_text = str_replace('[[cto]]',$calds_u_to,$formt_admin_text);
                $formt_admin_text = str_replace('[[linebreak]]',$break,$formt_admin_text);
                $admin_sms = $client->messages->create(
                    $admin_number, 
                    array(
                    'from' => $twilio_number, 
                    'body' => $formt_admin_text
                    )
                );    
            }
            
            if($enab_sms_lead == 1 && !empty($calds_u_phone)) {
                if ( !empty($data['calds_text_area_sms'])) {
                    $lead_text = $data['calds_text_area_sms'];
                }else {
                    $lead_text = __('Hello [[name]], we have received your call request for [[cdate]] From: [[cfrom]] To: [[cto]], once it is time, one of our support team will reach out to you.', 'callleads');    
                }
                
                $formt_lead_text = str_replace('[[name]]',$calds_u_name,$lead_text);
                $formt_lead_text = str_replace('[[phone]]',$calds_u_phone,$formt_lead_text);
                $formt_lead_text = str_replace('[[email]]',$calds_u_email,$formt_lead_text);
                $formt_lead_text = str_replace('[[cdate]]',$calds_u_date,$formt_lead_text);
                $formt_lead_text = str_replace('[[cfrom]]',$calds_u_from,$formt_lead_text);
                $formt_lead_text = str_replace('[[cto]]',$calds_u_to,$formt_lead_text);
                $formt_lead_text = str_replace('[[linebreak]]',$break,$formt_lead_text);
                
                $requester_sms = $client->messages->create(
                    $calds_u_phone, 
                    array(
                    'from' => $twilio_number, 
                    'body' => $formt_lead_text
                    )
                );
                
            }
        }catch (Exception $e) { }     
     
    }
    
    public function calds_datepicker_lang(){
        $lang = __("en" , "callleads");
        return $lang;
    }
    
    public function caldsDatePickerDayNames() {
        $dayNames = array(
            "monday"  => __("Monday" , "callleads"),"tuesday"  => __("Tuesday" , "callleads"),"wednesday"  => __("Wednesday" , "callleads"),"thursday"  => __("Thursday" , "callleads"),"friday"  => __("Friday" , "callleads"),"saturday"  => __("Saturday" , "callleads"),"sunday"  => __("Sunday" , "callleads")
        );
        return $dayNames;
    }
    
    public function caldsDatePickerDayNamesShort() {
        $dayNames = array(
            "monday"  => __("Mon" , "callleads"),"tuesday"  => __("Tue" , "callleads"),"wednesday"  => __("Wed" , "callleads"),"thursday"  => __("Thur" , "callleads"),"friday"  => __("Fri" , "callleads"),"saturday"  => __("Sat" , "callleads"),"sunday"  => __("Sun" , "callleads")
        );
        return $dayNames;
    }
    
    public function caldsDatePickerDayNamesMin() {
        $dayNames = array(
            "monday"  => __("Mo" , "callleads"),"tuesday"  => __("Tu" , "callleads"),"wednesday"  => __("We" , "callleads"),"thursday"  => __("Th" , "callleads"),"friday"  => __("Fr" , "callleads"),"saturday"  => __("Sa" , "callleads"),"sunday"  => __("Su" , "callleads")
        );
        return $dayNames;
    }
    
    public function caldsDatePickerMonthNames() {
        $monthNames = array(
            "january"  => __("January" , "callleads"),"february"  => __("February" , "callleads"),"march"  => __("March" , "callleads"),"april"  => __("April" , "callleads"),"may"  => __("May" , "callleads"),"june"  => __("June" , "callleads"),"july"  => __("July" , "callleads"),"august"  => __("August" , "callleads"),"september"  => __("September" , "callleads"),"october"  => __("October" , "callleads"),"november"  => __("November" , "callleads"),"december"  => __("December" , "callleads")
            );
        return $monthNames;
    }
            
    public function caldsDatePickerMonthNamesShort() {
        $monthNames = array(
            "january"  => __("Jan" , "callleads"),"february"  => __("Feb" , "callleads"),"march"  => __("Mar" , "callleads"),"april"  => __("Apr" , "callleads"),"may"  => __("May" , "callleads"),"june"  => __("Jun" , "callleads"),"july"  => __("Jul" , "callleads"),"august"  => __("Aug" , "callleads"),"september"  => __("Sep" , "callleads"),"october"  => __("Oct" , "callleads"),"november"  => __("Nov" , "callleads"),"december"  => __("Dec" , "callleads")
            );
        return $monthNames;
    }
    
    public function calds_is_rtl() {
        if(is_rtl()) {
            return "true";
        }else{
            return "false";
        }
    }
       
}