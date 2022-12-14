<!doctype html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/12fff43a53.js" crossorigin="anonymous"></script>
    <style>
        .form-control  {
            width: 14rem;
        }
        
        .form-select {
            width: 16rem;
        }

        .btn-outline-primary>i {
            font-size: 200%;
            padding: 0.25rem;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container-fluid">
        <div class="py-5 text-center">
            <h2>Let's get to know each other</h2>
            <p class="lead">To get you insured, we need some details...</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 px-4">
                <form action="api" method="get" style="line-height: 4rem;">
                    <div class="form-group pb-5">
                        <p class="d-inline-flex" style="font-size: 1.5rem">How's it going? My name is </p>
                        <input type="text" id="firstName" name="firstName" class="d-inline-flex form-control form-control-lg" placeholder="" value="" required>
                        <p class="d-inline-flex" style="font-size: 1.5rem">and my last name is </p>
                        <input type="text" id="lastName" name="lastName" class="d-inline-flex form-control form-control-lg" placeholder="" value="" required>
                    </div>
                    <div class="form-group pb-5">
                        <p class="d-inline-flex" style="font-size: 1.5rem">I'm a </p>
                        <select class="d-inline-flex form-select form-select-lg" id="gender" name="gender" required>
                            <option value="" disabled selected>Select your option</option>
                            <option value="Male">male</option>
                            <option value="Female">female</option>
                            <option value="Male">non-binary person</option>
                        </select>
                        <p class="d-inline-flex" style="font-size: 1.5rem">who was born on </p>
                        <input class="d-inline-flex form-control form-control-lg" type="date" id="dob" name="dob">
                        <p class="d-inline-flex" style="font-size: 1.5rem">and I'm currently living in</p>
                        <select class="d-inline-flex form-select form-select-lg" id="state" name="state" required>
                            <option value="" disabled selected>Select your option</option>
                            <option>NSW</option>
                            <option>VIC</option>
                            <option>QLD</option>
                            <option>SA</option>
                            <option>WA</option>
                            <option>TAS</option>
                            <option>NT</option>
                            <option>ACT</option>
                        </select>
                    </div>
                    <div class="form-group pb-5">
                        <p class="d-inline-flex" style="font-size: 1.5rem">My mobile number is </p>
                        <input type="tel" id="phone" class="d-inline-flex form-control form-control-lg" name="phone" placeholder="04--------" pattern="[0-9]{4}[0-9]{3}[0-9]{3}" required>
                        <p class="d-inline-flex" style="font-size: 1.5rem">and my email address is </p>
                        <input class="d-inline-flex form-control form-control-lg" type="email" id="email" placeholder="you@example.com">
                    </div>
                    <div class="form-group pb-5">
                        <p class="d-inline-flex" style="font-size: 1.5rem">I work as a </p>
                        <select class="d-inline-flex form-select form-select-lg" id="occupation" name="clearViewOccupation" required>
                            <option value="" disabled selected>Select your option</option>
                            <option value="2003_17">Abattoir Worker: Butcher - not trade qualified</option>
                            <option value="2002_12">Abattoir Worker: Butcher - trade qualified</option>
                            <option value="2004_13">Abattoir Worker: Supervisor - no manual work</option>
                            <option value="2005_1">Accountant - CPA/CA qualified</option>
                            <option value="2009_5">Accountant - not CPA/CA qualified, average income &lt;$80000</option>
                            <option value="2008_4">Accountant - not CPA/CA qualified, average income &gt;$80000</option>
                            <option value="2007_5">Accounting: Clerk/Bookkeeper - average income &lt;$80000</option>
                            <option value="2006_4">Accounting: Clerk/Bookkeeper - average income &gt;$80000</option>
                            <option value="2010_22">Acrobat - not performing at heights</option>
                            <option value="2011_24">Acrobat - performing at heights with adequate safety precautions</option>
                            <option value="2012_19">Actor</option>
                            <option value="2015_1">Actuary - degree qualified</option>
                            <option value="2014_4">Actuary - not degree qualified, average income &lt;$125000</option>
                            <option value="2013_1">Actuary - not degree qualified, average income &gt;$125000</option>
                            <option value="2016_4">Acupuncturist - member of Australian Acupuncturist Association</option>
                            <option value="2017_19">Acupuncturist - not a member of Australian Acupuncturist Association</option>
                            <option value="2025_5">Advertising Agent - not tertiary qualified, average income &lt;$80000</option>
                            <option value="2024_4">Advertising Agent - not tertiary qualified, average income &gt;$80000</option>
                            <option value="2023_5">Advertising Agent - tertiary qualified</option>
                            <option value="2022_4">Advertising Executive - not tertiary qualified, average income &lt;$125000</option>
                            <option value="2019_5">Advertising Executive - not tertiary qualified, average income &lt;$80000</option>
                            <option value="2021_1">Advertising Executive - not tertiary qualified, average income &gt;$125000</option>
                            <option value="2018_4">Advertising Executive - not tertiary qualified, average income &gt;$80000</option>
                            <option value="2020_1">Advertising Executive - tertiary qualified</option>
                            <option value="2160_5">Adviser/Agent insurance, average income &lt;$80000</option>
                            <option value="2159_4">Adviser/Agent insurance, average income &gt;$80000</option>
                            <option value="2028_16">Aerobics Instructor - full time, minimum 3 years experience</option>
                            <option value="2029_4">Agronomist - field work (&lt;20%, no hazardous chemicals), degree qualified</option>
                            <option value="2031_5">Agronomist - field work (&lt;20%, no hazardous chemicals), not degree qualified, average income &lt;$80000</option>
                            <option value="2030_4">Agronomist - field work (&lt;20%, no hazardous chemicals), not degree qualified, average income &gt;$80000</option>
                            <option value="2032_8">Agronomist - field work (more than 20%, no hazardous chemicals)</option>
                            <option value="2035_1">Air Conditioning: Engineer - degree qualified, consultant, office only</option>
                            <option value="2034_4">Air Conditioning: Engineer - not degree qualified, consultant, office only, average income &lt;$125000</option>
                            <option value="2033_1">Air Conditioning: Engineer - not degree qualified, consultant, office only, average income &gt;$125000</option>
                            <option value="2036_20">Air Conditioning: Qualified Installer/Repairer - over 10 metres</option>
                            <option value="2037_13">Air Conditioning: Qualified Installer/Repairer - up to 10 metres</option>
                            <option value="2038_8">Air Conditioning: Supervisor - qualified</option>
                            <option value="2094_19">Air Traffic Controller</option>
                            <option value="2095_19">Aircraft Engineer - degree qualified, flying</option>
                            <option value="2096_10">Aircraft Engineer - degree qualified, non flying, manual duties</option>
                            <option value="2097_15">Aircraft Maintenance - qualified/skilled</option>
                            <option value="2039_12">Airline Staff of Major Airlines Only: Baggage handlers/porters</option>
                            <option value="2041_5">Airline Staff of Major Airlines Only: Office workers - average income &lt;$80000</option>
                            <option value="2040_4">Airline Staff of Major Airlines Only: Office workers - average income &gt;$80000</option>
                            <option value="2042_19">Airline Staff of Major Airlines Only: Pilot, aircrew, flight attendant</option>
                            <option value="2043_12">Airline Staff of Major Airlines Only: Truck drivers</option>
                            <option value="2044_19">Airline Staff of Minor/Charter Airlines: Baggage handlers/porters</option>
                            <option value="2046_5">Airline Staff of Minor/Charter Airlines: Office workers - average income &lt;$80000</option>
                            <option value="2045_4">Airline Staff of Minor/Charter Airlines: Office workers - average income &gt;$80000</option>
                            <option value="2047_19">Airline Staff of Minor/Charter Airlines: Pilot, aircrew, flight attendant</option>
                            <option value="2048_12">Airline Staff of Minor/Charter Airlines: Truck drivers</option>
                            <option value="2098_12">Airport Industry: Ground staff - cleaner</option>
                            <option value="2101_12">Airport Industry: Ground staff - refuellers</option>
                            <option value="2102_12">Airport Industry: Ground staff - security, unarmed</option>
                            <option value="2100_5">Airport Industry: Management and Administration - office duties only, average income &lt;$80000</option>
                            <option value="2099_4">Airport Industry: Management and Administration - office duties only, average income &gt;$80000</option>
                            <option value="2049_13">Ambulance Officer/Paramedical/Driver</option>
                            <option value="2053_3">Anaesthetist</option>
                            <option value="2026_20">Antenna/Cable TV installer - over 10 metres</option>
                            <option value="2027_12">Antenna/Cable TV installer - up to 10 metres</option>
                            <option value="2054_15">Antique Dealer - deliveries</option>
                            <option value="2055_13">Antique Dealer - Restoration</option>
                            <option value="2056_8">Antique Dealer - sales and office only</option>
                            <option value="2057_17">Apprentice - not in final year</option>
                            <option value="2058_22">Archaeologist - not qualified</option>
                            <option value="2059_15">Archaeologist - qualified, field work, no overseas travel</option>
                            <option value="2060_19">Archaeologist - qualified, field work, with overseas travel</option>
                            <option value="2062_4">Archaeologist - qualified, no field work, no overseas travel - average income &lt;$125000</option>
                            <option value="2061_1">Archaeologist - qualified, no field work, no overseas travel - average income &gt;$125000</option>
                            <option value="2063_5">Archaeologist - qualified, no field work, with overseas travel</option>
                            <option value="2064_1">Archaeologist - qualified, office, no overseas travel</option>
                            <option value="2067_4">Architect - not university qualified, office only, no on site, average income &lt;$125000</option>
                            <option value="2066_1">Architect - not university qualified, office only, no on site, average income &gt;$125000</option>
                            <option value="2065_4">Architect - university qualified, less than 10% on site</option>
                            <option value="2069_6">Architect - university qualified, more than 10% on site</option>
                            <option value="2068_1">Architect - university qualified, office only, no on site</option>
                            <option value="2071_5">Architectural draftperson - average income &lt;$80000</option>
                            <option value="2070_4">Architectural draftperson - average income &gt;$80000</option>
                            <option value="2072_22">Armed Services: All ranks - office duties only, no notice of deployment</option>
                            <option value="2073_22">Armed Services: All ranks - other than office duties</option>
                            <option value="2075_5">Art Dealer/Proprietor - average income &lt;$80000</option>
                            <option value="2074_4">Art Dealer/Proprietor - average income &gt;$80000</option>
                            <option value="2076_8">Artist/Painter - employed, commercial, qualified, office only, no set production work</option>
                            <option value="2077_19">Artist/Painter - freelance, commercial, qualified, office only, no set production work</option>
                            <option value="2078_22">Asbestos Worker</option>
                            <option value="2079_16">Asphalt Layer</option>
                            <option value="2080_19">Assembly Line Worker</option>
                            <option value="2081_1">Astronomer - fully qualified</option>
                            <option value="2083_10">Auctioneer - livestock</option>
                            <option value="2085_5">Auctioneer - not livestock, average income &lt;$80000</option>
                            <option value="2084_4">Auctioneer - not livestock, average income &gt;$80000</option>
                            <option value="2088_1">Audiologist - degree qualified</option>
                            <option value="2086_4">Audiologist - not degree qualified, average income &lt;$125000</option>
                            <option value="2087_1">Audiologist - not degree qualified, average income &gt;$125000</option>
                            <option value="2091_1">Auditor - degree qualified</option>
                            <option value="2090_5">Auditor - not degree qualified, average income &lt;$80000</option>
                            <option value="2089_4">Auditor - not degree qualified, average income &gt;$80000</option>
                            <option value="2092_19">Author/Writer</option>
                            <option value="2093_10">Auto-Electrician</option>
                            <option value="2103_10">Awning/Blind/Screen Installer - installer</option>
                            <option value="2104_6">Awning/Blind/Screen Installer - sales and quoting only</option>
                            <option value="2105_8">Awning/Blind/Screen Installer - supervisor, less than 10% manual work</option>
                            <option value="2106_19">Bailiff - armed</option>
                            <option value="2107_13">Bailiff - unarmed</option>
                            <option value="2108_8">Baker - counter work only</option>
                            <option value="2109_10">Baker - trade qualified</option>
                            <option value="2110_15">Baker - unqualified, minimum 3 years experience</option>
                            <option value="2112_5">Bank Manager - average income &lt;$80000</option>
                            <option value="2111_4">Bank Manager - average income &gt;$80000</option>
                            <option value="2114_5">Bank Officer - average income &lt;$80000</option>
                            <option value="2113_4">Bank Officer - average income &gt;$80000</option>
                            <option value="2116_1">Bank Senior Manager - not university degree qualified, average income &gt;$125000</option>
                            <option value="2115_1">Bank Senior Manager - university degree qualified</option>
                            <option value="2117_4">Bank Senior Manager - university degree qualified, average income &lt;$125000</option>
                            <option value="2118_16">Bar Attendant</option>
                            <option value="2119_10">Bar Manager - less than 10% bar work</option>
                            <option value="2120_15">Bar Manager - less than 40% bar work</option>
                            <option value="2121_16">Bar Manager - more than 40% bar work</option>
                            <option value="2122_8">Barber/Hairdresser - qualified</option>
                            <option value="2123_19">Barber/Hairdresser - unqualified</option>
                            <option value="2124_2">Barrister/Solicitor</option>
                            <option value="2125_10">Battery Fitter/Repairer - qualified</option>
                            <option value="2126_12">Battery Fitter/Repairer - unqualified, minimum 3 years experience</option>
                            <option value="2127_16">Beach Inspector - permanent, fulltime, minimum 2 years experience</option>
                            <option value="2128_8">Beautician - qualified</option>
                            <option value="2129_19">Beautician - unqualified</option>
                            <option value="2130_15">Beekeeper/Apiarist</option>
                            <option value="2131_1">Biochemist</option>
                            <option value="2132_22">Biologist: Marine - field work, diving more than 40m and/or field work more than 20% of total duties</option>
                            <option value="2133_15">Biologist: Marine - field work, diving up to 40m and less than 20% of total duties</option>
                            <option value="2134_1">Biologist: Marine - no field work</option>
                            <option value="2135_1">Biologist: Not marine</option>
                            <option value="2136_19">Blacksmith/Farrier - less than 3 years experience</option>
                            <option value="2137_12">Blacksmith/Farrier - minimum 3 years experience</option>
                            <option value="2138_20">Blaster/Explosives Handler</option>
                            <option value="2139_17">Boarding House Proprietor</option>
                            <option value="2140_10">Boat Builder - qualified</option>
                            <option value="2141_15">Boat Builder - unqualified, minimum 3 years experience</option>
                            <option value="2142_16">Boat Operator - charter - deep sea</option>
                            <option value="2143_15">Boat Operator - charter - harbour and inlets</option>
                            <option value="2144_17">Body Piercer</option>
                            <option value="2145_13">Boilermaker - qualified</option>
                            <option value="2146_16">Boilermaker - unqualified, minimum 3 years experience</option>
                            <option value="2148_5">Bookkeeper - average income &lt;$80000</option>
                            <option value="2147_4">Bookkeeper - average income &gt;$80000</option>
                            <option value="2149_19">Bookmaker/Betting</option>
                            <option value="2153_5">Botanist - average income &lt;$80000</option>
                            <option value="2152_4">Botanist - average income &gt;$80000</option>
                            <option value="2154_22">Bouncer/Crowd control</option>
                            <option value="2155_22">Boxer - professional</option>
                            <option value="2156_13">Bricklayer - qualified</option>
                            <option value="2157_16">Bricklayer - unqualified, minimum 3 years experience</option>
                            <option value="2158_15">Brickpaver</option>
                            <option value="2161_8">Builder - foreman, less than 20% light manual duties</option>
                            <option value="2162_17">Builder - labourer</option>
                            <option value="2163_10">Builder - licensed, fully qualified</option>
                            <option value="2164_15">Builder - unqualified, minimum 3 years experience</option>
                            <option value="2166_5">Business Consultant - average income &lt;$80000</option>
                            <option value="2165_4">Business Consultant - average income &gt;$80000</option>
                            <option value="2167_10">Butcher - retail, trade qualified</option>
                            <option value="2168_16">Butcher - retail, unqualified, minimum 3 years experience</option>
                            <option value="2169_17">Butcher - slaughterman</option>
                            <option value="2170_8">Butler - qualified</option>
                            <option value="2171_15">Butler - unqualified, minimum 3 years experience</option>
                            <option value="2173_5">Buyer - retail store, office only, average income &lt;$80000</option>
                            <option value="2172_4">Buyer - retail store, office only, average income &gt;$80000</option>
                            <option value="2174_8">Buyer - retail store, other than office only</option>
                            <option value="2175_10">Cabinet Maker - trade qualified</option>
                            <option value="2176_17">Cabinet Maker - unqualified, less than 3 years experience</option>
                            <option value="2177_15">Cabinet Maker - unqualified, minimum 3 years experience</option>
                            <option value="2178_16">Cable Maker/Wire Maker</option>
                            <option value="2179_15">Cafe/Coffee Lounge: Kitchen hand</option>
                            <option value="2180_8">Cafe/Coffee Lounge: Proprietor - less than 20% light manual work</option>
                            <option value="2181_10">Cafe/Coffee Lounge: Proprietor - more than 20% light manual work</option>
                            <option value="2182_15">Cafe/Coffee Lounge: Waiter/Waitress</option>
                            <option value="2184_17">Cake Decorator - less than 3 years experience, full time</option>
                            <option value="2183_10">Cake Decorator - minimum 3 years experience, full time</option>
                            <option value="2187_21">Cameraman - aerial (commercial pilot)</option>
                            <option value="2185_10">Cameraman - film and television, employed, Australia only</option>
                            <option value="2186_15">Cameraman - film and television, freelance, Australia only</option>
                            <option value="2188_17">Cane Farm Labourer/Worker/Harvester</option>
                            <option value="2189_12">Cane Farmer Owner/Manager</option>
                            <option value="2190_8">Canteen Manager - less than 20% light manual work</option>
                            <option value="2191_10">Canteen Manager - more than 20% light manual work</option>
                            <option value="2192_12">Canteen Work - not manager</option>
                            <option value="2194_5">Car Dealership Owner - office only, average income &lt;$80000</option>
                            <option value="2193_4">Car Dealership Owner - office only, average income &gt;$80000</option>
                            <option value="2195_19">Car Detailer - less than 3 years in occupation</option>
                            <option value="2196_12">Car Detailer - minimum 3 years in occupation</option>
                            <option value="2197_5">Car Salesperson - office only, not dealership owner</option>
                            <option value="2198_8">Car Salesperson - yard sales, minimum 2 years experience</option>
                            <option value="2199_16">Car Wrecker</option>
                            <option value="2200_12">Car Wrecker - foreman, no manual work</option>
                            <option value="2201_13">Caravan Park Owner</option>
                            <option value="2202_17">Caravan Park Worker/Employee</option>
                            <option value="2203_16">Carer - Support worker/carer/ disability worker</option>
                            <option value="2204_19">Caretaker - living on premises</option>
                            <option value="2205_12">Caretaker - not living on premises</option>
                            <option value="2209_8">Carpenter - foreman, less than 20% light manual work</option>
                            <option value="2206_10">Carpenter - trade qualified</option>
                            <option value="2207_17">Carpenter - unqualified, less than 3 years experience</option>
                            <option value="2208_15">Carpenter - unqualified, minimum 3 years experience</option>
                            <option value="2210_15">Carpet Cleaner</option>
                            <option value="2211_15">Carpet/Linoleum Layer</option>
                            <option value="2212_8">Cartographer - field work</option>
                            <option value="2214_5">Cartographer - no field work, average income &lt;$80000</option>
                            <option value="2213_4">Cartographer - no field work, average income &gt;$80000</option>
                            <option value="2218_12">Carver - wood, minimum 3 years experience</option>
                            <option value="2219_16">Casino Employee: Bar Attendant</option>
                            <option value="2220_8">Casino Employee: Cashier</option>
                            <option value="2221_12">Casino Employee: Cleaner / maintenance</option>
                            <option value="2222_11">Casino Employee: Croupier</option>
                            <option value="2224_5">Casino Employee: Management/clerical only - average income &lt;$80000</option>
                            <option value="2223_4">Casino Employee: Management/clerical only - average income &gt;$80000</option>
                            <option value="2225_19">Casino Employee: Security</option>
                            <option value="2226_8">Casino Employee: Supervisor</option>
                            <option value="2227_10">Caterer - qualified, minimum 3 years experience</option>
                            <option value="2228_15">Caterer - unqualified, minimum 3 years experience</option>
                            <option value="2232_19">Cellarman</option>
                            <option value="2233_8">Chauffeur</option>
                            <option value="2234_10">Chef/Cook - qualified</option>
                            <option value="2235_15">Chef/Cook - unqualified</option>
                            <option value="2236_22">Chemist - industrial, hazardous</option>
                            <option value="2237_8">Chemist - industrial, lab assistant</option>
                            <option value="2239_6">Chemist - Industrial, lab technician, qualified, involving some light manual work</option>
                            <option value="2238_5">Chemist - industrial, lab technician, qualified, sedentary only, no manual work</option>
                            <option value="2241_6">Chemist - industrial, non-hazardous, involving some light manual work</option>
                            <option value="2240_5">Chemist - industrial, non-hazardous, sedentary only, no manual work</option>
                            <option value="2242_1">Chemist - retail pharmacist</option>
                            <option value="2243_6">Chemist - retail shop assistant</option>
                            <option value="2246_10">Childcare - qualified and registered, not at home</option>
                            <option value="2247_13">Childcare - unqualified, not at home</option>
                            <option value="2248_19">Childcare - working from home</option>
                            <option value="2244_8">Childcare Proprietor - less than 20% manual work</option>
                            <option value="2245_10">Childcare Proprietor - more than 20% manual work</option>
                            <option value="2250_4">Chiropodist/Podiatrist - qualified and registered, less than 3 years experience</option>
                            <option value="2251_4">Chiropodist/Podiatrist - qualified and registered, minimum 3 years experience</option>
                            <option value="2252_4">Chiropractor - qualified and registered</option>
                            <option value="2253_19">Choreographer</option>
                            <option value="2255_5">Claims/Loss Adjustor - average income &lt;$80000</option>
                            <option value="2254_4">Claims/Loss Adjustor - average income &gt;$80000</option>
                            <option value="2256_17">Cleaner - brick</option>
                            <option value="2257_15">Cleaner - carpet</option>
                            <option value="2258_15">Cleaner - domestic</option>
                            <option value="2259_15">Cleaner - mobile car, established minimum 3 years</option>
                            <option value="2260_15">Cleaner - office, industrial, school</option>
                            <option value="2261_15">Cleaner - proprietor</option>
                            <option value="2262_19">Cleaner - street</option>
                            <option value="2263_22">Cleaner - window, hazards, abseiling from building</option>
                            <option value="2264_17">Cleaner - window, home or shops, less than 10 metres</option>
                            <option value="2265_22">Cleaner - window, outdoors, more than 10 metres</option>
                            <option value="2267_6">Clergy - sole occupation, involving some light manual work</option>
                            <option value="2266_5">Clergy - sole occupation, sedentary only, no manual work</option>
                            <option value="2269_5">Clerical - office/administration only, average income &lt;$80000</option>
                            <option value="2268_4">Clerical - office/administration only, average income &gt;$80000</option>
                            <option value="2272_6">Clothing Industry: Clothing/Fashion Designer - qualified, involving some light manual work</option>
                            <option value="2271_5">Clothing Industry: Clothing/Fashion Designer - qualified, sedentary only, no manual work</option>
                            <option value="2274_15">Clothing Industry: Clothing/Fashion Designer - unqualified</option>
                            <option value="2275_8">Clothing Industry: Dressmaker - trade qualified</option>
                            <option value="2278_5">Clothing Industry: Management and administration - no manual work, average income &lt;$80000</option>
                            <option value="2277_4">Clothing Industry: Management and administration - no manual work, average income &gt;$80000</option>
                            <option value="2279_8">Clothing Industry: Pattern Maker - trade qualified</option>
                            <option value="2281_8">Clothing Industry: Tailor - trade qualified</option>
                            <option value="2284_11">Coach (sports) - Employed by the Australian Institute of Sport</option>
                            <option value="2285_19">Coach (sports) - Other than swimming or tennis</option>
                            <option value="2286_11">Coach (sports) - Swimming, full time, with multiple clients/squads</option>
                            <option value="2287_11">Coach (sports) - Tennis, full time, with multiple clients/squads</option>
                            <option value="2288_15">Coach Builder - qualified</option>
                            <option value="2289_19">Coach Builder - unqualified</option>
                            <option value="2290_12">Commentator - radio / television - minimum 5 years experience</option>
                            <option value="2298_4">Computer Industry: Analyst/Programmer/Consultant - not university qualified, average income &lt;$125000</option>
                            <option value="2295_5">Computer Industry: Analyst/Programmer/Consultant - not university qualified, average income &lt;$80000</option>
                            <option value="2297_1">Computer Industry: Analyst/Programmer/Consultant - not university qualified, average income &gt;$125000</option>
                            <option value="2294_4">Computer Industry: Analyst/Programmer/Consultant - not university qualified, average income &gt;$80000</option>
                            <option value="2296_1">Computer Industry: Analyst/Programmer/Consultant - university qualified</option>
                            <option value="2299_8">Computer Industry: Maintenance Engineer</option>
                            <option value="2301_5">Computer Industry: Sales - average income &lt;$80000</option>
                            <option value="2300_4">Computer Industry: Sales - average income &gt;$80000</option>
                            <option value="2302_8">Computer Industry: Technician - manual</option>
                            <option value="2304_5">Computer Industry: Technician - no manual, average income &lt;$80000</option>
                            <option value="2303_4">Computer Industry: Technician - no manual, average income &gt;$80000</option>
                            <option value="2306_5">Computer Operator - average income &lt;$80000</option>
                            <option value="2305_4">Computer Operator - average income &gt;$80000</option>
                            <option value="2307_16">Concrete Contractor</option>
                            <option value="2308_16">Concrete Form Worker - up to 10 meters</option>
                            <option value="2309_16">Concrete Steel Fixer - up to 10 meters</option>
                            <option value="2310_16">Concrete Worker: Concretor</option>
                            <option value="2311_16">Concrete Worker: Concretor/Finisher/Stamper - no concreting or formwork</option>
                            <option value="2312_10">Control Panel Operator - less than 20% manual work</option>
                            <option value="2313_12">Control Panel Operator - more than 20% manual work</option>
                            <option value="2314_5">Control Panel Operator - no manual work</option>
                            <option value="2315_2">Conveyancer</option>
                            <option value="2316_3">Coroner</option>
                            <option value="2317_17">Crane Labourer or Hooker On</option>
                            <option value="2318_19">Crane Operator/Derrickman - offshore</option>
                            <option value="2319_16">Crane Operator/Derrickman - onshore</option>
                            <option value="2320_12">Cray Fishermen: Skipper only - less than 10% manual work</option>
                            <option value="2321_22">Cray Fishermen: Skipper only - more than 10% manual work</option>
                            <option value="2322_13">Crematorium/Cemetery Worker - not grave digger</option>
                            <option value="2324_5">Curator (museum, art gallery, library) - average income &lt;$80000</option>
                            <option value="2323_4">Curator (museum, art gallery, library) - average income &gt;$80000</option>
                            <option value="2325_10">Curtain/Blind Installer</option>
                            <option value="2327_5">Customs Agent/Officer - clerical/office only, average income &lt;$80000</option>
                            <option value="2326_4">Customs Agent/Officer - clerical/office only, average income &gt;$80000</option>
                            <option value="2328_8">Customs Agent/Officer - investigations/offsite</option>
                            <option value="2329_15">Dairy Industry: Farmer/Proprietor</option>
                            <option value="2330_15">Dairy Industry: Milk delivery - local rounds</option>
                            <option value="2331_16">Dairy Industry: Process worker</option>
                            <option value="2332_19">Dancer</option>
                            <option value="2333_11">Dancing Instructor - full time</option>
                            <option value="2337_19">Debt Collector - field work</option>
                            <option value="2338_5">Debt Collector - office only</option>
                            <option value="2339_20">Decorator/Designer: Decorator exterior - over 10 metres</option>
                            <option value="2340_13">Decorator/Designer: Decorator exterior - up to 10 metres, qualified</option>
                            <option value="2342_5">Decorator/Designer: Interior Designer - no manual work, qualified, average income &lt;$80000</option>
                            <option value="2341_4">Decorator/Designer: Interior Designer - no manual work, qualified, average income &gt;$80000</option>
                            <option value="2343_4">Decorator/Designer: Interior Designer - no manual work, unqualified, min 3 years exp income &gt;$80000</option>
                            <option value="2344_5">Decorator/Designer: Interior Designer - no manual work, unqualified, min 3 years exp, income &lt;$80000</option>
                            <option value="2345_19">Decorator/Designer: Interior Designer - unqualified, &lt;3 years experience and/or &gt; 20% manual work</option>
                            <option value="2346_8">Decorator/Designer: Interior Designer - unqualified, minimum 3 years experience, &lt; 20% manual work</option>
                            <option value="2347_8">Delicatessen: Proprietor</option>
                            <option value="2348_10">Delicatessen: Shop Assistant</option>
                            <option value="2349_15">Delivery Person: Grocery, milk</option>
                            <option value="2350_15">Delivery Person: Whitegoods, furniture etc</option>
                            <option value="2351_12">Demolition supervisor - no explosives</option>
                            <option value="2352_19">Demolition Worker - no explosives</option>
                            <option value="2353_6">Dental Worker: Dental Hygienist</option>
                            <option value="2354_8">Dental Worker: Dental Nurse</option>
                            <option value="2355_6">Dental Worker: Dental Prosthetist/Technician</option>
                            <option value="2356_5">Dental Worker: Dental Receptionist - no dental work</option>
                            <option value="2357_3">Dental Worker: Dentist/Surgeon/Periodontist</option>
                            <option value="2358_19">Dental Worker: Student - with dental work</option>
                            <option value="2359_12">Department Store: Cleaner</option>
                            <option value="2360_15">Department Store: Deliveries</option>
                            <option value="2361_19">Department Store: Detective/Security</option>
                            <option value="2362_8">Department Store: Sales - lifting, no deliveries</option>
                            <option value="2363_6">Department Store: Sales - no lifting, no deliveries</option>
                            <option value="2364_3">Dermatologist</option>
                            <option value="2365_19">Detective</option>
                            <option value="2366_8">Diamond Cutter/Polisher/Setter - qualified</option>
                            <option value="2367_11">Diamond Cutter/Polisher/Setter - unqualified, minimum 3 years experience</option>
                            <option value="2368_8">Die Maker - qualified</option>
                            <option value="2369_11">Die Maker - unqualified, minimum 3 years experience</option>
                            <option value="2370_13">Diesel Mechanic - qualified</option>
                            <option value="2371_16">Diesel Mechanic - unqualified, minimum 3 years experience</option>
                            <option value="2372_19">Disc Jockey</option>
                            <option value="2373_16">Distillery Worker</option>
                            <option value="2374_24">Diver - other, qualified</option>
                            <option value="2375_19">Dock worker</option>
                            <option value="2376_3">Doctor of Medicine</option>
                            <option value="2377_19">Dog Breeder - no racing involvement</option>
                            <option value="2379_19">Dog Groomer: owner - less than 3 years experience</option>
                            <option value="2378_12">Dog Groomer: owner - minimum 3 years</option>
                            <option value="2380_20">Dogman/Steeplejack</option>
                            <option value="2381_12">Doorman: hotel/shop</option>
                            <option value="2383_5">Draftsperson - average income &lt;$80000</option>
                            <option value="2382_4">Draftsperson - average income &gt;$80000</option>
                            <option value="2384_8">Draper</option>
                            <option value="2385_15">Dredger - harbour or river</option>
                            <option value="2386_17">Driller: water, oil, minerals, quarry - offshore</option>
                            <option value="2387_17">Driller: water, oil, minerals, quarry - onshore</option>
                            <option value="2389_16">Driver: Armoured car</option>
                            <option value="2390_15">Driver: Bakery Van</option>
                            <option value="2391_19">Driver: Bicycle, motorbike (including courier)</option>
                            <option value="2393_15">Driver: Bread Carter/Vendor</option>
                            <option value="2394_15">Driver: Bus driver - local</option>
                            <option value="2395_12">Driver: Bus/coach driver - long distance, less than 750km per day, daily return</option>
                            <option value="2396_16">Driver: Bus/coach driver - long distance/interstate</option>
                            <option value="2397_15">Driver: Car - courier</option>
                            <option value="2388_15">Driver: Concrete mixer</option>
                            <option value="2398_8">Driver: Driving Instructor - minimum 2 years experience</option>
                            <option value="2399_8">Driver: Driving test examiner</option>
                            <option value="2400_12">Driver: Fork lift driver</option>
                            <option value="2401_20">Driver: Hazardous Goods (explosives, toxic chemicals)</option>
                            <option value="2402_16">Driver: Logging Driver</option>
                            <option value="2403_12">Driver: Milkman/Vendor</option>
                            <option value="2404_20">Driver: Petrol Truck driver</option>
                            <option value="2405_17">Driver: Removalist Driver</option>
                            <option value="2406_15">Driver: Taxi driver - full time owner driver</option>
                            <option value="2407_17">Driver: Taxi driver - not owner and full time</option>
                            <option value="2408_17">Driver: Tow Truck Driver</option>
                            <option value="2409_15">Driver: Truck Driver - less than 100km radius from base, local deliveries, no loading or unloading</option>
                            <option value="2410_17">Driver: Truck Driver - more than 100km radius from base, minimum 2 yrs experience, regular contracts</option>
                            <option value="2411_10">Dry Cleaner: Employee - not proprietor</option>
                            <option value="2412_8">Dry Cleaner: Proprietor</option>
                            <option value="2413_11">Earthmover: Bobcat/Bulldozer/backhoe use. Min 3 yrs experience, less than 20% manual work/driving</option>
                            <option value="2414_15">Earthmover: Bobcat/Bulldozer/backhoe use. Min 3 yrs experience, less than 40% manual work/driving</option>
                            <option value="2415_17">Earthmover: Bobcat/Bulldozer/backhoe use. Min 3 yrs experience, more than 40% manual work/driving</option>
                            <option value="2417_5">Editor - average income &lt;$80000</option>
                            <option value="2416_4">Editor - average income &gt;$80000</option>
                            <option value="2418_15">Electrical inspector - working at heights</option>
                            <option value="2419_10">Electrician: Building and construction - licensed</option>
                            <option value="2420_10">Electrician: Domestic - licensed</option>
                            <option value="2421_10">Electrician: Engineer - qualified, onshore</option>
                            <option value="2422_15">Electrician: Linesman</option>
                            <option value="2423_13">Electrician: Power stations - high voltage</option>
                            <option value="2424_10">Electrician: Power stations - low voltage</option>
                            <option value="2425_8">Electroplater - qualified</option>
                            <option value="2426_10">Electroplater - unqualified, minimum 3 years experience</option>
                            <option value="2427_13">Elevator Mechanic/Installer - trade qualified</option>
                            <option value="2428_17">Elevator Mechanic/Installer - unqualified, minimum 3 years experience</option>
                            <option value="2430_5">Employment Consultant - average income &lt;$80000</option>
                            <option value="2429_4">Employment Consultant - average income &gt;$80000</option>
                            <option value="2431_8">Enameller - qualified</option>
                            <option value="2432_12">Enameller - unqualified, minimum 3 years experience</option>
                            <option value="2433_3">Endodontist</option>
                            <option value="2434_5">Engineer - university qualified offshore, office only</option>
                            <option value="2435_8">Engineer - university qualified, manual work, less than 20% light manual</option>
                            <option value="2436_10">Engineer - university qualified, manual work, more than 20% light manual</option>
                            <option value="2438_1">Engineer - university qualified, office/consulting only, office only, no on site</option>
                            <option value="2437_4">Engineer - university qualified, office/consulting only, up to 10% on site</option>
                            <option value="2439_10">Engineer - university qualified, offshore, other</option>
                            <option value="2441_5">Engineer - university qualified, supervising on site, average income &lt;$80000</option>
                            <option value="2440_4">Engineer - university qualified, supervising on site, average income &gt;$80000</option>
                            <option value="2442_10">Engineer - university qualified, underground, no explosives</option>
                            <option value="2443_20">Engineer - university qualified, underground, using explosives</option>
                            <option value="2444_20">Explosives Maker</option>
                            <option value="2445_8">Exporter/Importer - handling goods less than 20%</option>
                            <option value="2446_19">Exporter/Importer - handling goods more than 20%</option>
                            <option value="2448_5">Exporter/Importer - not handling goods, clerical only, average income &lt;$80000</option>
                            <option value="2447_4">Exporter/Importer - not handling goods, clerical only, average income &gt;$80000</option>
                            <option value="2449_16">Factory Worker</option>
                            <option value="2450_17">Farm Labourer/Employee - permanent employee</option>
                            <option value="2451_15">Farming Industry: Proprietor/Owner/Manager: Beef Cattle</option>
                            <option value="2452_15">Farming Industry: Proprietor/Owner/Manager: Dairy</option>
                            <option value="2453_15">Farming Industry: Proprietor/Owner/Manager: Farmer/Grazier owner</option>
                            <option value="2454_12">Farming Industry: Proprietor/Owner/Manager: Fruit/vegetables grower/orchardist</option>
                            <option value="2455_12">Farming Industry: Proprietor/Owner/Manager: Grain/Wheat</option>
                            <option value="2456_12">Farming Industry: Proprietor/Owner/Manager: Grape grower</option>
                            <option value="2457_12">Farming Industry: Proprietor/Owner/Manager: Mixed farming</option>
                            <option value="2458_12">Farming Industry: Proprietor/Owner/Manager: Orchardist - qualified</option>
                            <option value="2459_19">Farming Industry: Proprietor/Owner/Manager: Oyster - not offshore</option>
                            <option value="2460_23">Farming Industry: Proprietor/Owner/Manager: Oyster - offshore</option>
                            <option value="2461_15">Farming Industry: Proprietor/Owner/Manager: Poultry/Pig</option>
                            <option value="2462_12">Farming Industry: Proprietor/Owner/Manager: Sugarcane</option>
                            <option value="2463_19">Farrier/Blacksmith - less than 3 years experience</option>
                            <option value="2464_12">Farrier/Blacksmith - minimum 3 years experience</option>
                            <option value="2465_15">Fast Food/Takeaway: Employee</option>
                            <option value="2466_10">Fast Food/Takeaway: Owner/Manager</option>
                            <option value="2467_16">Fencing Contractor: Agricultural/rural</option>
                            <option value="2468_15">Fencing Contractor: Domestic/suburban</option>
                            <option value="2469_15">Ferry/Harbour Pilot</option>
                            <option value="2470_15">Fibre Glass Moulder</option>
                            <option value="2471_21">Film Industry: Non-studio - Cameraman (aerial - with commercial pilot)</option>
                            <option value="2472_10">Film Industry: Non-studio - Cameraman, employee (on location - Australia only)</option>
                            <option value="2473_15">Film Industry: Non-studio - Cameraman, freelance (on location - Australia only)</option>
                            <option value="2474_6">Film Industry: Non-studio - Director</option>
                            <option value="2475_8">Film Industry: Non-studio - Editor</option>
                            <option value="2476_8">Film Industry: Non-studio - Engineer</option>
                            <option value="2477_4">Film Industry: Non-studio - Producer</option>
                            <option value="2478_13">Film Industry: Non-studio - Sound, lighting, electrical</option>
                            <option value="2479_10">Film Industry: Studio only - Cameraman, employed</option>
                            <option value="2480_15">Film Industry: Studio only - Cameraman, freelance</option>
                            <option value="2481_8">Film Industry: Studio only - Director</option>
                            <option value="2483_5">Film Industry: Studio only - Editor, average income &lt;$80000</option>
                            <option value="2482_4">Film Industry: Studio only - Editor, average income &gt;$80000</option>
                            <option value="2484_12">Film Industry: Studio only - Engineer (heights)</option>
                            <option value="2485_8">Film Industry: Studio only - Engineer (no heights)</option>
                            <option value="2486_12">Film Industry: Studio only - Lighting (heights)</option>
                            <option value="2487_8">Film Industry: Studio only - Lighting (no heights)</option>
                            <option value="2489_5">Film Industry: Studio only - Producer, average income &lt;$80000</option>
                            <option value="2488_4">Film Industry: Studio only - Producer, average income &gt;$80000</option>
                            <option value="2490_8">Film Industry: Studio only - Sound</option>
                            <option value="2491_4">Financial Adviser/Planner/Consultant</option>
                            <option value="2492_8">Firefighter: Chief firefighter/station officer - Admin only</option>
                            <option value="2493_17">Firefighter: Fireman - not senior officer</option>
                            <option value="2494_22">Fisherman: Captain - manual work, estuaries and freshwater</option>
                            <option value="2495_24">Fisherman: Captain - manual work, offshore</option>
                            <option value="2496_12">Fisherman: Captain - no manual work, estuaries and freshwater</option>
                            <option value="2497_24">Fisherman: Captain - no manual work, offshore</option>
                            <option value="2498_22">Fisherman: Estuaries and freshwater</option>
                            <option value="2499_24">Fisherman: Offshore</option>
                            <option value="2500_13">Fishmonger</option>
                            <option value="2502_5">Fitness Centre: Administration only - average income &lt;$80000</option>
                            <option value="2501_4">Fitness Centre: Administration only - average income &gt;$80000</option>
                            <option value="2503_16">Fitness Centre: Instructors/Personal Trainer</option>
                            <option value="2504_9">Fitness Centre: Manager - less than 10% classes</option>
                            <option value="2505_10">Fitter and Turner - trade qualified</option>
                            <option value="2506_16">Fitter and Turner - unqualified, minimum 3 years experience</option>
                            <option value="2507_12">Floor Coverer/Layer</option>
                            <option value="2508_12">Floor Sander</option>
                            <option value="2509_17">Floor/Wall Tiler - not qualified, minimum 3 years experience</option>
                            <option value="2510_13">Floor/Wall Tiler - trade qualified, no roof tiling or paving</option>
                            <option value="2511_15">Florist: Deliveries</option>
                            <option value="2512_8">Florist: Sales</option>
                            <option value="2513_6">Florist: Shop proprietor - no deliveries, less than 10% manual work</option>
                            <option value="2514_8">Florist: Shop proprietor - no deliveries, more than 10% manual work</option>
                            <option value="2516_5">Food Technologist - average income &lt;$80000</option>
                            <option value="2515_4">Food Technologist - average income &gt;$80000</option>
                            <option value="2517_19">Footballer - professional</option>
                            <option value="2518_13">Forest Ranger - trade qualified</option>
                            <option value="2519_19">Forest Ranger - unqualified</option>
                            <option value="2520_13">Forester - Supervisory</option>
                            <option value="2521_17">Forester - tree felling</option>
                            <option value="2522_16">Form Worker/Concretor</option>
                            <option value="2523_16">Foundry Worker</option>
                            <option value="2524_16">Freezing Works - employee</option>
                            <option value="2528_19">Fruit Packer/Picker</option>
                            <option value="2532_5">Funeral Parlour: Director - no embalming, admin only, average income &lt;$80000</option>
                            <option value="2531_4">Funeral Parlour: Director - no embalming, admin only, average income &gt;$80000</option>
                            <option value="2533_8">Funeral Parlour: Driver/pallbearer</option>
                            <option value="2534_10">Funeral Parlour: Embalmer</option>
                            <option value="2535_13">Funeral Parlour: Undertaker</option>
                            <option value="2537_15">Furniture Dealer: Deliveries</option>
                            <option value="2538_8">Furniture Dealer: Sales - less than 20% light manual work</option>
                            <option value="2539_10">Furniture Dealer: Sales - more than 20% light manual work</option>
                            <option value="2541_5">Furniture Dealer: Sales - no manual, average income &lt;$80000</option>
                            <option value="2540_4">Furniture Dealer: Sales - no manual, average income &gt;$80000</option>
                            <option value="2542_16">Furniture Removalist</option>
                            <option value="2543_10">Furniture Restorer - trade qualified</option>
                            <option value="2544_19">Furniture Restorer - unqualified, less than 3 years experience</option>
                            <option value="2545_16">Furniture Restorer - unqualified, minimum 3 years experience</option>
                            <option value="2551_16">Garbage Collector/Driver</option>
                            <option value="2552_13">Gardener - trade qualified</option>
                            <option value="2553_16">Gardener - unqualified</option>
                            <option value="2554_10">Gas Fitter - trade qualified</option>
                            <option value="2555_19">Gas Fitter - unqualified, less than 3 years experience</option>
                            <option value="2556_12">Gas Fitter - unqualified, minimum 3 years experience</option>
                            <option value="2558_16">Gas Pipelayer</option>
                            <option value="2559_8">Geologist/Geophysicist - field work, no underground, no explosives</option>
                            <option value="2560_20">Geologist/Geophysicist - field work, no underground, using explosives</option>
                            <option value="2561_10">Geologist/Geophysicist - field work, underground, no explosives</option>
                            <option value="2562_20">Geologist/Geophysicist - field work, underground, using explosives</option>
                            <option value="2564_5">Geologist/Geophysicist - not university qualified, office only, average income &lt;$80000</option>
                            <option value="2563_4">Geologist/Geophysicist - not university qualified, office only, average income &gt;$80000</option>
                            <option value="2565_5">Geologist/Geophysicist - offshore, qualified, office only</option>
                            <option value="2566_10">Geologist/Geophysicist - offshore, qualified, other</option>
                            <option value="2567_1">Geologist/Geophysicist - university qualified, office only</option>
                            <option value="2568_20">Geologist/Geophysicist - using explosives</option>
                            <option value="2570_10">Glazier - trade qualified</option>
                            <option value="2571_15">Glazier - unqualified, minimum 3 years experience</option>
                            <option value="2572_8">Goldsmith - trade qualified</option>
                            <option value="2573_10">Goldsmith - unqualified, minimum 3 years experience</option>
                            <option value="2574_10">Golf Professional: Shop and tuition</option>
                            <option value="2575_8">Golf Professional: Shop only</option>
                            <option value="2576_19">Golf Professional: Tournaments</option>
                            <option value="2578_5">Government Employees - clerical only, average income &lt;$80000</option>
                            <option value="2577_4">Government Employees - clerical only, average income &gt;$80000</option>
                            <option value="2579_19">Graphic Designer - not qualified</option>
                            <option value="2581_5">Graphic Designer - qualified, average income &lt;$80000</option>
                            <option value="2580_4">Graphic Designer - qualified, average income &gt;$80000</option>
                            <option value="2584_13">Greenkeeper/Groundsman - qualified</option>
                            <option value="2585_16">Greenkeeper/Groundsman - unqualified</option>
                            <option value="2586_19">Greyhound Trainer</option>
                            <option value="2588_11">Guest House Proprietor/Bed and Breakfast Proprietor</option>
                            <option value="2589_10">Gunsmith</option>
                            <option value="2590_3">Gynaecologist</option>
                            <option value="2594_8">Haberdasher</option>
                            <option value="2595_12">Handyman - full time, not self employed</option>
                            <option value="2596_19">Handyman - self employed or part time</option>
                            <option value="2597_15">Harbour Pilot</option>
                            <option value="2598_8">Hardware Retailer</option>
                            <option value="3336_8">Health and Safety Officer</option>
                            <option value="2599_6">Health Inspector</option>
                            <option value="2600_19">Helicopter Pilot/Crew: TV/Radio</option>
                            <option value="2601_26">Home Duties/Housewife/Homemaker</option>
                            <option value="2602_19">Homeopath - not qualified</option>
                            <option value="2604_5">Homeopath - qualified, average income &lt;$80000</option>
                            <option value="2603_4">Homeopath - qualified, average income &gt;$80000</option>
                            <option value="2605_19">Horse Riding Instructor</option>
                            <option value="2606_19">Horse Strappers/Trainers</option>
                            <option value="2607_11">Horticulturalist - other</option>
                            <option value="2608_10">Horticulturalist - qualified (university/TAFE course)</option>
                            <option value="2609_15">Hospital Orderly/Porter</option>
                            <option value="2611_5">Hotel/Motel: Administration only - average income &lt;$80000</option>
                            <option value="2610_4">Hotel/Motel: Administration only - average income &gt;$80000</option>
                            <option value="2612_19">Hotel/Motel: Bellboy</option>
                            <option value="2614_5">Hotel/Motel: Concierge - average income &lt;$80000</option>
                            <option value="2613_4">Hotel/Motel: Concierge - average income &gt;$80000</option>
                            <option value="2615_19">Hotel/Motel: Laundry Staff</option>
                            <option value="2616_12">Hotel/Motel: Maid - minimum 2 years experience</option>
                            <option value="2617_13">Hotel/Motel: Maintenance - qualified</option>
                            <option value="2619_5">Hotel/Motel: Manager/Proprietor - average income &lt;$80000</option>
                            <option value="2618_4">Hotel/Motel: Manager/Proprietor - average income &gt;$80000</option>
                            <option value="2620_17">Hotel/Motel: Porter</option>
                            <option value="2621_19">Hotel/Motel: Security - armed</option>
                            <option value="2622_12">Hotel/Motel: Security - unarmed</option>
                            <option value="2623_16">House reblocker/restumper</option>
                            <option value="2625_5">Human Resources Officer - average income &lt;$80000</option>
                            <option value="2624_4">Human Resources Officer - average income &gt;$80000</option>
                            <option value="2630_4">Human Resources: Manager - not university qualified, average income &lt;$125000</option>
                            <option value="2627_5">Human Resources: Manager - not university qualified, average income &lt;$80000</option>
                            <option value="2629_1">Human Resources: Manager - not university qualified, average income &gt;$125000</option>
                            <option value="2626_4">Human Resources: Manager - not university qualified, average income &gt;$80000</option>
                            <option value="2628_1">Human Resources: Manager - university qualified</option>
                            <option value="2631_16">Hydraulic Hose Fitter</option>
                            <option value="2633_5">Hypnotherapist - qualified Member of Australian Hypnotherapist Society, average income &lt;$80000</option>
                            <option value="2632_4">Hypnotherapist - qualified Member of Australian Hypnotherapist Society, average income &gt;$80000</option>
                            <option value="2634_19">Hypnotherapist - unqualified or not Member of Australian Hypnotherapist Society</option>
                            <option value="2635_8">Instrument Maker - qualified</option>
                            <option value="2636_10">Instrument Maker - unqualified, minimum 3 years experience</option>
                            <option value="2637_12">Insulation Installer - minimum 3 years experience</option>
                            <option value="2639_5">Insurance Agent/Broker/Planner/Consultant - average income &lt;$80000</option>
                            <option value="2638_4">Insurance Agent/Broker/Planner/Consultant - average income &gt;$80000</option>
                            <option value="2641_5">Insurance Assessor/Adjustor - average income &lt;$80000</option>
                            <option value="2640_4">Insurance Assessor/Adjustor - average income &gt;$80000</option>
                            <option value="2645_5">Insurance Investigator - no surveillance work/administration only, average income &lt;$80000</option>
                            <option value="2644_4">Insurance Investigator - no surveillance work/administration only, average income &gt;$80000</option>
                            <option value="2646_19">Insurance Investigator - surveillance work</option>
                            <option value="2649_4">Insurance Management/Executive - not university qualified, average income &lt;$125000</option>
                            <option value="2648_1">Insurance Management/Executive - not university qualified, average income &gt;$125000</option>
                            <option value="2647_1">Insurance Management/Executive - university qualified</option>
                            <option value="2655_5">Iridologist - qualified, average income &lt;$80000</option>
                            <option value="2654_4">Iridologist - qualified, average income &gt;$80000</option>
                            <option value="2656_19">Iridologist - unqualified</option>
                            <option value="2657_16">Ironing Contractor</option>
                            <option value="2658_16">Ironmonger</option>
                            <option value="2659_16">Irrigation/drainage worker</option>
                            <option value="2660_22">Jackeroo/Jillaroo</option>
                            <option value="2661_5">Jeweller: Sales retail store - no manual duties</option>
                            <option value="2662_6">Jeweller: Sales retail store - performing up to 10% light manual duties</option>
                            <option value="2663_8">Jeweller: Trade Qualified Cutter, Polisher, Repairs</option>
                            <option value="2664_12">Jeweller: Unqualified Cutter/Polisher - minimum 2 years experience</option>
                            <option value="2665_22">Jockey: Flat racing</option>
                            <option value="2666_22">Jockey: Harness racing</option>
                            <option value="2667_22">Jockey: Steeple/jump racing</option>
                            <option value="2668_10">Joiner - trade qualified</option>
                            <option value="2669_12">Joiner - unqualified, minimum 3 years experience</option>
                            <option value="2671_5">Journalist - employed, no overseas assignments or unusual hazards, average income &lt;$80000</option>
                            <option value="2670_4">Journalist - employed, no overseas assignments or unusual hazards, average income &gt;$80000</option>
                            <option value="2672_8">Journalist - freelance, no overseas assignments or unusual hazards, regular work</option>
                            <option value="2673_2">Judge</option>
                            <option value="2676_13">Kennel/Cat Homes: Owner/Proprietor</option>
                            <option value="2677_12">Kennel/Cat Homes: Worker</option>
                            <option value="2679_8">Laboratory Assistant</option>
                            <option value="2681_5">Laboratory Technician - qualified, average income &lt;$80000</option>
                            <option value="2680_4">Laboratory Technician - qualified, average income &gt;$80000</option>
                            <option value="2682_17">Labourer</option>
                            <option value="2684_5">Landscape worker: Landscape architect - uni qualified, &lt; 10% manual work, average income &lt;$80000</option>
                            <option value="2683_4">Landscape worker: Landscape architect - uni qualified, &lt; 10% manual work, average income &gt;$80000</option>
                            <option value="2685_13">Landscape Worker: Trade qualified</option>
                            <option value="2686_16">Landscape Worker: unqualified or less than 3 years experience</option>
                            <option value="2689_15">Laundry/Laundromat: Owner</option>
                            <option value="2690_19">Laundry/Laundromat: Staff</option>
                            <option value="2693_19">Lawn Mowing Contractor: less than 3 years experience</option>
                            <option value="2694_12">Lawn Mowing Contractor: minimum 3 years experience</option>
                            <option value="2695_8">Lawn Mowing Contractor: Sales/Service</option>
                            <option value="2696_2">Lawyer</option>
                            <option value="2697_1">Lecturer - university or equivalent</option>
                            <option value="2699_5">Librarian - average income &lt;$80000</option>
                            <option value="2698_4">Librarian - average income &gt;$80000</option>
                            <option value="2700_19">Life Guard</option>
                            <option value="2701_14">Linesperson - electrical/telephone, heights over 10 metres</option>
                            <option value="2702_13">Linesperson - electrical/telephone, heights up to 10 metres</option>
                            <option value="2703_10">Livestock Broker/Buyer/Dealer - including manual</option>
                            <option value="2704_8">Livestock Broker/Buyer/Dealer - no manual</option>
                            <option value="2705_8">Locksmith</option>
                            <option value="2706_19">Logging Contractor/Log Hauler</option>
                            <option value="2707_23">Lumberjack</option>
                            <option value="2708_8">Machinery Sales/Hire</option>
                            <option value="2711_2">Magistrate</option>
                            <option value="2712_10">Manager - more than 20% light manual duties and supervising blue collar workers</option>
                            <option value="2714_5">Manager - office/administration only, average income &lt;$80000</option>
                            <option value="2713_4">Manager - office/administration only, average income &gt;$80000</option>
                            <option value="2715_8">Manager - up to 20% light manual duties and supervising blue collar workers</option>
                            <option value="2716_12">Manicurist</option>
                            <option value="2720_12">Marine Crew - not ocean going</option>
                            <option value="2721_17">Marine Crew - ocean going in Australian Waters</option>
                            <option value="2724_1">Market Researcher/Analyst - degree qualified</option>
                            <option value="2726_4">Market Researcher/Analyst - not degree qualified, average income &lt;$125000</option>
                            <option value="2728_5">Market Researcher/Analyst - not degree qualified, average income &lt;$80000</option>
                            <option value="2725_1">Market Researcher/Analyst - not degree qualified, average income &gt;$125000</option>
                            <option value="2727_4">Market Researcher/Analyst - not degree qualified, average income &gt;$80000</option>
                            <option value="2729_19">Market Stall Holder</option>
                            <option value="2733_4">Marketing/Sales Manager - not degree qualified, average income &lt;$125000</option>
                            <option value="2731_5">Marketing/Sales Manager - not degree qualified, average income &lt;$80000</option>
                            <option value="2732_1">Marketing/Sales Manager - not degree qualified, average income &gt;$125000</option>
                            <option value="2730_4">Marketing/Sales Manager - not degree qualified, average income &gt;$80000</option>
                            <option value="2734_1">Marketing/Sales Manager - university degree qualified</option>
                            <option value="2735_19">Martial Arts Instructor</option>
                            <option value="2736_11">Massage Therapist - qualified</option>
                            <option value="2737_19">Massage Therapist - unqualified</option>
                            <option value="2738_17">Meat Industry: Boner</option>
                            <option value="2739_10">Meat Industry: Inspector</option>
                            <option value="2740_16">Meat Industry: Packer</option>
                            <option value="2741_10">Meat Industry: Supervisor - no manual</option>
                            <option value="2744_3">Medical Practitioner</option>
                            <option value="2747_4">Metallurgist - qualified, no underground work</option>
                            <option value="2748_1">Meteorologist</option>
                            <option value="2749_8">Meter Reader</option>
                            <option value="2557_8">Meter Reader/Tester</option>
                            <option value="2750_10">Midwife - registered</option>
                            <option value="2752_5">Mining: Clerical/Office work only - average income &lt;$80000</option>
                            <option value="2751_4">Mining: Clerical/Office work only - average income &gt;$80000</option>
                            <option value="2753_1">Mining: Executive managers - degree qualified, office only</option>
                            <option value="2760_8">Mining: Health and Safety Officer</option>
                            <option value="2755_4">Mining: Manager - no manual work, average income &lt;$125000</option>
                            <option value="2757_5">Mining: Manager - no manual work, average income &lt;$80000</option>
                            <option value="2754_1">Mining: Manager - no manual work, average income &gt;$125000</option>
                            <option value="2756_4">Mining: Manager - no manual work, average income &gt;$80000</option>
                            <option value="2758_12">Mining: Plant operators - open cut mines only</option>
                            <option value="2759_16">Mining: Quarry worker - no explosives</option>
                            <option value="2761_16">Mining: Surface worker - bogger operator</option>
                            <option value="2762_20">Mining: Surface worker - explosives handling</option>
                            <option value="2763_16">Mining: Surface worker - mill operator</option>
                            <option value="2764_20">Mining: Surface worker - not trade qualified, explosives handling</option>
                            <option value="2765_19">Mining: Surface worker - not trade qualified, no explosives</option>
                            <option value="2766_15">Mining: Surface worker - trade qualified (e.g. Welder, Carpenter, Mechanic), no explosives</option>
                            <option value="2767_20">Mining: Surface worker - trade qualified, explosives handling</option>
                            <option value="2768_17">Mining: Underground - bogger operator</option>
                            <option value="2769_20">Mining: Underground - explosives handling</option>
                            <option value="2770_17">Mining: Underground - jumbo operator, no explosives</option>
                            <option value="2771_20">Mining: Underground - not trade qualified, explosives handling</option>
                            <option value="2772_19">Mining: Underground - not trade qualified, no explosives</option>
                            <option value="2773_15">Mining: Underground - trade qualified (e.g. Welder, Carpenter, Electrician, Mechanic), no explosives</option>
                            <option value="2774_20">Mining: Underground - trade qualified, explosives handling</option>
                            <option value="2775_5">Minister of Religion - sole occupation</option>
                            <option value="2776_15">Mobile coffee van operator/owner, established minimum three years</option>
                            <option value="2777_19">Model</option>
                            <option value="2742_10">Motor Mechanic - trade qualified</option>
                            <option value="2743_19">Motor Mechanic - unqualified</option>
                            <option value="2778_16">Motor Vehicle - assembly worker</option>
                            <option value="2779_16">Moulder/casting workers - qualified</option>
                            <option value="2780_17">Moulder/casting workers - unqualified</option>
                            <option value="2781_19">Muffler Fitter - less than 3 years experience</option>
                            <option value="2782_12">Muffler Fitter - minimum 3 years experience</option>
                            <option value="2784_5">Museum Curator - average income &lt;$80000</option>
                            <option value="2783_4">Museum Curator - average income &gt;$80000</option>
                            <option value="2785_19">Musician</option>
                            <option value="2786_12">Musician - orchestra, full time, salaried</option>
                            <option value="2788_19">Naturopath - not qualified</option>
                            <option value="2790_5">Naturopath - qualified, average income &lt;$80000</option>
                            <option value="2789_4">Naturopath - qualified, average income &gt;$80000</option>
                            <option value="2791_3">Neurologist</option>
                            <option value="2792_19">News Reader</option>
                            <option value="2793_5">Newsagent: Counter sales duties only, sedentary only, no manual work</option>
                            <option value="2794_6">Newsagent: Counter sales duties, involving some light manual work</option>
                            <option value="2795_10">Newsagent: Paper deliveries</option>
                            <option value="2796_8">Newspaper Compositor</option>
                            <option value="2798_5">Newspaper Editor - average income &lt;$80000</option>
                            <option value="2797_4">Newspaper Editor - average income &gt;$80000</option>
                            <option value="2799_12">Nurse: Assistant/Aide</option>
                            <option value="2801_5">Nurse: Director of Nursing - no manual duties, average income &lt;$80000</option>
                            <option value="2800_4">Nurse: Director of Nursing - no manual duties, average income &gt;$80000</option>
                            <option value="2803_10">Nurse: Enrolled</option>
                            <option value="2802_15">Nurse: Intellectual disability/Psychiatric</option>
                            <option value="3335_8">Nurse: Registered</option>
                            <option value="2804_19">Nurse: Student</option>
                            <option value="2805_10">Nurse: Theatre</option>
                            <option value="2807_5">Nurse: Unit Managers - no manual duties, average income &lt;$80000</option>
                            <option value="2806_4">Nurse: Unit Managers - no manual duties, average income &gt;$80000</option>
                            <option value="2810_19">Nursery: Nurseryman - less than 3 years experience</option>
                            <option value="2808_12">Nursery: Nurseryman - minimum 3 years experience</option>
                            <option value="2809_10">Nursery: Retail employee - less than 20% manual work</option>
                            <option value="2811_3">Obstetrician</option>
                            <option value="2812_4">Occupational Therapist</option>
                            <option value="2813_15">Oil and Gas Industry: Chef or kitchen worker - offshore</option>
                            <option value="2814_17">Oil and Gas Industry: Crane Driver - offshore</option>
                            <option value="2822_16">Oil and Gas Industry: Crane Driver - onshore</option>
                            <option value="2815_18">Oil and Gas Industry: Derrickman - offshore</option>
                            <option value="2823_17">Oil and Gas Industry: Derrickman - onshore</option>
                            <option value="2816_17">Oil and Gas Industry: Driller - offshore</option>
                            <option value="2824_17">Oil and Gas Industry: Driller - onshore</option>
                            <option value="2832_4">Oil and Gas Industry: Executive Manager - onshore, not uni qualified, office only, income &lt;$125000</option>
                            <option value="2831_1">Oil and Gas Industry: Executive Manager - onshore, not uni qualified, office only, income &gt;$125000</option>
                            <option value="2829_4">Oil and Gas Industry: Executive Manager - onshore, university qualified</option>
                            <option value="2830_1">Oil and Gas Industry: Executive Manager - onshore, university qualified, office only</option>
                            <option value="2817_8">Oil and Gas Industry: Laboratory Technician - offshore</option>
                            <option value="2825_17">Oil and Gas Industry: Labourer - onshore</option>
                            <option value="2834_5">Oil and Gas Industry: Management/Clerical only - onshore, average income &lt;$80000</option>
                            <option value="2833_4">Oil and Gas Industry: Management/Clerical only - onshore, average income &gt;$80000</option>
                            <option value="2836_15">Oil and Gas Industry: Pipeline workers: (e.g Welder, Carpenter, Mechanic) - onshore, not trade qual</option>
                            <option value="2835_17">Oil and Gas Industry: Pipeline workers: (e.g Welder, Carpenter, Mechanic) - onshore, trade qualified</option>
                            <option value="2837_17">Oil and Gas Industry: Pipeline workers: Repairmen/Trench workers - onshore</option>
                            <option value="2838_19">Oil and Gas Industry: Refinery workers: General definition workers - onshore</option>
                            <option value="2839_19">Oil and Gas Industry: Refinery workers: Rigger - onshore, height less than 10 metres</option>
                            <option value="2840_20">Oil and Gas Industry: Refinery workers: Rigger - onshore, height more than 10 metres</option>
                            <option value="2841_5">Oil and Gas Industry: Refinery workers: Supervisor - onshore, office duties only</option>
                            <option value="2819_19">Oil and Gas Industry: Rigger - offshore</option>
                            <option value="2826_19">Oil and Gas Industry: Rigger - onshore, height less than 10 metres</option>
                            <option value="2827_20">Oil and Gas Industry: Rigger - onshore, height more than 10 metres</option>
                            <option value="2820_5">Oil and Gas Industry: Supervisor - offshore, office duties only</option>
                            <option value="2821_15">Oil and Gas Industry: Supervisor - offshore, other</option>
                            <option value="2828_15">Oil and Gas Industry: Supervisor - onshore, other</option>
                            <option value="2818_16">Oil and Gas Industry: Tool pusher - offshore</option>
                            <option value="2842_3">Ophthalmologist</option>
                            <option value="2844_5">Optician/Optical Dispenser - average income &lt;$80000</option>
                            <option value="2843_4">Optician/Optical Dispenser - average income &gt;$80000</option>
                            <option value="2845_3">Optometrist</option>
                            <option value="2847_3">Orthodontist</option>
                            <option value="2848_3">Orthopaedic Surgeon</option>
                            <option value="2849_3">Osteopath</option>
                            <option value="2861_19">Oyster Farmer/Packer - not offshore</option>
                            <option value="2862_22">Oyster Farmer/Packer - offshore</option>
                            <option value="2863_3">Paediatrician</option>
                            <option value="2865_19">Painter - trade qualified or unqualified, heights more than 10 metres</option>
                            <option value="2864_13">Painter - trade qualified, heights less than 10 metres</option>
                            <option value="2866_19">Painter - unqualified, less than 3 years experience, heights less than 10 metres</option>
                            <option value="2867_15">Painter - unqualified, more than 3 years experience, heights less than 10 metres</option>
                            <option value="2868_19">Panelbeater - not qualified</option>
                            <option value="2869_13">Panelbeater - trade qualified</option>
                            <option value="2873_5">Paralegal - average income &lt;$80000</option>
                            <option value="2872_4">Paralegal - average income &gt;$80000</option>
                            <option value="2874_13">Paramedic</option>
                            <option value="2876_17">Parking Station Attendant: Parking cars</option>
                            <option value="2877_6">Parole Officer - office only</option>
                            <option value="2878_3">Pathologist</option>
                            <option value="2881_15">Paver</option>
                            <option value="2882_12">Pawnbroker - minimum 3 years experience</option>
                            <option value="2883_3">Periodontist</option>
                            <option value="2885_5">Personal Assistant - administration only, average income &lt;$80000</option>
                            <option value="2884_4">Personal Assistant - administration only, average income &gt;$80000</option>
                            <option value="2889_13">Pest Controller/Exterminator - heights less than 10 metres</option>
                            <option value="2890_19">Pest Controller/Exterminator - heights more than 10 metres</option>
                            <option value="2891_1">Pharmacist</option>
                            <option value="2892_8">Photocopier Technician/Repairman</option>
                            <option value="2893_21">Photographer: Aerial - commercial pilot</option>
                            <option value="2894_10">Photographer: Employee - Australia only, no aviation, no hazardous activities</option>
                            <option value="2895_15">Photographer: Freelance - Australia only, no aviation, no hazardous activities</option>
                            <option value="2897_6">Photographer: less than 10% manual work</option>
                            <option value="2898_8">Photographer: more than 10% manual work</option>
                            <option value="2896_11">Photographer: Press/TV news Photographer - Australia only</option>
                            <option value="2900_1">Physicist</option>
                            <option value="2901_3">Physiologist</option>
                            <option value="2902_3">Physiotherapist - degree qualified</option>
                            <option value="2903_6">Physiotherapist - not degree qualified</option>
                            <option value="2904_8">Piano Tuner</option>
                            <option value="2905_8">Picture Framer</option>
                            <option value="2906_10">Plant Operator - less than 20% manual work</option>
                            <option value="2908_5">Plant Operator - office, control room, no manual work, average income &lt;$80000</option>
                            <option value="2907_4">Plant Operator - office, control room, no manual work, average income &gt;$80000</option>
                            <option value="2909_15">Plasterer - trade qualified or minimum 3 years experience</option>
                            <option value="2910_17">Plasterer - unqualified or less than 3 years experience</option>
                            <option value="2911_10">Plumber - trade qualified</option>
                            <option value="2912_19">Plumber - unqualified, less than 3 years experience</option>
                            <option value="2913_16">Plumber: Roof Plumber - qualified or unqualified, minimum 3 years experience</option>
                            <option value="2914_4">Podiatrist - less than 3 years experience</option>
                            <option value="2915_4">Podiatrist - minimum 3 years experience</option>
                            <option value="2916_22">Police: All officers</option>
                            <option value="2918_5">Police: Clerical - non officer (past or present), average income &lt;$80000</option>
                            <option value="2917_4">Police: Clerical - non officer (past or present), average income &gt;$80000</option>
                            <option value="2919_15">Pool Cleaner</option>
                            <option value="2920_6">Post Office: Clerical - counter staff</option>
                            <option value="2921_19">Post Office: Mail Contractor/Sorter/Delivery</option>
                            <option value="2922_15">Post Office: Postman - not using motorbike</option>
                            <option value="2923_12">Post Office: Postman - using motorbike</option>
                            <option value="2928_5">Priest - sole occupation</option>
                            <option value="2929_8">Printer: Bookbinder/Compositor</option>
                            <option value="2931_5">Printer: Editor/Proofreader - average income &lt;$80000</option>
                            <option value="2930_4">Printer: Editor/Proofreader - average income &gt;$80000</option>
                            <option value="2932_8">Printer: Lithographer</option>
                            <option value="2933_10">Printer: Trade qualified</option>
                            <option value="2934_12">Printer: unqualified, minimum 3 years experience</option>
                            <option value="2935_19">Prison Warden/Officer</option>
                            <option value="2937_5">Prison: Clerical - non officer, average income &lt;$80000</option>
                            <option value="2936_4">Prison: Clerical - non officer, average income &gt;$80000</option>
                            <option value="2938_12">Private Investigator: well established, minimum 3 years experience, unarmed</option>
                            <option value="2940_5">Probation Officer - clerical only, average income &lt;$80000</option>
                            <option value="2939_4">Probation Officer - clerical only, average income &gt;$80000</option>
                            <option value="2941_16">Process Worker</option>
                            <option value="2942_16">Production Line Worker</option>
                            <option value="2943_19">Professional Sportsperson</option>
                            <option value="2944_1">Professor</option>
                            <option value="2945_8">Property Developer/Investor - full time, involved with project management and actual development</option>
                            <option value="2946_19">Property Developer/Investor - no involvement with project management or in actual development</option>
                            <option value="2947_19">Property Manager/Caretaker - living on premises</option>
                            <option value="2948_12">Property Manager/Caretaker - not living on premises</option>
                            <option value="2950_6">Property Rental Manager - involving some light manual work</option>
                            <option value="2949_5">Property Rental Manager - sedentary only, no manual work</option>
                            <option value="2951_3">Psychiatrist</option>
                            <option value="2952_3">Psychologist</option>
                            <option value="2954_5">Public Relations Officer - average income &lt;$80000</option>
                            <option value="2953_4">Public Relations Officer - average income &gt;$80000</option>
                            <option value="2956_5">Publisher - average income &lt;$80000</option>
                            <option value="2955_4">Publisher - average income &gt;$80000</option>
                            <option value="2966_17">Quarries - semi-skilled, plant operator</option>
                            <option value="2961_20">Quarries: Blaster</option>
                            <option value="2962_19">Quarries: Crusherman</option>
                            <option value="2963_19">Quarries: Jackhammer operator</option>
                            <option value="2964_20">Quarries: Licensed tradesman (e.g. Carpenter, Electrician, Mechanic) - explosives handling</option>
                            <option value="2965_15">Quarries: Licensed tradesman (e.g. Carpenter, Electrician, Mechanic) - no explosives</option>
                            <option value="2968_5">Radio worker: Director/producer - average income &lt;$80000</option>
                            <option value="2967_4">Radio worker: Director/producer - average income &gt;$80000</option>
                            <option value="2969_8">Radio Worker: Sound Engineer - qualified</option>
                            <option value="2970_8">Radio Worker: Technician</option>
                            <option value="2972_5">Radiographer/Sonographer - average income &lt;$80000</option>
                            <option value="2971_4">Radiographer/Sonographer - average income &gt;$80000</option>
                            <option value="2973_3">Radiologist</option>
                            <option value="2974_5">Railway Workers: Booking officer</option>
                            <option value="2975_19">Railway Workers: Ganger</option>
                            <option value="2976_19">Railway Workers: Guard</option>
                            <option value="2977_15">Railway Workers: Inspector - ticket</option>
                            <option value="2978_19">Railway Workers: Maintenance staff</option>
                            <option value="2979_17">Railway Workers: Porter</option>
                            <option value="2980_8">Railway Workers: Signalman</option>
                            <option value="2981_8">Railway Workers: Station master</option>
                            <option value="2982_19">Railway Workers: Ticket collector</option>
                            <option value="2983_17">Railway Workers: Train/Tram Driver</option>
                            <option value="2984_15">Ranger</option>
                            <option value="2985_5">Real Estate Agent - administration only, no manual work</option>
                            <option value="2986_6">Real Estate Agent - administration, involving some light manual work</option>
                            <option value="2988_5">Receptionist - average income &lt;$80000</option>
                            <option value="2987_4">Receptionist - average income &gt;$80000</option>
                            <option value="2989_5">Reflexologist - qualified, Australian registered</option>
                            <option value="2990_10">Refrigeration Mechanic - trade qualified</option>
                            <option value="2991_15">Refrigeration Mechanic - unqualified, minimum 3 years experience</option>
                            <option value="2992_3">Rehabilitation consultant</option>
                            <option value="2993_16">Removalist</option>
                            <option value="2994_16">Renderer: Cement</option>
                            <option value="2996_5">Reporter - employed, no overseas work, office only, average income &lt;$80000</option>
                            <option value="2995_4">Reporter - employed, no overseas work, office only, average income &gt;$80000</option>
                            <option value="2997_19">Reporter - self employed or overseas work</option>
                            <option value="2998_19">Repossession Agent</option>
                            <option value="2999_19">Residential Care Worker</option>
                            <option value="3000_15">Restaurant: Kitchen hand</option>
                            <option value="3001_8">Restaurant: Ma??tre de</option>
                            <option value="3002_11">Restaurant: Waitress/Waiter</option>
                            <option value="3337_19">Retired</option>
                            <option value="3003_16">Road Maintenance and Construction</option>
                            <option value="3004_16">Road sweeper/cleaner driver</option>
                            <option value="3005_12">Roller Door Installer</option>
                            <option value="3006_16">Rubbish/garbage removalist - non-driver</option>
                            <option value="3007_8">Saddlemaker</option>
                            <option value="3008_8">Sailmaker</option>
                            <option value="3012_10">Sales Representative - Deliveries</option>
                            <option value="3013_19">Sales Representative - Door to door</option>
                            <option value="3014_10">Sales Representative - requiring lifting or demonstration of heavy goods</option>
                            <option value="3009_8">Sales Representative: Commercial travel - deliveries light goods only</option>
                            <option value="3011_6">Sales Representative: Commercial travel - no deliveries/repairs, involving some light manual work</option>
                            <option value="3010_5">Sales Representative: Commercial travel - no deliveries/repairs, no manual work</option>
                            <option value="3015_19">Sandblaster</option>
                            <option value="3016_19">Sawmiller</option>
                            <option value="3017_20">Scaffold worker/Rigger - over 10 metres</option>
                            <option value="3018_17">Scaffold worker/Rigger - up to 10 metres</option>
                            <option value="3019_22">Scientist - field work, hazardous chemicals</option>
                            <option value="3020_8">Scientist - field work, less than 20%, no hazardous chemicals</option>
                            <option value="3021_10">Scientist - field work, more than 20%, no hazardous chemicals</option>
                            <option value="3022_4">Scientist - laboratory only, no hazardous chemicals, degree qualified</option>
                            <option value="3023_16">Scrap Metal Dealer</option>
                            <option value="3024_16">Scrapmetal worker</option>
                            <option value="3025_10">Screen Printer - trade qualified</option>
                            <option value="3026_12">Screen Printer - unqualified, minimum 3 years experience</option>
                            <option value="3027_19">Sculptor</option>
                            <option value="3029_5">Secretary - average income &lt;$80000</option>
                            <option value="3028_4">Secretary - average income &gt;$80000</option>
                            <option value="3030_19">Security Guard: Aviation security - armed</option>
                            <option value="3031_12">Security Guard: Aviation security - unarmed</option>
                            <option value="3032_19">Security Guard: Bailiff - armed, courtroom only</option>
                            <option value="3033_13">Security Guard: Bailiff - unarmed, courtroom only</option>
                            <option value="3034_19">Security Guard: Bank security - armed</option>
                            <option value="3035_12">Security Guard: Bank security - unarmed</option>
                            <option value="3036_22">Security Guard: Bodyguard</option>
                            <option value="3037_22">Security Guard: Bouncer</option>
                            <option value="3038_19">Security Guard: Casino security</option>
                            <option value="3039_8">Security Guard: Control room - unarmed, no intruder confrontation</option>
                            <option value="3040_19">Security Guard: Department store security/detectives</option>
                            <option value="3041_19">Security Guard: Detectives</option>
                            <option value="3042_19">Security Guard: Hotel/Motel Industry security - armed</option>
                            <option value="3043_12">Security Guard: Hotel/Motel Industry security - unarmed</option>
                            <option value="3044_19">Security Guard: Railway guard</option>
                            <option value="2547_8">Service Station: Console Operator</option>
                            <option value="2548_13">Service Station: Mechanic - trade qualified</option>
                            <option value="2549_8">Service Station: Proprietor</option>
                            <option value="3045_16">Sewage plant worker</option>
                            <option value="3046_8">Sewing Machine Mechanic</option>
                            <option value="3047_15">Sewing Machinist - qualified</option>
                            <option value="3048_19">Sewing Machinist - unqualified</option>
                            <option value="3049_19">Shearer</option>
                            <option value="3050_13">Shed/Carport Erector</option>
                            <option value="3051_19">Sheetmetal Worker - not trade qualified less than 3 years experience</option>
                            <option value="3052_12">Sheetmetal Worker - not trade qualified minimum 3 years experience</option>
                            <option value="3053_13">Sheetmetal Worker - trade qualified</option>
                            <option value="3054_10">Shipwright</option>
                            <option value="3055_17">Shipyard Worker</option>
                            <option value="3056_10">Shoemaker/Repairer - less than 3 years experience</option>
                            <option value="3057_8">Shoemaker/Repairer - minimum 3 years experience</option>
                            <option value="3058_10">Shop Assistant/Keeper: Adult books/goods</option>
                            <option value="3059_15">Shop Assistant/Keeper: Antique dealers - deliveries</option>
                            <option value="3060_13">Shop Assistant/Keeper: Antique dealers - Restoration</option>
                            <option value="3061_8">Shop Assistant/Keeper: Antique dealers - sales and office only, no deliveries</option>
                            <option value="3062_8">Shop Assistant/Keeper: Aquarium shop</option>
                            <option value="3063_6">Shop Assistant/Keeper: Art supplies - less than 10% manual work</option>
                            <option value="3064_8">Shop Assistant/Keeper: Art supplies - more than 10% manual work</option>
                            <option value="3065_6">Shop Assistant/Keeper: Baby shop - less than 10% manual work</option>
                            <option value="3066_8">Shop Assistant/Keeper: Baby shop - more than 10% manual work</option>
                            <option value="3067_8">Shop Assistant/Keeper: Bakery</option>
                            <option value="3068_8">Shop Assistant/Keeper: Battery sales - no fitting</option>
                            <option value="3069_6">Shop Assistant/Keeper: Bedding - less than 10% manual work</option>
                            <option value="3070_8">Shop Assistant/Keeper: Bedding - more than 10% manual work</option>
                            <option value="3071_10">Shop Assistant/Keeper: Bicycle repairs</option>
                            <option value="3072_8">Shop Assistant/Keeper: Bicycle sales</option>
                            <option value="3073_6">Shop Assistant/Keeper: Boating equipment - sales only, less than 10% manual work</option>
                            <option value="3074_8">Shop Assistant/Keeper: Boating equipment - sales only, more than 10% manual work</option>
                            <option value="3075_6">Shop Assistant/Keeper: Books/stationery - less than 10% manual work</option>
                            <option value="3076_8">Shop Assistant/Keeper: Books/stationery - more than 10% manual work</option>
                            <option value="3077_12">Shop Assistant/Keeper: Bottle shop</option>
                            <option value="3078_6">Shop Assistant/Keeper: Brassware shop - less than 10% manual work</option>
                            <option value="3079_8">Shop Assistant/Keeper: Brassware shop - more than 10% manual work</option>
                            <option value="3080_8">Shop Assistant/Keeper: Building supplies - no deliveries</option>
                            <option value="3081_8">Shop Assistant/Keeper: Camping equipment</option>
                            <option value="3082_6">Shop Assistant/Keeper: Card shop - less than 10% manual work</option>
                            <option value="3083_8">Shop Assistant/Keeper: Card shop - more than 10% manual work</option>
                            <option value="3084_6">Shop Assistant/Keeper: Carpet - sales only, less than 10% manual work</option>
                            <option value="3085_8">Shop Assistant/Keeper: Carpet - sales only, more than 10% manual work</option>
                            <option value="3087_6">Shop Assistant/Keeper: Cars - office only, involving some light manual work</option>
                            <option value="3086_5">Shop Assistant/Keeper: Cars - office only, no sales or manual work</option>
                            <option value="3088_8">Shop Assistant/Keeper: Cars - yard sales</option>
                            <option value="3089_6">Shop Assistant/Keeper: Chemist shop assistant - less than 10% manual work</option>
                            <option value="3090_8">Shop Assistant/Keeper: Chemist shop assistant - more than 10% manual work</option>
                            <option value="3091_6">Shop Assistant/Keeper: Chinaware and glassware shop - less than 10% manual work</option>
                            <option value="3092_8">Shop Assistant/Keeper: Chinaware and glassware shop - more than 10% manual work</option>
                            <option value="3093_6">Shop Assistant/Keeper: Clothing - less than 10% manual work</option>
                            <option value="3094_8">Shop Assistant/Keeper: Clothing - more than 10% manual work</option>
                            <option value="3095_6">Shop Assistant/Keeper: Computer - less than 10% manual work</option>
                            <option value="3096_8">Shop Assistant/Keeper: Computer - more than 10% manual work</option>
                            <option value="3097_6">Shop Assistant/Keeper: Confectionary - less than 10% manual work</option>
                            <option value="3098_8">Shop Assistant/Keeper: Confectionary - more than 10% manual work</option>
                            <option value="3099_6">Shop Assistant/Keeper: Curtain - less than 10% manual work</option>
                            <option value="3100_8">Shop Assistant/Keeper: Curtain - more than 10% manual work</option>
                            <option value="3101_8">Shop Assistant/Keeper: Delicatessen</option>
                            <option value="3102_15">Shop Assistant/Keeper: Department store - deliveries</option>
                            <option value="3103_6">Shop Assistant/Keeper: Department store - sales, no deliveries, less than 10% manual work</option>
                            <option value="3104_8">Shop Assistant/Keeper: Department store - sales, no deliveries, more than 10% manual work</option>
                            <option value="3105_8">Shop Assistant/Keeper: Disposal store</option>
                            <option value="3106_6">Shop Assistant/Keeper: Duty free shop - less than 10% manual work</option>
                            <option value="3107_8">Shop Assistant/Keeper: Duty free shop - more than 10% manual work</option>
                            <option value="3108_15">Shop Assistant/Keeper: Electrical - deliveries</option>
                            <option value="3109_6">Shop Assistant/Keeper: Electrical - retail sales only, less than 10% manual work</option>
                            <option value="3110_8">Shop Assistant/Keeper: Electrical - retail sales only, more than 10% manual work</option>
                            <option value="3111_10">Shop Assistant/Keeper: Fish and chip shop</option>
                            <option value="3112_15">Shop Assistant/Keeper: Florist - deliveries</option>
                            <option value="3113_8">Shop Assistant/Keeper: Florist - sales, no deliveries</option>
                            <option value="3114_6">Shop Assistant/Keeper: Florist - shop proprietor, no deliveries, less than 10% manual work</option>
                            <option value="3115_8">Shop Assistant/Keeper: Florist - shop proprietor, no deliveries, more than 10% manual work</option>
                            <option value="3116_6">Shop Assistant/Keeper: Foot wear - less than 10% manual work</option>
                            <option value="3117_8">Shop Assistant/Keeper: Foot wear - more than 10% manual work</option>
                            <option value="2530_13">Shop Assistant/Keeper: Fruit Shop</option>
                            <option value="3118_6">Shop Assistant/Keeper: Furnishings (cushions, fabrics) - less than 10% manual work</option>
                            <option value="3119_8">Shop Assistant/Keeper: Furnishings (cushions, fabrics) - more than 10% manual work</option>
                            <option value="3120_15">Shop Assistant/Keeper: Furniture - deliveries</option>
                            <option value="3121_6">Shop Assistant/Keeper: Furniture - sales only, less than 10% manual work</option>
                            <option value="3122_8">Shop Assistant/Keeper: Furniture - sales only, more than 10% manual work</option>
                            <option value="3123_6">Shop Assistant/Keeper: Gift shop - less than 10% manual work</option>
                            <option value="3124_8">Shop Assistant/Keeper: Gift shop - more than 10% manual work</option>
                            <option value="3125_5">Shop Assistant/Keeper: Hardware - administration only</option>
                            <option value="3126_15">Shop Assistant/Keeper: Hardware - deliveries</option>
                            <option value="3127_8">Shop Assistant/Keeper: Hardware - sales</option>
                            <option value="3128_6">Shop Assistant/Keeper: Health food - less than 10% manual work</option>
                            <option value="3129_8">Shop Assistant/Keeper: Health food - more than 10% manual work</option>
                            <option value="3130_8">Shop Assistant/Keeper: Ice cream parlour</option>
                            <option value="3131_12">Shop Assistant/Keeper: Juice vendor</option>
                            <option value="3132_8">Shop Assistant/Keeper: Lawn moving sales</option>
                            <option value="3133_6">Shop Assistant/Keeper: Light fittings - less than 10% manual work</option>
                            <option value="3134_8">Shop Assistant/Keeper: Light fittings - more than 10% manual work</option>
                            <option value="3135_8">Shop Assistant/Keeper: Machinery sales/hire</option>
                            <option value="3136_8">Shop Assistant/Keeper: Motor vehicle accessories and spare parts</option>
                            <option value="3137_15">Shop Assistant/Keeper: Musical instruments - deliveries</option>
                            <option value="3138_6">Shop Assistant/Keeper: Musical instruments - no deliveries, less than 10% manual work</option>
                            <option value="3139_8">Shop Assistant/Keeper: Musical instruments - no deliveries, more than 10% manual work</option>
                            <option value="3140_6">Shop Assistant/Keeper: Newsagent - no deliveries, less than 10% manual work</option>
                            <option value="3141_8">Shop Assistant/Keeper: Newsagent - no deliveries, more than 10% manual work</option>
                            <option value="3142_8">Shop Assistant/Keeper: Nursery retail - less than 20% manual work</option>
                            <option value="3143_6">Shop Assistant/Keeper: Office supply - less than 10% manual work</option>
                            <option value="3144_8">Shop Assistant/Keeper: Office supply - more than 10% manual work</option>
                            <option value="3145_8">Shop Assistant/Keeper: Paint and wallpaper</option>
                            <option value="3146_8">Shop Assistant/Keeper: Pet shop</option>
                            <option value="3147_8">Shop Assistant/Keeper: Photographic - repairs</option>
                            <option value="3148_6">Shop Assistant/Keeper: Photographic - sales, less than 10% manual work</option>
                            <option value="3149_8">Shop Assistant/Keeper: Photographic - sales, more than 10% manual work</option>
                            <option value="3150_6">Shop Assistant/Keeper: Record shop - less than 10% manual work</option>
                            <option value="3151_8">Shop Assistant/Keeper: Record shop - more than 10% manual work</option>
                            <option value="3152_8">Shop Assistant/Keeper: Second hand goods</option>
                            <option value="3153_6">Shop Assistant/Keeper: Sporting goods - sales only, less than 10% manual work</option>
                            <option value="3154_8">Shop Assistant/Keeper: Sporting goods - sales only, more than 10% manual work</option>
                            <option value="3155_10">Shop Assistant/Keeper: Supermarket - cashier</option>
                            <option value="3156_15">Shop Assistant/Keeper: Supermarket - deliveries</option>
                            <option value="3158_6">Shop Assistant/Keeper: Supermarket - manager and clerical, admin, involving some light manual work</option>
                            <option value="3157_5">Shop Assistant/Keeper: Supermarket - manager and clerical, administration only, no manual work</option>
                            <option value="3159_16">Shop Assistant/Keeper: Supermarket - shelf stockist</option>
                            <option value="3160_8">Shop Assistant/Keeper: Swimming pool supplies</option>
                            <option value="3161_6">Shop Assistant/Keeper: Tobacconist - less than 10% manual work</option>
                            <option value="3162_8">Shop Assistant/Keeper: Tobacconist - more than 10% manual work</option>
                            <option value="3163_6">Shop Assistant/Keeper: Toy shop - less than 10% manual work</option>
                            <option value="3164_8">Shop Assistant/Keeper: Toy shop - more than 10% manual work</option>
                            <option value="3165_6">Shop Assistant/Keeper: Video/DVD/Record shop - less than 10% manual work</option>
                            <option value="3166_8">Shop Assistant/Keeper: Video/DVD/Record shop - more than 10% manual work</option>
                            <option value="3167_16">Shop Filler/Shelf Stacker</option>
                            <option value="3168_6">Shop Owner - less than 10% manual work</option>
                            <option value="3169_8">Shop Owner - less than 20% manual work</option>
                            <option value="3170_15">Shop Owner - more than 20% manual work</option>
                            <option value="3171_5">Shop Owner - no manual work</option>
                            <option value="3172_6">Shop Owner: Sales - counter only, less than 10% manual work</option>
                            <option value="3173_8">Shop Owner: Sales - counter only, more than 10% manual work</option>
                            <option value="3174_19">Shopfitter - not trade qualified, less than 3 years experience</option>
                            <option value="3175_15">Shopfitter - not trade qualified, more than 3 years experience</option>
                            <option value="3176_10">Shopfitter - trade qualified</option>
                            <option value="3177_19">Shunter</option>
                            <option value="3178_20">Signwriter - more than 10 metres</option>
                            <option value="3179_8">Signwriter - qualified, less than 10 metres</option>
                            <option value="3180_13">Signwriter - unqualified, less than 10 metres</option>
                            <option value="3181_8">Silversmith - qualified</option>
                            <option value="3182_12">Silversmith - unqualified, minimum 3 years experience</option>
                            <option value="3183_19">Singer</option>
                            <option value="3184_13">Skylight Fitter - less than 10 metres</option>
                            <option value="3185_20">Skylight Fitter - more than 10 metres</option>
                            <option value="3186_17">Slaughterman</option>
                            <option value="3188_6">Social Worker/Counsellor - degree qualified, Field visits</option>
                            <option value="3189_4">Social Worker/Counsellor - degree qualified, Office only</option>
                            <option value="3190_8">Social Worker/Counsellor - unqualified, minimum 3 years experience</option>
                            <option value="3192_2">Solicitor</option>
                            <option value="3193_8">Sound Technician - studio only, minimum 3 years experience</option>
                            <option value="3196_4">Speech Therapist/Pathologist - not university qualified, average income &lt;$125000</option>
                            <option value="3195_1">Speech Therapist/Pathologist - not university qualified, average income &gt;$125000</option>
                            <option value="3194_1">Speech Therapist/Pathologist - University qualified</option>
                            <option value="3197_10">Spray Painter - trade qualified</option>
                            <option value="3198_15">Spray Painter - unqualified, minimum 3 years experience</option>
                            <option value="3199_8">Squash Court Proprietor - no coaching</option>
                            <option value="3201_5">Statistician - average income &lt;$80000</option>
                            <option value="3200_4">Statistician - average income &gt;$80000</option>
                            <option value="3202_19">Steel Mill Worker</option>
                            <option value="3203_16">Stevedore</option>
                            <option value="3204_8">Stock and Station Agent - no manual work</option>
                            <option value="3205_11">Stock and Station Agent - with manual work</option>
                            <option value="3207_5">Stockbroker - average income &lt;$80000</option>
                            <option value="3206_4">Stockbroker - average income &gt;$80000</option>
                            <option value="3208_19">Stockman</option>
                            <option value="3209_13">Stone Mason</option>
                            <option value="3210_16">Storeperson/Warehouse person</option>
                            <option value="3211_19">Student - medical/nursing/dentistry (with practical)</option>
                            <option value="3212_19">Student - other</option>
                            <option value="3213_24">Stuntperson - film/TV</option>
                            <option value="3214_22">Stuntperson - record attempts and one off stunts</option>
                            <option value="3215_16">Surfboard Reshaper</option>
                            <option value="3216_3">Surgeon</option>
                            <option value="3217_1">Surveyor - consulting/office work only, university qualified</option>
                            <option value="3218_10">Surveyor: Field work - other, qualified</option>
                            <option value="3219_8">Surveyor: Land - qualified, less than 20% field work</option>
                            <option value="3221_15">Surveyor: Mining - qualified, no underground work</option>
                            <option value="3223_5">Surveyor: Quantity - qualified, office duties only, average income &lt;$80000</option>
                            <option value="3224_1">Surveyor: Quantity - qualified, office duties only, average income &gt;$125000</option>
                            <option value="3222_4">Surveyor: Quantity - qualified, office duties only, average income &gt;$80000</option>
                            <option value="3225_10">Surveyor: Quantity - qualified, other</option>
                            <option value="3226_24">Surveyor: Underwater - qualified</option>
                            <option value="3227_15">Swimming Pool Attendant - permanent, full time, minimum 2 years experience</option>
                            <option value="3228_13">Swimming Pool Builder - above ground, qualified</option>
                            <option value="3229_13">Swimming Pool Builder - in ground, concrete, licensed</option>
                            <option value="3230_13">Swimming Pool Builder - in ground, fibreglass</option>
                            <option value="3231_5">TAB Agent - full time</option>
                            <option value="3232_19">Tattooist</option>
                            <option value="3234_5">Tax Consultant - average income &lt;$80000</option>
                            <option value="3233_4">Tax Consultant - average income &gt;$80000</option>
                            <option value="3235_10">Taxidermist</option>
                            <option value="3236_1">Teacher: Headmaster</option>
                            <option value="3237_10">Teacher: Kindergarten aide</option>
                            <option value="3238_6">Teacher: Kindergarten teacher - qualified</option>
                            <option value="3240_5">Teacher: Music Teacher - qualified, average income &lt;$80000</option>
                            <option value="3239_4">Teacher: Music Teacher - qualified, average income &gt;$80000</option>
                            <option value="3242_5">Teacher: Non-manual, classroom, less than 10% manual work</option>
                            <option value="3243_8">Teacher: Non-manual, classroom, more than 10% manual work</option>
                            <option value="3244_10">Teacher: Physical education, trades, art, woodwork</option>
                            <option value="3245_8">Teacher: Teacher's aide</option>
                            <option value="3247_5">Telephone Industry: Administration only - average income &lt;$80000</option>
                            <option value="3246_4">Telephone Industry: Administration only - average income &gt;$80000</option>
                            <option value="3248_19">Telephone Industry: Cable installation</option>
                            <option value="3249_14">Telephone Industry: Linesman - heights over 10 metres</option>
                            <option value="3250_13">Telephone Industry: Linesman - heights up to 10 metres</option>
                            <option value="3251_8">Telephone Industry: Technician - no underground</option>
                            <option value="3252_8">Television/Radio Repairer</option>
                            <option value="3254_5">Theatre/Cinema: Management - office only, average income &lt;$80000</option>
                            <option value="3253_4">Theatre/Cinema: Management - office only, average income &gt;$80000</option>
                            <option value="3255_8">Theatre/Cinema: Projectionist</option>
                            <option value="3256_8">Theatre/Cinema: Ticket seller</option>
                            <option value="3257_10">Theatre/Cinema: Usher</option>
                            <option value="3258_13">Tiler: Floor and Wall tiler - trade qualified, no roof tiling or paving</option>
                            <option value="3259_15">Tiler: Roof tiler - fully qualified, up to 10 metres</option>
                            <option value="3260_20">Tiler: Roof tiler - unqualified or working over 10 metres, less than 3 years experience</option>
                            <option value="3261_18">Tiler: Roof tiler - unqualified or working over 10 metres, minimum 3 years experience</option>
                            <option value="3262_17">Timber Merchant</option>
                            <option value="3263_8">Tool Maker - trade qualified</option>
                            <option value="3264_19">Tool Maker - unqualified, less than 3 years experience</option>
                            <option value="3265_10">Tool Maker - unqualified, minimum 3 years experience</option>
                            <option value="3266_10">Tourist Guide - full time, not seasonal</option>
                            <option value="3267_19">Tourist Guide - part time or seasonal</option>
                            <option value="3268_1">Town Planner - degree qualified</option>
                            <option value="3270_4">Town Planner - not degree qualified, average income &lt;$125000</option>
                            <option value="3272_5">Town Planner - not degree qualified, average income &lt;$80000</option>
                            <option value="3269_1">Town Planner - not degree qualified, average income &gt;$125000</option>
                            <option value="3271_4">Town Planner - not degree qualified, average income &gt;$80000</option>
                            <option value="3274_5">Translator - average income &lt;$80000</option>
                            <option value="3273_4">Translator - average income &gt;$80000</option>
                            <option value="3276_5">Travel Agent - average income &lt;$80000</option>
                            <option value="3275_4">Travel Agent - average income &gt;$80000</option>
                            <option value="3277_17">Tree Surgeon</option>
                            <option value="3278_16">Tugboat Operator</option>
                            <option value="3279_19">Tupperware Sales</option>
                            <option value="3281_5">Tutor - full time, average income &lt;$80000</option>
                            <option value="3280_4">Tutor - full time, average income &gt;$80000</option>
                            <option value="3286_12">Tyre Fitter/Repairer</option>
                            <option value="3338_19">Unemployed</option>
                            <option value="3287_12">Upholsterer/Trimmer - not qualified, minimum 3 years experience</option>
                            <option value="3288_10">Upholsterer/Trimmer - trade qualified</option>
                            <option value="3289_3">Urologist</option>
                            <option value="3290_15">Valet - full time</option>
                            <option value="3291_8">Valuer: Livestock - no manual work</option>
                            <option value="3292_10">Valuer: Livestock - with manual work</option>
                            <option value="3294_5">Valuer: Property - average income &lt;$80000</option>
                            <option value="3293_4">Valuer: Property - average income &gt;$80000</option>
                            <option value="3295_15">Vehicle Body Builder - trade qualified</option>
                            <option value="3296_19">Vehicle Body Builder - unqualified</option>
                            <option value="3297_12">Vending Machine Filler</option>
                            <option value="3298_12">Vending Machine Serviceman</option>
                            <option value="3299_10">Veterinary Nurse</option>
                            <option value="3300_4">Veterinary Surgeon - domestic pets</option>
                            <option value="3301_6">Veterinary Surgeon - large animals</option>
                            <option value="3302_19">Wardsman</option>
                            <option value="3303_10">Warehouse: Manager - between 10% to 20% manual work</option>
                            <option value="3304_6">Warehouse: Manager - less than 10% manual work</option>
                            <option value="3305_12">Warehouse: Manager - more than 20% manual work</option>
                            <option value="3306_16">Warehouse: Not management</option>
                            <option value="3307_10">Washing Machine Mechanic</option>
                            <option value="3308_8">Watchmaker/Repairer</option>
                            <option value="3309_15">Waterproofer</option>
                            <option value="3311_5">Weather Forecaster - average income &lt;$80000</option>
                            <option value="3310_4">Weather Forecaster - average income &gt;$80000</option>
                            <option value="3312_13">Welder - trade qualified</option>
                            <option value="3313_15">Welder - unqualified</option>
                            <option value="3315_5">Welfare Worker - administration/office only, average income &lt;$80000</option>
                            <option value="3314_4">Welfare Worker - administration/office only, average income &gt;$80000</option>
                            <option value="3316_8">Welfare Worker - qualified, visiting/outside work less than 20%</option>
                            <option value="3317_10">Welfare Worker - qualified, visiting/outside work more than 20%</option>
                            <option value="3318_11">Welfare Worker - unqualified</option>
                            <option value="3319_17">Wharf/Waterside Worker</option>
                            <option value="3320_8">Window Dresser - qualified</option>
                            <option value="3321_12">Window Dresser - unqualified</option>
                            <option value="3322_12">Window Tinter: Employee</option>
                            <option value="3323_8">Window Tinter: Proprietor</option>
                            <option value="3324_19">Windscreen Fitter - less than 3 years experience</option>
                            <option value="3325_15">Windscreen Fitter - minimum 3 years experience</option>
                            <option value="3326_8">Winemaker - qualified</option>
                            <option value="3327_10">Wool Classer</option>
                            <option value="3329_5">Woolbroker/Buyer - average income &lt;$80000</option>
                            <option value="3328_4">Woolbroker/Buyer - average income &gt;$80000</option>
                            <option value="3330_19">Wrecker</option>
                            <option value="3331_6">Xray Technician - qualified</option>
                            <option value="3332_15">Zoo Attendant - qualified</option>
                            <option value="3333_17">Zoo Attendant - unqualified</option>
                            <option value="3334_4">Zoologist</option>

                        </select>
                        <p class="d-inline-flex" style="font-size: 1.5rem">, also otherwise known as a </p>
                        <select class="d-inline-flex form-select form-select-lg" id="neooccupation" name="neosOccupation" required>
                            <option value="" disabled selected>Select your option</option>
                            <option value="001410">Accountant - not degree qualified</option>
                            <option value="001411">Accountant - relevant degree</option>
                            <option value="001412">Accounting - clerk or bookkeeper - not degree qualified</option>
                            <option value="001413">Accounting - clerk or bookkeeper - relevant degree or average income more than $120,000</option>
                            <option value="001414">Acrobat - not performing at heights</option>
                            <option value="001415">Acrobat - performing at heights with adequate safety precautions</option>
                            <option value="001416">Actor</option>
                            <option value="001417">Actuary</option>
                            <option value="001418">Acupuncturist - member of Australian Acupuncturist Association</option>
                            <option value="001419">Acupuncturist - not a member of Australian Acupuncturist Association</option>
                            <option value="001420">Administration - office only</option>
                            <option value="001421">Adult books or goods - shop assistant or keeper</option>
                            <option value="001422">Advertising executive</option>
                            <option value="001423">Aerial or antennae erector - over ten metres</option>
                            <option value="001424">Aerial or antennae erector - up to ten metres</option>
                            <option value="001425">Aerobics instructor - full time - minimum three years experience</option>
                            <option value="001426">Aged care worker</option>
                            <option value="001427">Agronomist - less than 10% field work - no hazardous chemicals</option>
                            <option value="001428">Agronomist - less than 20% field work - no hazardous chemicals</option>
                            <option value="001429">Agronomist - more than 20% field work - no hazardous chemicals</option>
                            <option value="001430">Air conditioning - engineer - not degree qualified - consultant - office only</option>
                            <option value="001431">Air conditioning - engineer - relevant degree - consultant - office only</option>
                            <option value="001432">Air conditioning - qualified installer or repairer - over ten metres</option>
                            <option value="001433">Air conditioning - qualified installer or repairer - up to ten metres</option>
                            <option value="001434">Air conditioning - supervisor - qualified</option>
                            <option value="001435">Air traffic controller</option>
                            <option value="001436">Aircraft engineer - relevant degree - flying</option>
                            <option value="001437">Aircraft engineer - relevant degree - non flying - manual duties</option>
                            <option value="001438">Aircraft maintenance - qualified or skilled</option>
                            <option value="001439">Airline staff of major airlines only - office workers</option>
                            <option value="001440">Airline staff of major airlines only - pilot, aircrew, flight attendant</option>
                            <option value="001441">Airline staff of major airlines only - truck drivers</option>
                            <option value="001442">Airline staff of minor airlines only - office workers</option>
                            <option value="001443">Airline staff of minor or charter airlines - office workers</option>
                            <option value="001444">Airline staff of minor or charter airlines - pilot, aircrew, flight attendant</option>
                            <option value="001445">Airline staff of minor or charter airlines - truck drivers</option>
                            <option value="001446">Alarm installer - inspections or repairer - qualified</option>
                            <option value="001447">Ambulance officer or paramedical or driver</option>
                            <option value="001448">Amway/Arbonne seller or distributor - full time - established minimum three years</option>
                            <option value="001449">Amway/Arbonne seller or distributor - full time - established under three years</option>
                            <option value="001450">Amway/Arbonne seller or distributor - part time</option>
                            <option value="001451">Anaesthetist</option>
                            <option value="001452">Analyst - office only - not degree qualified</option>
                            <option value="001453">Analyst - office only - relevant degree or average income more than $120,000</option>
                            <option value="001454">Antique dealer - deliveries</option>
                            <option value="001455">Antique dealer - restoration</option>
                            <option value="001456">Antique dealer - sales and office only</option>
                            <option value="001457">Antique dealers - shop assistant or keeper - deliveries</option>
                            <option value="001458">Antique dealers - shop assistant or keeper - restoration</option>
                            <option value="001459">Antique dealers - shop assistant or keeper - sales and office only - no deliveries</option>
                            <option value="001460">Apprentice - not in final year</option>
                            <option value="001461">Aquarium shop - shop assistant or keeper</option>
                            <option value="001462">Arborist - office or consulting only - no tree lopping</option>
                            <option value="001463">Archaeologist - less than 10% field work - relevant degree</option>
                            <option value="001464">Archaeologist - less than 20% field work - relevant degree</option>
                            <option value="001465">Archaeologist - more than 20% field work - relevant degree</option>
                            <option value="001466">Archaeologist - not degree qualified</option>
                            <option value="001467">Architect - qualified</option>
                            <option value="001468">Architectural draftsperson</option>
                            <option value="001469">Armed services - all ranks - office duties only - no notice of deployment</option>
                            <option value="001470">Armed services - all ranks - other than office duties</option>
                            <option value="001471">Art dealer or proprietor</option>
                            <option value="001472">Art supplies - shop assistant or keeper - less than 10% manual work</option>
                            <option value="001473">Art supplies - shop assistant or keeper - more than 10% manual work</option>
                            <option value="001474">Artist or painter - employed - commercial - qualified - office only - no set production work - not working from home</option>
                            <option value="001475">Artist or painter - freelance - commercial - qualified - office only - no set production work - not working from home</option>
                            <option value="001476">Asbestos worker</option>
                            <option value="001477">Asphalt layer</option>
                            <option value="001478">Assembly line worker</option>
                            <option value="001479">Assembly worker - motor vehicle</option>
                            <option value="001480">Astronomer - fully qualified</option>
                            <option value="001481">Attorney</option>
                            <option value="001482">Auctioneer - livestock</option>
                            <option value="001483">Auctioneer - not livestock</option>
                            <option value="001484">Audiologist - relevant degree</option>
                            <option value="001485">Auditor - not degree qualified</option>
                            <option value="001486">Auditor - relevant degree or average income more than $120,000</option>
                            <option value="001487">Author or writer</option>
                            <option value="001488">Auto electrician</option>
                            <option value="001489">Aviation industry - ground staff - cleaner</option>
                            <option value="001490">Aviation industry - ground staff - refuellers</option>
                            <option value="001491">Aviation industry - ground staff - security - unarmed</option>
                            <option value="001492">Aviation industry - management and administration - office duties only - not degree qualified</option>
                            <option value="001493">Aviation industry - management and administration - office duties only - relevant degree or average income more than $120,000</option>
                            <option value="001494">Awning or blind or screen installer - installer</option>
                            <option value="001495">Awning or blind or screen installer - sales and quoting only</option>
                            <option value="001496">Awning or blind or screen installer - supervisor - less than 10% manual work</option>
                            <option value="001497">Baby shop - shop assistant or keeper - less than 10% manual work</option>
                            <option value="001498">Baby shop - shop assistant or keeper - more than 10% manual work</option>
                            <option value="001499">Baggage handler</option>
                            <option value="001500">Bailiff - armed</option>
                            <option value="001501">Bailiff - unarmed</option>
                            <option value="001502">Baker - counter work only</option>
                            <option value="001503">Baker - trade qualified</option>
                            <option value="001504">Baker - unqualified - minimum three years experience</option>
                            <option value="001505">Bakery - shop assistant or keeper</option>
                            <option value="001506">Bank manager</option>
                            <option value="001507">Bank officer - not degree qualified</option>
                            <option value="001508">Bank officer - relevant degree or average income more than $120,000</option>
                            <option value="001509">Bar attendant</option>
                            <option value="001510">Bar manager - less than 10% bar work</option>
                            <option value="001511">Bar manager - less than 40% bar work</option>
                            <option value="001512">Bar manager - more than 40% bar work</option>
                            <option value="001513">Barber or hairdresser</option>
                            <option value="001514">Barista</option>
                            <option value="001515">Barrister or solicitor</option>
                            <option value="001516">Battery fitter or repairer - qualified</option>
                            <option value="001517">Battery fitter or repairer - unqualified - minimum three years experience</option>
                            <option value="001518">Battery sales - shop assistant or keeper - no fitting</option>
                            <option value="001519">Beach inspector - permanent - fulltime - minimum two years experience</option>
                            <option value="001520">Beautician - qualified</option>
                            <option value="001521">Bedding - shop assistant or keeper - less than 10% manual work</option>
                            <option value="001522">Bedding - shop assistant or keeper - more than 10% manual work</option>
                            <option value="001523">Beef cattle - farming industry - proprietor or owner or manager</option>
                            <option value="001524">Beekeeper or apiarist</option>
                            <option value="001525">Bellboy - hotel or motel</option>
                            <option value="001526">Bicycle repairs - shop assistant or keeper</option>
                            <option value="001527">Bicycle sales - shop assistant or keeper</option>
                            <option value="001528">Biochemist</option>
                            <option value="001529">Biologist - marine - field work - diving more than 40m or field work more than 20% of total duties</option>
                            <option value="001530">Biologist - marine - field work - diving up to 40m or less than 20% of total duties</option>
                            <option value="001531">Biologist - marine - no field work</option>
                            <option value="001532">Biologist - not marine</option>
                            <option value="001533">Blacksmith or farrier - less than three years experience</option>
                            <option value="001534">Blacksmith or farrier - minimum three years experience</option>
                            <option value="001535">Blaster or explosives handler</option>
                            <option value="001536">Boarding house proprietor</option>
                            <option value="001537">Boat builder - qualified</option>
                            <option value="001538">Boat builder - unqualified - minimum three years experience</option>
                            <option value="001539">Boat operator - charter - deep sea</option>
                            <option value="001540">Boat operator - charter - harbour and inlets</option>
                            <option value="001541">Boating equipment - shop assistant or keeper - sales only - less than 10% manual work</option>
                            <option value="001542">Boating equipment - shop assistant or keeper - sales only - more than 10% manual work</option>
                            <option value="001543">Bobcat or bulldozer or backhoe owner - established minimum three years - employees - less than 20% manual work or driving</option>
                            <option value="001544">Bobcat or bulldozer or backhoe owner - established minimum three years - employees - less than 40% manual work or driving</option>
                            <option value="001545">Bobcat or bulldozer or backhoe owner - established minimum three years - more than 40% manual work or driving</option>
                            <option value="001546">Body piercer</option>
                            <option value="001547">Bogger operator - mining - surface worker</option>
                            <option value="001548">Boilermaker - qualified</option>
                            <option value="001549">Boilermaker - unqualified - minimum three years experience</option>
                            <option value="001550">Booking officer - railway workers</option>
                            <option value="001551">Bookkeeper - not degree qualified</option>
                            <option value="001552">Bookkeeper - relevant degree or average income more than $120,000</option>
                            <option value="001553">Bookmaker or betting</option>
                            <option value="001554">Books or stationery - shop assistant or keeper - less than 10% manual work</option>
                            <option value="001555">Books or stationery - shop assistant or keeper - more than 10% manual work</option>
                            <option value="001556">Bootmaker - less than three years experience</option>
                            <option value="001557">Bootmaker - minimum three years experience</option>
                            <option value="001558">Botanist - relevant degree</option>
                            <option value="001559">Botanist - unqualified</option>
                            <option value="001560">Bottle shop - shop assistant or keeper</option>
                            <option value="001561">Bouncer or crowd control</option>
                            <option value="001562">Boxer - professional</option>
                            <option value="001563">Brassware shop - shop assistant or keeper - less than 10% manual work</option>
                            <option value="001564">Brassware shop - shop assistant or keeper - more than 10% manual work</option>
                            <option value="001565">Brick paver</option>
                            <option value="001566">Bricklayer - qualified</option>
                            <option value="001567">Bricklayer - unqualified - minimum three years experience</option>
                            <option value="001568">Broker - insurance</option>
                            <option value="001569">Builder - foreman - less than 20% light manual duties</option>
                            <option value="001570">Builder - foreman - more than 20% manual and supervising blue collar workers</option>
                            <option value="001571">Builder - labourer</option>
                            <option value="001572">Builder - licensed - fully qualified</option>
                            <option value="001573">Builder - unqualified - minimum three years experience</option>
                            <option value="001574">Building supplies - shop assistant or keeper - no deliveries</option>
                            <option value="001575">Business analyst - office - not degree qualified</option>
                            <option value="001576">Business analyst - office - relevant degree or average income more than $120,000</option>
                            <option value="001577">Business consultant - not degree qualified</option>
                            <option value="001578">Business consultant - relevant degree or average income more than $120,000</option>
                            <option value="001579">Butcher - retail - trade qualified</option>
                            <option value="001580">Butcher - retail - unqualified - minimum three years experience</option>
                            <option value="001581">Butcher - slaughterman</option>
                            <option value="001582">Butler - qualified</option>
                            <option value="001583">Butler - unqualified - minimum three years experience</option>
                            <option value="001584">Buyer - retail store - office only</option>
                            <option value="001585">Buyer - retail store - other than office only</option>
                            <option value="001586">Cabinet maker - trade qualified</option>
                            <option value="001587">Cabinet maker - unqualified - less than three years experience</option>
                            <option value="001588">Cabinet maker - unqualified - minimum three years experience</option>
                            <option value="001589">Cable maker or wire maker</option>
                            <option value="001590">Cafe or coffee lounge - kitchen hand</option>
                            <option value="001591">Cafe or coffee lounge - proprietor - less than 20% light manual work</option>
                            <option value="001592">Cafe or coffee lounge - proprietor - more than 20% light manual work</option>
                            <option value="001593">Cafe or coffee lounge - waiter or waitress</option>
                            <option value="001594">Cake decorator - minimum three years experience - full time - not working from home</option>
                            <option value="001595">Cake decorator - minimum three years experience - full time - working from home</option>
                            <option value="001596">Cameraman - aerial (commercial pilot)</option>
                            <option value="001597">Cameraman - film and television - employed - Australia only</option>
                            <option value="001598">Cameraman - film and television - freelance - Australia only</option>
                            <option value="001601">Cameraman - film industry - non-studio - employee (on location - Australia only)</option>
                            <option value="001603">Cameraman - film industry - non-studio - freelance (on location - Australia only)</option>
                            <option value="001599">Cameraman - film industry - non-studio (aerial - with commercial pilot)</option>
                            <option value="001600">Cameraman - film industry - studio only - employed</option>
                            <option value="001602">Cameraman - film industry - studio only - freelance</option>
                            <option value="001604">Camping equipment - shop assistant or keeper</option>
                            <option value="001605">Cane farm labourer or worker or harvester</option>
                            <option value="001606">Cane farmer owner or manager</option>
                            <option value="001607">Canteen manager - less than 20% light manual work</option>
                            <option value="001608">Canteen manager - more than 20% light manual work</option>
                            <option value="001609">Canteen work - not manager</option>
                            <option value="001610">Car dealership owner - office only</option>
                            <option value="001611">Car detailer - less than three years in occupation</option>
                            <option value="001612">Car detailer - minimum three years in occupation</option>
                            <option value="001613">Car salesperson - office only - not dealership owner</option>
                            <option value="001614">Car salesperson - yard sales - minimum two years experience</option>
                            <option value="001615">Car wrecker</option>
                            <option value="001616">Car wrecker - foreman - no manual work</option>
                            <option value="001617">Caravan park owner</option>
                            <option value="001618">Caravan park worker or employee</option>
                            <option value="001619">Card shop - shop assistant or keeper - less than 10% manual work</option>
                            <option value="001620">Card shop - shop assistant or keeper - more than 10% manual work</option>
                            <option value="001621">Carer</option>
                            <option value="001622">Caretaker - living on premises</option>
                            <option value="001623">Caretaker - not living on premises</option>
                            <option value="001624">Carpenter - foreman - less than 20% light manual work</option>
                            <option value="001625">Carpenter - mining - surface worker - trade qualified - no explosives</option>
                            <option value="001626">Carpenter - oil and gas industry - trade qualified - onshore</option>
                            <option value="001627">Carpenter - trade qualified</option>
                            <option value="001628">Carpenter - unqualified - less than three years experience</option>
                            <option value="001629">Carpenter - unqualified - minimum three years experience</option>
                            <option value="001630">Carpet - shop assistant or keeper - sales only - less than 10% manual work</option>
                            <option value="001631">Carpet - shop assistant or keeper - sales only - more than 10% manual work</option>
                            <option value="001632">Carpet cleaner</option>
                            <option value="001633">Carpet or linoleum layer</option>
                            <option value="001634">Cars - shop assistant or keeper - office only - involving some light manual work</option>
                            <option value="001635">Cars - shop assistant or keeper - office only - no sales or manual work</option>
                            <option value="001636">Cars - shop assistant or keeper - yard sales</option>
                            <option value="001637">Cartographer - field work</option>
                            <option value="001638">Cartographer - no field work - not degree qualified</option>
                            <option value="001639">Cartographer - no field work - relevant degree</option>
                            <option value="001640">Cartoonist - employed full time</option>
                            <option value="001641">Cartoonist - freelance or self employed</option>
                            <option value="001642">Carver - wood - minimum three years experience</option>
                            <option value="001643">Cashier - shop assistant, shop keeper or supermarket</option>
                            <option value="001644">Casino employee - bar attendant</option>
                            <option value="001645">Casino employee - cashier</option>
                            <option value="001646">Casino employee - cleaner or maintenance</option>
                            <option value="001647">Casino employee - croupier</option>
                            <option value="001648">Casino employee - security</option>
                            <option value="001649">Casino employee - supervisor</option>
                            <option value="001650">Caterer - qualified - minimum three years experience</option>
                            <option value="001651">Caterer - unqualified - minimum three years experience</option>
                            <option value="001652">Ceiling fixer - trade qualified plasterer</option>
                            <option value="001653">Ceiling fixer - unqualified - less than three years experience</option>
                            <option value="001654">Ceiling fixer - unqualified - minimum three years experience</option>
                            <option value="001655">Cellarman</option>
                            <option value="001656">Chauffeur</option>
                            <option value="001657">Chef or cook - qualified</option>
                            <option value="001658">Chef or cook - unqualified</option>
                            <option value="001659">Chef or kitchen worker - oil and gas industry - offshore</option>
                            <option value="001660">Chemist - industrial - hazardous</option>
                            <option value="001661">Chemist - industrial - lab assistant</option>
                            <option value="001662">Chemist - industrial - lab technician - involving some light manual work - qualified</option>
                            <option value="001663">Chemist - industrial - lab technician - sedentary only - no manual work - qualified</option>
                            <option value="001664">Chemist - industrial - non-hazardous - involving some light manual work</option>
                            <option value="001665">Chemist - industrial - non-hazardous - sedentary only - no manual work</option>
                            <option value="001666">Chemist - research and analytical - relevant degree</option>
                            <option value="001667">Chemist - retail pharmacist</option>
                            <option value="001668">Chemist - retail shop assistant</option>
                            <option value="001669">Chemist shop assistant - shop assistant or keeper - less than 10% manual work</option>
                            <option value="001670">Chemist shop assistant - shop assistant or keeper - more than 10% manual work</option>
                            <option value="001671">Chief executive officer</option>
                            <option value="001672">Childcare - qualified and registered - not at home</option>
                            <option value="001673">Childcare - unqualified - not at home</option>
                            <option value="001674">Childcare - working from home</option>
                            <option value="001675">Childcare proprietor - less than 20% manual work</option>
                            <option value="001676">Childcare proprietor - more than 20% manual work</option>
                            <option value="001677">Chimney sweep</option>
                            <option value="001678">Chinaware and glassware shop - shop assistant or keeper - less than 10% manual work</option>
                            <option value="001679">Chinaware and glassware shop - shop assistant or keeper - more than 10% manual work</option>
                            <option value="001680">Chiropodist or podiatrist - qualified and registered</option>
                            <option value="001681">Chiropractor - qualified and registered</option>
                            <option value="001682">Choreographer</option>
                            <option value="001683">Claims or loss adjustor - not degree qualified</option>
                            <option value="001684">Cleaner - brick</option>
                            <option value="001685">Cleaner - carpet</option>
                            <option value="001686">Cleaner - domestic</option>
                            <option value="001687">Cleaner - mobile car - established minimum three years</option>
                            <option value="001688">Cleaner - office - industrial - school</option>
                            <option value="001689">Cleaner - proprietor</option>
                            <option value="001690">Cleaner - street</option>
                            <option value="001691">Cleaner - window, hazards, abseiling from building</option>
                            <option value="001692">Cleaner - window, home or shops - less than ten metres</option>
                            <option value="001693">Cleaner - window, outdoors - more than ten metres</option>
                            <option value="001694">Clergy - sole occupation - involving some light manual work</option>
                            <option value="001695">Clergy - sole occupation - sedentary only - no manual work</option>
                            <option value="001696">Clerk - administration only</option>
                            <option value="001697">Clothing - shop assistant or keeper - less than 10% manual work</option>
                            <option value="001698">Clothing - shop assistant or keeper - more than 10% manual work</option>
                            <option value="001699">Clothing industry - clothing or fashion designer - qualified - not working from home - involving some light manual work</option>
                            <option value="001700">Clothing industry - clothing or fashion designer - qualified - not working from home - sedentary only - no manual work</option>
                            <option value="001701">Clothing industry - clothing or fashion designer - qualified - working from home</option>
                            <option value="001702">Clothing industry - clothing or fashion designer - unqualified - not working from home</option>
                            <option value="001703">Clothing industry - dressmaker - trade qualified - not working from home</option>
                            <option value="001704">Clothing industry - dressmaker - working from home</option>
                            <option value="001705">Clothing industry - management and administration - no manual work - not degree qualified</option>
                            <option value="001706">Clothing industry - management and administration - no manual work - relevant degree</option>
                            <option value="001707">Clothing industry - pattern maker - trade qualified - not working from home</option>
                            <option value="001708">Clothing industry - pattern maker - working from home</option>
                            <option value="001709">Clothing industry - tailor - trade qualified - not working from home</option>
                            <option value="001710">Clothing industry - tailor - working from home</option>
                            <option value="001711">Clothing machinist - not working from home</option>
                            <option value="001712">Club worker - bar staff</option>
                            <option value="001713">Coach (sports) - employed by the Australian Institute of Sport</option>
                            <option value="001714">Coach (sports) - other than swimming or tennis</option>
                            <option value="001715">Coach (sports) - swimming - full time - with multiple clients or squads</option>
                            <option value="001716">Coach (sports) - tennis - full time - with multiple clients or squads</option>
                            <option value="001717">Coach builder - qualified</option>
                            <option value="001718">Coach builder - unqualified</option>
                            <option value="001719">Commentator - radio or television - minimum five years experience</option>
                            <option value="001720">Compositor</option>
                            <option value="001721">Computer - shop assistant or keeper - less than 10% manual work</option>
                            <option value="001722">Computer - shop assistant or keeper - more than 10% manual work</option>
                            <option value="001723">Computer industry - analyst or programmer or consultant - not degree qualified</option>
                            <option value="001724">Computer industry - analyst or Programmer or consultant - relevant degree or average income more than $120,000</option>
                            <option value="001725">Computer industry - sales</option>
                            <option value="001726">Computer industry - technician - manual</option>
                            <option value="001727">Computer industry - technician - no manual work</option>
                            <option value="001728">Computer industry - technician - with manual work</option>
                            <option value="001729">Computer operator - not degree qualified</option>
                            <option value="001730">Computer operator - relevant degree</option>
                            <option value="001731">Concierge 5 star hotel - hotel or motel</option>
                            <option value="001732">Concrete contractor</option>
                            <option value="001733">Concrete form worker - up to ten metres</option>
                            <option value="001734">Concrete steel Fixer - up to ten metres</option>
                            <option value="001735">Concrete worker - concreter</option>
                            <option value="001736">Concrete worker - concreter or finisher or stamper - no concreting or formwork</option>
                            <option value="001737">Confectionary - shop assistant or keeper - less than 10% manual work</option>
                            <option value="001738">Confectionary - shop assistant or keeper - more than 10% manual work</option>
                            <option value="001739">Control panel operator - less than 20% manual work</option>
                            <option value="001740">Control panel operator - more than 20% manual work</option>
                            <option value="001741">Control panel operator - no manual work</option>
                            <option value="001742">Conveyancer</option>
                            <option value="001743">Coroner</option>
                            <option value="001744">Counsellor or social worker - relevant degree</option>
                            <option value="001745">Crane driver - oil and gas industry - offshore</option>
                            <option value="001746">Crane driver - oil and gas industry - onshore</option>
                            <option value="001747">Crane labourer or hooker on</option>
                            <option value="001748">Crane operator - construction - heights less than ten metres</option>
                            <option value="001749">Crane operator - construction - heights more than ten metres</option>
                            <option value="001750">Cray fishermen - skipper only - less than 10% manual work</option>
                            <option value="001751">Cray fishermen - skipper only - more than 10% manual work</option>
                            <option value="001752">Crematorium or cemetery worker - not grave digger</option>
                            <option value="001753">Curator (museum, art gallery, library) - not degree qualified</option>
                            <option value="001754">Curator (museum, art gallery, library) - relevant degree</option>
                            <option value="001755">Curtain - shop assistant or keeper - less than 10% manual work</option>
                            <option value="001756">Curtain - shop assistant or keeper - more than 10% manual work</option>
                            <option value="001757">Curtain or blind installer</option>
                            <option value="001758">Customs agent or officer - clerical or office only</option>
                            <option value="001759">Customs agent or officer - investigations or offsite</option>
                            <option value="001760">Dairy industry - farmer or proprietor</option>
                            <option value="001761">Dairy industry - milk delivery - local rounds</option>
                            <option value="001762">Dairy industry - process worker</option>
                            <option value="001763">Dairy proprietor - owner or manager - farming industry</option>
                            <option value="001764">Dancer</option>
                            <option value="001765">Dancing instructor - full time - not working from home</option>
                            <option value="001766">Data entry operator</option>
                            <option value="001767">Dealer - money market - not degree qualified - not self employed</option>
                            <option value="001768">Dealer - money market - relevant degree - not self employed</option>
                            <option value="001769">Debt collector - field work</option>
                            <option value="001770">Debt collector - office only</option>
                            <option value="001771">Decorator or designer - interior designer - less than 20% manual work</option>
                            <option value="001772">Decorator or designer - interior designer - more than 20% manual work</option>
                            <option value="001773">Decorator or designer - interior designer - no manual work</option>
                            <option value="001774">Decorator or designer - interior designer - relevant degree - no manual work</option>
                            <option value="001775">Delicatessen - proprietor</option>
                            <option value="001776">Delicatessen - shop assistant</option>
                            <option value="001777">Delicatessen - shop assistant or keeper</option>
                            <option value="001778">Delivery person - grocery, milk</option>
                            <option value="001779">Delivery person - whitegoods, furniture etc</option>
                            <option value="001780">Demolition supervisor - no explosives</option>
                            <option value="001781">Demolition worker - no explosives</option>
                            <option value="001782">Dental worker - dental hygienist</option>
                            <option value="001783">Dental worker - dental nurse</option>
                            <option value="001784">Dental worker - dental prosthetist or technician</option>
                            <option value="001785">Dental worker - dental receptionist - no dental work</option>
                            <option value="001786">Dental worker - dentist or surgeon or periodontist</option>
                            <option value="001787">Dental worker - student - with dental work</option>
                            <option value="001788">Department store - cleaner</option>
                            <option value="001789">Department store - deliveries</option>
                            <option value="001791">Department store - detective or security</option>
                            <option value="001792">Department store - sales - lifting - no deliveries</option>
                            <option value="001793">Department store - sales - no lifting - no deliveries</option>
                            <option value="001790">Department store - shop assistant or keeper - deliveries</option>
                            <option value="001794">Department store - shop assistant or keeper - sales - no deliveries - less than 10% manual work</option>
                            <option value="001795">Department store - shop assistant or keeper - sales - no deliveries - more than 10% manual work</option>
                            <option value="001796">Dermatologist</option>
                            <option value="001797">Derrickman - oil and gas industry - offshore</option>
                            <option value="001798">Derrickman - oil and gas industry - onshore</option>
                            <option value="001799">Detective</option>
                            <option value="001800">Diamond cutter or polisher or setter - qualified</option>
                            <option value="001801">Diamond cutter or polisher or setter - unqualified - minimum three years experience</option>
                            <option value="001802">Die maker - qualified</option>
                            <option value="001803">Die maker - unqualified - minimum three years experience</option>
                            <option value="001804">Diesel mechanic - qualified</option>
                            <option value="001805">Diesel mechanic - unqualified - minimum three years experience</option>
                            <option value="001806">Dietician - qualified and registered</option>
                            <option value="001807">Director - film industry - non-studio</option>
                            <option value="001808">Director - film industry - studio only</option>
                            <option value="001809">Disability support worker</option>
                            <option value="001810">Disc jockey</option>
                            <option value="001811">Disposal store - shop assistant or keeper</option>
                            <option value="001812">Distillery worker</option>
                            <option value="001813">Diver - other - qualified</option>
                            <option value="001814">Dock worker</option>
                            <option value="001815">Doctor of medicine</option>
                            <option value="001816">Dog breeder - no racing involvement</option>
                            <option value="001817">Dog groomer - owner - minimum three years - not working from home</option>
                            <option value="001818">Dog groomer - owner - working from home</option>
                            <option value="001819">Dogman or steeplejack</option>
                            <option value="001820">Doorman - hotel or shop</option>
                            <option value="001821">Draftsperson - not degree qualified</option>
                            <option value="001822">Draftsperson - relevant degree</option>
                            <option value="001823">Draper</option>
                            <option value="001824">Dredger - harbour or river</option>
                            <option value="001825">Driller - oil and gas industry - offshore</option>
                            <option value="001826">Driller - oil and gas industry - onshore</option>
                            <option value="001827">Driller - water, oil, minerals, quarry - offshore</option>
                            <option value="001828">Driller - water, oil, minerals, quarry - onshore</option>
                            <option value="001829">Driver - ambulance officer or paramedical</option>
                            <option value="001830">Driver - armoured car</option>
                            <option value="001831">Driver - bakery van</option>
                            <option value="001832">Driver - bicycle, motorbike (including courier)</option>
                            <option value="001833">Driver - bobcat or bulldozer or backhoe driver</option>
                            <option value="001834">Driver - bread carter or vendor</option>
                            <option value="001835">Driver - bus driver - local</option>
                            <option value="001837">Driver - bus or coach driver - long distance - less than 750km per day - daily return</option>
                            <option value="001836">Driver - bus or coach driver - long distance or interstate</option>
                            <option value="001838">Driver - car - courier</option>
                            <option value="001839">Driver - concrete mixer</option>
                            <option value="001840">Driver - driving instructor - minimum two years experience</option>
                            <option value="001841">Driver - driving test examiner</option>
                            <option value="001842">Driver - forklift</option>
                            <option value="001843">Driver - garbage collector</option>
                            <option value="001844">Driver - hazardous goods (explosives, toxic chemicals)</option>
                            <option value="001845">Driver - logging driver</option>
                            <option value="001846">Driver - milkman or vendor</option>
                            <option value="001847">Driver - mining, surface worker</option>
                            <option value="001848">Driver - paramedic or ambulance officer</option>
                            <option value="001849">Driver - petrol truck driver</option>
                            <option value="001850">Driver - removalist driver</option>
                            <option value="001851">Driver - road sweeper or cleaner</option>
                            <option value="001852">Driver - taxi driver - full time owner driver</option>
                            <option value="001853">Driver - taxi driver - not owner and full time</option>
                            <option value="001854">Driver - tow truck driver</option>
                            <option value="001855">Driver - truck driver - less than 100km radius from base - local deliveries - no loading or unloading</option>
                            <option value="001856">Driver - truck driver - more than 100km radius from base - minimum two years experience - regular contracts</option>
                            <option value="001857">Driver - uber driver - full time owner driver</option>
                            <option value="001858">Driver - uber driver - not owner and full time</option>
                            <option value="001859">Driver or pallbearer - funeral parlour</option>
                            <option value="001860">Dry cleaner - employee - not proprietor</option>
                            <option value="001861">Dry cleaner - proprietor</option>
                            <option value="001862">Duty free shop - shop assistant or keeper - less than 10% manual work</option>
                            <option value="001863">Duty free shop - shop assistant or keeper - more than 10% manual work</option>
                            <option value="001864">DVD or record shop - shop assistant or keeper - less than 10% manual work</option>
                            <option value="001865">DVD or record shop - shop assistant or keeper - more than 10% manual work</option>
                            <option value="001866">Earthmoving contractor - bobcat or bulldozer or backhoe owner - established minimum three years - employees - less than 20% manual work or driving</option>
                            <option value="001867">Earthmoving contractor - bobcat or bulldozer or backhoe owner - established minimum three years - employees - less than 40% manual work or driving</option>
                            <option value="001868">Earthmoving contractor - bobcat or bulldozer or backhoe owner - established minimum three years - more than 40% manual work or driving</option>
                            <option value="001869">Editor - film industry - non-studio</option>
                            <option value="001870">Editor - not degree qualified</option>
                            <option value="001872">Editor - not degree qualified - film industry - studio only</option>
                            <option value="001871">Editor - relevant degree</option>
                            <option value="001873">Editor - relevant degree - film industry - studio only</option>
                            <option value="001874">Electrical - shop assistant or keeper - deliveries</option>
                            <option value="001875">Electrical - shop assistant or keeper - retail sales only - less than 10% manual work</option>
                            <option value="001876">Electrical - shop assistant or keeper - retail sales only - more than 10% manual work</option>
                            <option value="001877">Electrical inspector - working at heights</option>
                            <option value="001878">Electrician - building and construction - licensed</option>
                            <option value="001879">Electrician - domestic - licensed</option>
                            <option value="001880">Electrician - linesman</option>
                            <option value="001881">Electrician - mining, surface worker, trade qualified - no explosives</option>
                            <option value="001883">Electrician - oil and gas industry - trade qualified - offshore</option>
                            <option value="001882">Electrician - oil and gas industry trade qualified - onshore</option>
                            <option value="001884">Electrician - power stations - high voltage</option>
                            <option value="001885">Electrician - power stations - low voltage</option>
                            <option value="001886">Electrician - qualified - onshore</option>
                            <option value="001887">Electronic technician</option>
                            <option value="001888">Electroplater - qualified</option>
                            <option value="001889">Electroplater - unqualified - minimum three years experience</option>
                            <option value="001890">Elevator mechanic or installer - trade qualified</option>
                            <option value="001891">Elevator mechanic or installer - unqualified - minimum three years experience</option>
                            <option value="001892">Employment consultant - not degree qualified</option>
                            <option value="001893">Enameller - qualified</option>
                            <option value="001894">Enameller - unqualified - minimum three years experience</option>
                            <option value="001895">Endodontist</option>
                            <option value="001896">Engineer - film industry - non-studio</option>
                            <option value="001897">Engineer - not degree qualified - office or consulting - more than 20% on site</option>
                            <option value="001898">Engineer - not degree qualified - office or consulting - up to 20% on site</option>
                            <option value="001900">Engineer - relevant degree - manual work - less than 20% light manual</option>
                            <option value="001901">Engineer - relevant degree - manual work - more than 20% light manual</option>
                            <option value="001902">Engineer - relevant degree - office or consulting - minimal site work</option>
                            <option value="001903">Engineer - relevant degree - office or consulting - more than 20% on site</option>
                            <option value="001904">Engineer - relevant degree - underground - no explosives</option>
                            <option value="001905">Engineer - relevant degree - underground - using explosives</option>
                            <option value="001899">Engineer - relevant degree offshore - office only</option>
                            <option value="001906">Engineer (heights) - film industry - studio only</option>
                            <option value="001907">Engineer (no heights) - film industry - studio only</option>
                            <option value="001908">Estimator - office or on site</option>
                            <option value="001909">Events management - admin only</option>
                            <option value="001910">Events management - field and admin</option>
                            <option value="001912">Executive manager - oil and gas industry - office only - not degree qualified</option>
                            <option value="001911">Executive manager - oil and gas industry - office only - onshore - relevant degree</option>
                            <option value="001913">Executive managers- mining - relevant degree - office only</option>
                            <option value="001914">Explosives handling - mining, surface worker</option>
                            <option value="001915">Explosives maker</option>
                            <option value="001916">Exporter or importer - handling goods less than 20%</option>
                            <option value="001917">Exporter or importer - handling goods more than 20%</option>
                            <option value="001918">Exporter or importer - not handling goods - office only - not degree qualified</option>
                            <option value="001919">Factory worker</option>
                            <option value="001920">Farm labourer or employee - permanent employee</option>
                            <option value="001921">Farmer or grazier owner - farming industry - proprietor or owner or manager</option>
                            <option value="001922">Farming industry - proprietor or owner or manager - beef cattle</option>
                            <option value="001923">Farming industry - proprietor or owner or manager - dairy</option>
                            <option value="001924">Farming industry - proprietor or owner or manager - farmer or grazier owner</option>
                            <option value="001925">Farming industry - proprietor or owner or manager - fruit or vegetables grower or orchardist</option>
                            <option value="001926">Farming industry - proprietor or owner or manager - grain or wheat</option>
                            <option value="001927">Farming industry - proprietor or owner or manager - grape grower</option>
                            <option value="001928">Farming industry - proprietor or owner or manager - mixed farming</option>
                            <option value="001929">Farming industry - proprietor or owner or manager - orchardist - qualified</option>
                            <option value="001930">Farming industry - proprietor or owner or manager - oyster - not offshore</option>
                            <option value="001931">Farming industry - proprietor or owner or manager - oyster - offshore</option>
                            <option value="001932">Farming industry - proprietor or owner or manager - poultry or pig</option>
                            <option value="001933">Farming industry - proprietor or owner or manager - sugarcane</option>
                            <option value="001934">Farrier or blacksmith - less than three years experience</option>
                            <option value="001935">Farrier or blacksmith - minimum three years experience</option>
                            <option value="001936">Fast food or takeaway - employee</option>
                            <option value="001937">Fast food or takeaway - owner or manager</option>
                            <option value="001938">Fencing contractor - agricultural or rural</option>
                            <option value="001939">Fencing contractor - domestic or suburban</option>
                            <option value="001940">Ferry or harbour pilot</option>
                            <option value="001941">Fibre glass moulder</option>
                            <option value="001943">Film industry - non-studio - cameraman - employee (on location - Australia only)</option>
                            <option value="001944">Film industry - non-studio - cameraman - freelance (on location - Australia only)</option>
                            <option value="001942">Film industry - non-studio - cameraman (aerial - with commercial pilot)</option>
                            <option value="001945">Film industry - non-studio - director</option>
                            <option value="001946">Film industry - non-studio - editor</option>
                            <option value="001947">Film industry - non-studio - engineer</option>
                            <option value="001948">Film industry - non-studio - producer</option>
                            <option value="001949">Film industry - non-studio - sound, lighting, electrical</option>
                            <option value="001950">Film industry - studio only - cameraman - employed</option>
                            <option value="001951">Film industry - studio only - cameraman - freelance</option>
                            <option value="001952">Film industry - studio only - director</option>
                            <option value="001953">Film industry - studio only - editor - not degree qualified</option>
                            <option value="001954">Film industry - studio only - editor - relevant degree</option>
                            <option value="001955">Film industry - studio only - engineer (heights)</option>
                            <option value="001956">Film industry - studio only - engineer (no heights)</option>
                            <option value="001957">Film industry - studio only - lighting (heights)</option>
                            <option value="001958">Film industry - studio only - lighting (no heights)</option>
                            <option value="001959">Film industry - studio only - not degree qualified</option>
                            <option value="001960">Film industry - studio only - producer - relevant degree</option>
                            <option value="001961">Film industry - studio only - sound</option>
                            <option value="001962">Financial adviser or planner or consultant</option>
                            <option value="001963">Fire sprinkler installer or inspections - not qualified</option>
                            <option value="001964">Fire sprinkler installer or inspections - qualified</option>
                            <option value="001965">Firefighter - chief firefighter or station officer - admin only</option>
                            <option value="001966">Firefighter - fireman - not senior officer</option>
                            <option value="001967">Fish and chip shop - shop assistant or keeper</option>
                            <option value="001968">Fisherman - captain - manual work - estuaries and freshwater</option>
                            <option value="001969">Fisherman - captain - manual work - offshore</option>
                            <option value="001970">Fisherman - captain - no manual work - estuaries and freshwater</option>
                            <option value="001971">Fisherman - captain - no manual work - offshore</option>
                            <option value="001972">Fisherman - estuaries and freshwater</option>
                            <option value="001973">Fisherman - offshore</option>
                            <option value="001974">Fishmonger</option>
                            <option value="001975">Fitness centre - administration only</option>
                            <option value="001976">Fitness centre - instructors</option>
                            <option value="001977">Fitness centre - manager - less than 10% classes</option>
                            <option value="001978">Fitter and turner - trade qualified</option>
                            <option value="001979">Fitter and turner - unqualified - minimum three years experience</option>
                            <option value="001980">Floor coverer or layer</option>
                            <option value="001981">Floor or wall tiler - not qualified - minimum three years experience</option>
                            <option value="001982">Floor or wall tiler - trade qualified - no roof tiling or paving</option>
                            <option value="001983">Floor sander</option>
                            <option value="001984">Florist - deliveries</option>
                            <option value="001986">Florist - sales</option>
                            <option value="001985">Florist - shop assistant or keeper - deliveries</option>
                            <option value="001987">Florist - shop assistant or keeper - sales - no deliveries</option>
                            <option value="001990">Florist - shop assistant or keeper - shop proprietor - no deliveries - less than 10% manual work</option>
                            <option value="001991">Florist - shop assistant or keeper - shop proprietor - no deliveries - more than 10% manual work</option>
                            <option value="001988">Florist - shop proprietor - no deliveries - less than 10% manual work</option>
                            <option value="001989">Florist - shop proprietor - no deliveries - more than 10% manual work</option>
                            <option value="001992">Food technologist - not degree qualified</option>
                            <option value="001993">Food technologist - relevant degree</option>
                            <option value="001994">Foot wear - shop assistant or keeper - less than 10% manual work</option>
                            <option value="001995">Foot wear - shop assistant or keeper - more than 10% manual work</option>
                            <option value="001996">Footballer - professional</option>
                            <option value="001997">Foreman - builder - less than 20% light manual work</option>
                            <option value="001998">Foreman - builder - more than 20% manual work or supervising blue collar workers</option>
                            <option value="001999">Forest ranger - trade qualified</option>
                            <option value="002000">Forest ranger - unqualified</option>
                            <option value="002001">Forester - supervisory</option>
                            <option value="002002">Forester - tree felling</option>
                            <option value="002003">Forklift driver</option>
                            <option value="002004">Form worker or concreter</option>
                            <option value="002005">Foundry worker</option>
                            <option value="002006">Freezing works - employee</option>
                            <option value="002007">French polisher - qualified</option>
                            <option value="002008">French polisher - unqualified - less than three years experience</option>
                            <option value="002009">French polisher - unqualified - minimum three years experience</option>
                            <option value="002010">Fruit or vegetables grower or orchardist - farming industry - proprietor or owner or manager</option>
                            <option value="002011">Fruit packer or picker</option>
                            <option value="002012">Fruiterer or greengrocer - employee</option>
                            <option value="002013">Fruiterer or greengrocer - proprietor</option>
                            <option value="002014">Funeral parlour - director - no embalming - admin only</option>
                            <option value="002015">Funeral parlour - driver or pallbearer</option>
                            <option value="002016">Funeral parlour - embalmer</option>
                            <option value="002017">Funeral parlour - undertaker</option>
                            <option value="002018">Furnaceman</option>
                            <option value="002019">Furnishings (cushions, fabrics) - shop assistant or keeper - less than 10% manual work</option>
                            <option value="002020">Furnishings (cushions, fabrics) - shop assistant or keeper - more than 10% manual work</option>
                            <option value="002021">Furniture - shop assistant or keeper - deliveries</option>
                            <option value="002022">Furniture - shop assistant or keeper - sales only - less than 10% manual work</option>
                            <option value="002023">Furniture - shop assistant or keeper - sales only - more than 10% manual work</option>
                            <option value="002024">Furniture dealer - deliveries</option>
                            <option value="002025">Furniture dealer - sales - less than 20% light manual work</option>
                            <option value="002026">Furniture dealer - sales - more than 20% light manual work</option>
                            <option value="002027">Furniture dealer - sales - no manual</option>
                            <option value="002028">Furniture removalist</option>
                            <option value="002029">Furniture restorer - trade qualified</option>
                            <option value="002030">Furniture restorer - unqualified - less than three years experience</option>
                            <option value="002031">Furniture restorer - unqualified - minimum three years experience</option>
                            <option value="002032">Furrier</option>
                            <option value="002033">Ganger - railway workers</option>
                            <option value="002034">Garage or service station - console operator</option>
                            <option value="002035">Garage or service station - mechanic - trade qualified</option>
                            <option value="002036">Garage or service station - proprietor</option>
                            <option value="002037">Garage or service station - pump attendant or operator</option>
                            <option value="002038">Garbage collector or driver</option>
                            <option value="002039">Gardener - trade qualified</option>
                            <option value="002040">Gardener - unqualified</option>
                            <option value="002041">Gas fitter - trade qualified</option>
                            <option value="002042">Gas fitter - unqualified - less than three years experience</option>
                            <option value="002043">Gas fitter - unqualified - minimum three years experience</option>
                            <option value="002044">Gas meter reader or tester</option>
                            <option value="002045">Gas pipe layer</option>
                            <option value="002046">General definition workers - oil and gas industry - onshore</option>
                            <option value="002047">Geologist or geophysicist - field work - no underground - no explosives</option>
                            <option value="002048">Geologist or geophysicist - field work - no underground - using explosives</option>
                            <option value="002049">Geologist or geophysicist - field work - underground - no explosives</option>
                            <option value="002050">Geologist or geophysicist - field work - underground - using explosives</option>
                            <option value="002051">Geologist or geophysicist - offshore - qualified - office only</option>
                            <option value="002052">Geologist or geophysicist - offshore - qualified - other</option>
                            <option value="002053">Geologist or geophysicist - relevant degree - office only</option>
                            <option value="002054">Geologist or geophysicist - up to 20% manual</option>
                            <option value="002055">Geologist or geophysicist - using explosives</option>
                            <option value="002056">Gift shop - shop assistant or keeper - less than 10% manual work</option>
                            <option value="002057">Gift shop - shop assistant or keeper - more than 10% manual work</option>
                            <option value="002058">Glass blower</option>
                            <option value="002059">Glazier - trade qualified</option>
                            <option value="002060">Glazier - unqualified - minimum three years experience</option>
                            <option value="002061">Goldsmith - trade qualified</option>
                            <option value="002062">Goldsmith - unqualified - minimum three years experience</option>
                            <option value="002063">Golf professional - shop and tuition</option>
                            <option value="002064">Golf professional - shop only</option>
                            <option value="002065">Golf professional - tournaments</option>
                            <option value="002066">Government employees - office only - not degree qualified</option>
                            <option value="002067">Government employees - office only - relevant degree</option>
                            <option value="002068">Grain or wheat proprietor or owner or manager - farming industry</option>
                            <option value="002069">Grape grower - farming industry - proprietor or owner or manager</option>
                            <option value="002070">Graphic designer - not qualified</option>
                            <option value="002071">Graphic designer - qualified - not working from home - not degree qualified</option>
                            <option value="002072">Graphic designer - qualified - working from home</option>
                            <option value="002073">Graphic designer - relevant degree - not working from home</option>
                            <option value="002074">Grave digger</option>
                            <option value="002075">Greenkeeper or groundsman - qualified</option>
                            <option value="002076">Greenkeeper or groundsman - unqualified</option>
                            <option value="002077">Greyhound trainer</option>
                            <option value="002078">Grocer</option>
                            <option value="002079">Ground staff - aviation industry - cleaner</option>
                            <option value="002080">Ground staff - aviation industry - refuellers</option>
                            <option value="002081">Ground staff - aviation industry - security - unarmed</option>
                            <option value="002082">Guard - railway workers</option>
                            <option value="002083">Guest house proprietor or bed and breakfast proprietor</option>
                            <option value="002084">Gunsmith</option>
                            <option value="002085">Gynaecologist</option>
                            <option value="002086">Gyprock fixer - trade qualified</option>
                            <option value="002087">Gyprock fixer - unqualified - less than three years experience</option>
                            <option value="002088">Gyprock fixer - unqualified - minimum three years experience</option>
                            <option value="002089">Haberdasher</option>
                            <option value="002090">Hairdresser or barber</option>
                            <option value="002091">Handyman</option>
                            <option value="002092">Harbour pilot</option>
                            <option value="002093">Hardware - shop assistant or keeper - administration only</option>
                            <option value="002094">Hardware - shop assistant or keeper - deliveries</option>
                            <option value="002095">Hardware - shop assistant or keeper - sales</option>
                            <option value="002096">Hardware retailer</option>
                            <option value="002097">Health and safety officer - less than 20% manual</option>
                            <option value="002098">Health and safety officer - more than 20% manual</option>
                            <option value="002099">Health food - shop assistant or keeper - less than 10% manual work</option>
                            <option value="002100">Health food - shop assistant or keeper - more than 10% manual work</option>
                            <option value="002101">Health inspector</option>
                            <option value="002102">Helicopter pilot or crew - TV or radio</option>
                            <option value="002103">Herbalist</option>
                            <option value="002104">Home duties - not returning to work in the next 24 months</option>
                            <option value="002105">Home duties - returning to work in the next 24 months</option>
                            <option value="002106">Homeopath - not qualified or working from home</option>
                            <option value="002107">Homeopath - qualified - not working from home</option>
                            <option value="002108">Horse riding instructor</option>
                            <option value="002109">Horse strappers or trainers</option>
                            <option value="002110">Horticulturalist - other</option>
                            <option value="002111">Horticulturalist - qualified (university or TAFE course)</option>
                            <option value="002112">Hospital orderly or porter</option>
                            <option value="002113">Hotel or motel - administration only</option>
                            <option value="002114">Hotel or motel - bellboy</option>
                            <option value="002115">Hotel or motel - concierge 5 star hotel</option>
                            <option value="002116">Hotel or motel - laundry staff</option>
                            <option value="002117">Hotel or motel - maid - minimum two years experience</option>
                            <option value="002118">Hotel or motel - maintenance - qualified</option>
                            <option value="002119">Hotel or motel - manager or proprietor - and no manual work</option>
                            <option value="002120">Hotel or motel - porter</option>
                            <option value="002121">Hotel or motel - security - armed</option>
                            <option value="002122">Hotel or motel - security - unarmed</option>
                            <option value="002123">House reblocker or restumper</option>
                            <option value="002124">Human resources - manager - not degree qualified</option>
                            <option value="002125">Human resources - manager - relevant degree</option>
                            <option value="002126">Human resources officer - not degree qualified</option>
                            <option value="002127">Human resources officer - relevant degree or average income more than $120,000</option>
                            <option value="002128">Hydraulic hose fitter</option>
                            <option value="002129">Hypnotherapist - qualified Member of Australian Hypnotherapist Society</option>
                            <option value="002130">Hypnotherapist - unqualified or not Member of Australian Hypnotherapist Society</option>
                            <option value="002131">Ice cream parlour - shop assistant or keeper</option>
                            <option value="002132">Inspector - ticket - railway workers</option>
                            <option value="002133">Instrument maker - qualified</option>
                            <option value="002134">Instrument maker - unqualified - minimum three years experience</option>
                            <option value="002135">Insulation installer - minimum three years experience</option>
                            <option value="002136">Insurance agent or broker or planner or consultant</option>
                            <option value="002137">Insurance assessor or adjustor</option>
                            <option value="002138">Insurance clerk</option>
                            <option value="002139">Insurance investigator - no surveillance work - administration only</option>
                            <option value="002140">Insurance investigator - surveillance work</option>
                            <option value="002141">Insurance management or executive - not degree qualified</option>
                            <option value="002142">Insurance management or executive - relevant degree</option>
                            <option value="002143">Interior decorator or designer - less than 20% manual work</option>
                            <option value="002144">Interior decorator or designer - more than 20% manual work</option>
                            <option value="002145">Interior decorator or designer - not degree qualified</option>
                            <option value="002146">Interior decorator or designer - relevant degree</option>
                            <option value="002147">Interpreter - not degree qualified - not working from home</option>
                            <option value="002148">Interpreter - relevant degree - not working from home</option>
                            <option value="002149">Investment banker - not degree qualified</option>
                            <option value="002150">Investment banker - relevant degree</option>
                            <option value="002151">Iridologist - qualified - not working from home</option>
                            <option value="002152">Iridologist - unqualified or working from home</option>
                            <option value="002153">Ironing contractor</option>
                            <option value="002154">Ironmonger</option>
                            <option value="002155">Irrigation or drainage worker</option>
                            <option value="002156">Jackeroo or jillaroo</option>
                            <option value="002157">Jeweller - sales retail store - no manual duties</option>
                            <option value="002158">Jeweller - sales retail store - performing up to 10% light manual duties</option>
                            <option value="002159">Jeweller - trade qualified - cutter, polisher, repairs</option>
                            <option value="002160">Jeweller - unqualified cutter or polisher - minimum two years experience</option>
                            <option value="002161">Jockey - flat racing</option>
                            <option value="002162">Jockey - harness racing</option>
                            <option value="002163">Jockey - steeple or jump racing</option>
                            <option value="002164">Joiner - trade qualified</option>
                            <option value="002165">Joiner - unqualified - minimum three years experience</option>
                            <option value="002168">Journalist - freelance - not at home - no overseas assignments or unusual hazards - regular work</option>
                            <option value="002166">Journalist - not degree qualified - employed - no overseas assignments or unusual hazards</option>
                            <option value="002167">Journalist - relevant degree - employed - no overseas assignments or unusual hazards</option>
                            <option value="002169">Judge</option>
                            <option value="002170">Judges clerk</option>
                            <option value="002171">Juice vendor - shop assistant or keeper</option>
                            <option value="002172">Kennel or cat homes - owner or proprietor</option>
                            <option value="002173">Kennel or cat homes - worker</option>
                            <option value="002174">Kiln operator</option>
                            <option value="002175">Laboratory assistant</option>
                            <option value="002176">Laboratory technician</option>
                            <option value="002177">Laboratory technician - oil and gas industry - offshore</option>
                            <option value="002178">Labourer</option>
                            <option value="002179">Labourer - oil and gas industry - onshore</option>
                            <option value="002180">Labourer or tool pusher - oil and gas industry - offshore</option>
                            <option value="002181">Landscape worker - trade qualified</option>
                            <option value="002182">Landscape worker - unqualified or less than three years experience</option>
                            <option value="002183">Lathe operator - not trade qualified</option>
                            <option value="002184">Lathe operator - trade qualified</option>
                            <option value="002185">Laundry or laundromat - owner</option>
                            <option value="002186">Laundry or laundromat - staff</option>
                            <option value="002187">Laundry staff - hotel or motel</option>
                            <option value="002188">Law clerk</option>
                            <option value="002189">Lawn moving sales - shop assistant or keeper</option>
                            <option value="002190">Lawn mowing contractor - less than three years experience</option>
                            <option value="002191">Lawn mowing contractor - minimum three years experience</option>
                            <option value="002192">Lawn mowing contractor - sales or service</option>
                            <option value="002193">Lawyer</option>
                            <option value="002194">Lecturer - university or equivalent</option>
                            <option value="002195">Librarian</option>
                            <option value="002196">Life guard (employed)</option>
                            <option value="002197">Light fittings - shop assistant or keeper - less than 10% manual work</option>
                            <option value="002198">Light fittings - shop assistant or keeper - more than 10% manual work</option>
                            <option value="002199">Lighting technician (heights) - film industry - studio only</option>
                            <option value="002200">Lighting technician (no heights) - film industry - studio only</option>
                            <option value="002201">Linesperson - electrical or telephone - heights over ten metres</option>
                            <option value="002202">Linesperson - electrical or telephone - heights up to ten metres</option>
                            <option value="002203">Livestock broker or buyer or dealer - including manual</option>
                            <option value="002204">Livestock broker or buyer or dealer - no manual</option>
                            <option value="002205">Locksmith</option>
                            <option value="002206">Logging contractor or log hauler</option>
                            <option value="002207">Logistics manager - more than 20% light manual duties or on site or supervising blue collar workers</option>
                            <option value="002208">Logistics manager - office only - not degree qualified</option>
                            <option value="002209">Logistics manager - office only - relevant degree</option>
                            <option value="002210">Logistics manager - up to 10% light manual duties or on site or supervising blue collar workers</option>
                            <option value="002211">Logistics manager - up to 20% light manual duties or on site or supervising blue collar workers</option>
                            <option value="002212">Lumberjack</option>
                            <option value="002213">Machinery sales or hire</option>
                            <option value="002214">Machinery sales or hire - shop assistant or keeper</option>
                            <option value="002215">Machinist or machine operator - not trade qualified</option>
                            <option value="002216">Machinist or machine operator - trade qualified</option>
                            <option value="002217">Magistrate</option>
                            <option value="002218">Maid - hotel or motel - minimum two years experience</option>
                            <option value="002219">Maintenance - hotel or motel - qualified</option>
                            <option value="002220">Maintenance staff - railway workers</option>
                            <option value="002222">Management and administration - aviation - office duties only - not degree qualified</option>
                            <option value="002221">Management and administration - aviation - office duties only - relevant degree or average income more than $120,000</option>
                            <option value="002223">Management or clerical only - oil and gas industry - onshore - not degree qualified</option>
                            <option value="002224">Management or clerical only - oil and gas industry - onshore - relevant degree</option>
                            <option value="002225">Manager - fitness centre - less than 10% classes</option>
                            <option value="002226">Manager - logistics - up to 10% light manual duties or on site or supervising blue collar workers</option>
                            <option value="002227">Manager - logistics - up to 20% light manual duties or on site or supervising blue collar workers</option>
                            <option value="002228">Manager - more than 10% light manual duties or on site or supervising blue collar workers</option>
                            <option value="002229">Manager - office or administration only - not degree qualified</option>
                            <option value="002230">Manager - office or administration only - relevant degree or average income more than $120,000</option>
                            <option value="002231">Manager - up to 10% light manual duties or on site or supervising blue collar workers</option>
                            <option value="002232">Manager - warehouse - less than 10% manual work</option>
                            <option value="002233">Manager - warehouse - less than 20% manual work</option>
                            <option value="002234">Manager - warehouse - more than 20% manual work</option>
                            <option value="002235">Manager or proprietor - hotel or motel - and no manual work</option>
                            <option value="002236">Manicurist - salon only - not working from home</option>
                            <option value="002237">Manicurist - working from home or mobile</option>
                            <option value="002238">Marina owner - no manual work</option>
                            <option value="002239">Marine crew - not ocean going</option>
                            <option value="002240">Marine crew - ocean going in Australian waters</option>
                            <option value="002241">Market gardener - less than three years experience</option>
                            <option value="002242">Market gardener - minimum three years experience</option>
                            <option value="002243">Market researcher or analyst - not degree qualified</option>
                            <option value="002244">Market researcher or analyst- relevant degree</option>
                            <option value="002245">Market stall holder</option>
                            <option value="002246">Marketing manager- relevant degree</option>
                            <option value="002247">Marketing or sales manager - not degree qualified</option>
                            <option value="002248">Marketing or sales manager - relevant degree or average income more than $120,000</option>
                            <option value="002249">Martial arts instructor</option>
                            <option value="002250">Masseur - qualified - working in recognised centre or salon only</option>
                            <option value="002251">Masseur - unqualified or working from home</option>
                            <option value="002252">Meat industry - boner</option>
                            <option value="002253">Meat industry - inspector</option>
                            <option value="002254">Meat industry - packer</option>
                            <option value="002255">Meat industry - supervisor - no manual</option>
                            <option value="002256">Mechanic - mining, surface worker - trade qualified - no explosives</option>
                            <option value="002257">Mechanic - not trade qualified with minimum of 3 years experience</option>
                            <option value="002258">Mechanic - oil and gas industry - trade qualified - onshore</option>
                            <option value="002259">Mechanic - trade qualified</option>
                            <option value="002260">Medical practitioner</option>
                            <option value="002261">Medical practitioner - student</option>
                            <option value="002262">Merchant banker</option>
                            <option value="002263">Metallurgist - qualified - no underground work</option>
                            <option value="002264">Meteorologist</option>
                            <option value="002265">Meter reader</option>
                            <option value="002266">Midwife - registered</option>
                            <option value="002267">Mill operator - mining, surface worker</option>
                            <option value="002268">Mining - clerical or office work only - not degree qualified</option>
                            <option value="002269">Mining - clerical or office work only - relevant degree</option>
                            <option value="002270">Mining - manager - no manual work - not degree qualified</option>
                            <option value="002271">Mining - manager - no manual work - relevant degree or average income more than $120,000</option>
                            <option value="002272">Mining - plant operators - open cut mines only</option>
                            <option value="002273">Mining - quarry worker - no explosives</option>
                            <option value="002274">Mining - safety officer</option>
                            <option value="002275">Mining - surface worker - bogger operator</option>
                            <option value="002276">Mining - surface worker - carpenter - trade qualified no explosives</option>
                            <option value="002277">Mining - surface worker - driver</option>
                            <option value="002278">Mining - surface worker - electrician - trade qualified - no explosives</option>
                            <option value="002279">Mining - surface worker - explosives handling</option>
                            <option value="002280">Mining - surface worker - mechanic - trade qualified - no explosives</option>
                            <option value="002281">Mining - surface worker - mill operator</option>
                            <option value="002282">Mining - surface worker - not trade qualified - explosives handling</option>
                            <option value="002283">Mining - surface worker - not trade qualified - no explosives</option>
                            <option value="002284">Mining - surface worker - welder - trade qualified - no explosives</option>
                            <option value="002285">Mining - underground - explosives handling</option>
                            <option value="002286">Mining - underground - not trade qualified - explosives handling</option>
                            <option value="002287">Mining - underground - not trade qualified - no explosives</option>
                            <option value="002289">Mining - underground - trade qualified - explosives handling</option>
                            <option value="002288">Mining - underground - trade qualified (e.g. welder, carpenter, electrician, mechanic) - no explosives</option>
                            <option value="002290">Minister of religion - sole occupation</option>
                            <option value="002291">Mixed farming - proprietor or owner or manager</option>
                            <option value="002292">Mobile coffee van operator or owner - established minimum three years</option>
                            <option value="002293">Model</option>
                            <option value="002294">Mortgage broker</option>
                            <option value="002295">Motor mechanic - trade qualified</option>
                            <option value="002296">Motor mechanic - unqualified</option>
                            <option value="002297">Motor vehicle - assembly worker</option>
                            <option value="002298">Motor vehicle - parts interpreter</option>
                            <option value="002299">Motor vehicle accessories and spare parts - shop assistant or keeper</option>
                            <option value="002300">Moulder or casting workers - qualified</option>
                            <option value="002301">Moulder or casting workers - unqualified</option>
                            <option value="002302">Muffler fitter - less than three years experience</option>
                            <option value="002303">Muffler fitter - minimum three years experience</option>
                            <option value="002304">Museum curator - not degree qualified</option>
                            <option value="002305">Museum curator - relevant degree</option>
                            <option value="002306">Musical instruments - shop assistant or keeper - deliveries</option>
                            <option value="002307">Musical instruments - shop assistant or keeper - no deliveries - less than 10% manual work</option>
                            <option value="002308">Musical instruments - shop assistant or keeper - no deliveries - more than 10% manual work</option>
                            <option value="002309">Musician</option>
                            <option value="002310">Musician - orchestra - full time - salaried</option>
                            <option value="002311">Nanny</option>
                            <option value="002312">Naturopath - not qualified - working from home</option>
                            <option value="002313">Naturopath - qualified - not working from home</option>
                            <option value="002314">Neurologist</option>
                            <option value="002315">News reader</option>
                            <option value="002317">Newsagent - counter sales duties - involving some light manual work</option>
                            <option value="002316">Newsagent - counter sales duties only - sedentary only - no manual work</option>
                            <option value="002320">Newsagent - paper deliveries</option>
                            <option value="002318">Newsagent - shop assistant or keeper - no deliveries - less than 10% manual work</option>
                            <option value="002319">Newsagent - shop assistant or keeper - no deliveries - more than 10% manual work</option>
                            <option value="002321">Newspaper compositor</option>
                            <option value="002322">Newspaper editor - not degree qualified</option>
                            <option value="002323">Newspaper editor - relevant degree</option>
                            <option value="002324">Nurse - assistant or aide</option>
                            <option value="002325">Nurse - clinical</option>
                            <option value="002326">Nurse - director of nursing - no manual duties - relevant degree</option>
                            <option value="002327">Nurse - educator - classroom only - relevant degree</option>
                            <option value="002328">Nurse - enrolled</option>
                            <option value="002329">Nurse - intellectual disability or psychiatric</option>
                            <option value="002330">Nurse - registered</option>
                            <option value="002331">Nurse - student</option>
                            <option value="002332">Nurse - theatre</option>
                            <option value="002333">Nurse - unit managers - no manual duties</option>
                            <option value="002334">Nursery - qualified nurseryman</option>
                            <option value="002335">Nursery - retail employee - less than 20% manual work</option>
                            <option value="002336">Nursery - unqualified nurseryman</option>
                            <option value="002337">Nursery retail - shop assistant or keeper - less than 20% manual work</option>
                            <option value="002338">Nutritionist</option>
                            <option value="002339">Obstetrician</option>
                            <option value="002340">Occupational health and safety officer - less than 20% manual</option>
                            <option value="002341">Occupational health and safety officer - more than 20% manual</option>
                            <option value="002342">Occupational therapist</option>
                            <option value="002343">Office supply - shop assistant or keeper - less than 10% manual work</option>
                            <option value="002344">Office supply - shop assistant or keeper - more than 10% manual work</option>
                            <option value="002345">Office worker - airline staff of major airlines only</option>
                            <option value="002346">Office worker - airline staff of minor airlines only</option>
                            <option value="002347">Office worker - airline staff of minor or charter airlines</option>
                            <option value="002348">Oil and gas industry - offshore - chef or kitchen worker</option>
                            <option value="002349">Oil and gas industry - offshore - crane driver</option>
                            <option value="002350">Oil and gas industry - offshore - derrickman</option>
                            <option value="002351">Oil and gas industry - offshore - driller</option>
                            <option value="002352">Oil and gas industry - offshore - electrician - trade qualified</option>
                            <option value="002353">Oil and gas industry - offshore - laboratory technician</option>
                            <option value="002354">Oil and gas industry - offshore - labourer or tool pusher</option>
                            <option value="002355">Oil and gas industry - offshore - rigger</option>
                            <option value="002356">Oil and gas industry - offshore - supervisor - office duties only</option>
                            <option value="002357">Oil and gas industry - offshore - supervisor - other</option>
                            <option value="002358">Oil and gas industry - onshore - carpenter - trade qualified</option>
                            <option value="002359">Oil and gas industry - onshore - crane driver</option>
                            <option value="002360">Oil and gas industry - onshore - derrickman</option>
                            <option value="002361">Oil and gas industry - onshore - driller</option>
                            <option value="002362">Oil and gas industry - onshore - electrician - trade qualified</option>
                            <option value="002364">Oil and gas industry - onshore - executive manager - office only - not degree qualified</option>
                            <option value="002363">Oil and gas industry - onshore - executive manager office only - relevant degree</option>
                            <option value="002365">Oil and gas industry - onshore - general definition workers</option>
                            <option value="002366">Oil and gas industry - onshore - labourer</option>
                            <option value="002367">Oil and gas industry - onshore - management or clerical only - not degree qualified</option>
                            <option value="002368">Oil and gas industry - onshore - management or clerical only - relevant degree</option>
                            <option value="002369">Oil and gas industry - onshore - mechanic - trade qualified</option>
                            <option value="002370">Oil and gas industry - onshore - repairmen or trench workers</option>
                            <option value="002371">Oil and gas industry - onshore - rigger - heights over ten metres</option>
                            <option value="002372">Oil and gas industry - onshore - rigger - heights up to ten metres</option>
                            <option value="002373">Oil and gas industry - onshore - supervisor - office duties only</option>
                            <option value="002374">Oil and gas industry - onshore - supervisor - other</option>
                            <option value="002375">Oil and gas industry - onshore - welder - trade qualified</option>
                            <option value="002376">Ophthalmologist</option>
                            <option value="002377">Optician or optical dispenser - not degree qualified</option>
                            <option value="002378">Optician or optical dispenser - relevant degree</option>
                            <option value="002379">Optometrist</option>
                            <option value="002380">Orchardist - proprietor or owner only</option>
                            <option value="002381">Orchardist - proprietor or owner or manager - qualified - farming industry</option>
                            <option value="002382">Orthodontist</option>
                            <option value="002383">Orthopaedic surgeon</option>
                            <option value="002384">Osteopath</option>
                            <option value="002385">Oyster farmer or packer - not offshore</option>
                            <option value="002386">Oyster farmer or packer - offshore</option>
                            <option value="002387">Oyster farming - proprietor or owner or manager - not offshore</option>
                            <option value="002388">Oyster farming - proprietor or owner or manager - offshore</option>
                            <option value="002389">Packer factory</option>
                            <option value="002390">Paediatrician</option>
                            <option value="002391">Paint and wallpaper - shop assistant or keeper</option>
                            <option value="002393">Painter - trade qualified - heights up to ten metres</option>
                            <option value="002392">Painter - trade qualified or unqualified - heights over ten metres</option>
                            <option value="002394">Painter - unqualified - less than three years experience - heights up to ten metres</option>
                            <option value="002395">Painter - unqualified - more than three years experience - heights up to ten metres</option>
                            <option value="002396">Panel beater - not qualified</option>
                            <option value="002397">Panel beater - trade qualified</option>
                            <option value="002398">Paper or pulp industry - skilled</option>
                            <option value="002399">Paper or pulp industry - unskilled</option>
                            <option value="002400">Paralegal - not degree qualified</option>
                            <option value="002401">Paralegal - relevant degree or average income more than $120,000</option>
                            <option value="002402">Paramedic</option>
                            <option value="002403">Paramedic or ambulance officer or driver</option>
                            <option value="002404">Parking station attendant - cashier only</option>
                            <option value="002405">Parking station attendant - parking cars</option>
                            <option value="002406">Parole officer - office only</option>
                            <option value="002407">Parts interpreter - motor vehicle</option>
                            <option value="002408">Pathologist</option>
                            <option value="002409">Patrolman - security - armed</option>
                            <option value="002410">Patrolman - security - unarmed</option>
                            <option value="002411">Paver</option>
                            <option value="002412">Pawnbroker - minimum three years experience</option>
                            <option value="002413">Periodontist</option>
                            <option value="002414">Personal assistant - not working from home - administration only</option>
                            <option value="002415">Personal assistant - working from home - administration only</option>
                            <option value="002416">Personal trainer - gym only</option>
                            <option value="002417">Personnel consultant - not degree qualified</option>
                            <option value="002418">Personnel consultant - relevant degree or average income more than $120,000</option>
                            <option value="002419">Pest controller or exterminator - heights over ten metres</option>
                            <option value="002420">Pest controller or exterminator - heights up to ten metres</option>
                            <option value="002421">Pet shop - shop assistant or keeper</option>
                            <option value="002422">Pharmacist</option>
                            <option value="002423">Phlebotomist</option>
                            <option value="002424">Photocopier technician or repairman</option>
                            <option value="002425">Photographer - aerial - commercial pilot</option>
                            <option value="002426">Photographer - employee - Australia only - no aviation - no hazardous activities</option>
                            <option value="002427">Photographer - freelance - Australia only - no aviation - no hazardous activities</option>
                            <option value="002428">Photographer - press or TV news photographer - Australia only</option>
                            <option value="002429">Photographer - studio - weddings and private functions - local only</option>
                            <option value="002430">Photographer - studio only - less than 10% manual work</option>
                            <option value="002431">Photographer - studio only - more than 10% manual work</option>
                            <option value="002432">Photographic - proprietor or owner or manager - repairs</option>
                            <option value="002433">Photographic - proprietor or owner or manager - sales - less than 10% manual work</option>
                            <option value="002434">Photographic - proprietor or owner or manager - sales - more than 10% manual work</option>
                            <option value="002435">Physicist</option>
                            <option value="002436">Physiologist</option>
                            <option value="002437">Physiotherapist - not degree qualified</option>
                            <option value="002438">Physiotherapist - relevant degree</option>
                            <option value="002439">Piano tuner</option>
                            <option value="002440">Picture framer</option>
                            <option value="002441">Pilates or yoga instructor - fulltime - not from home</option>
                            <option value="002442">Pilot, aircrew, flight attendant - airline staff of major airlines only</option>
                            <option value="002443">Pilot, aircrew, flight attendant - airline staff of minor or charter airlines</option>
                            <option value="002444">Plant operator - heavy machinery or factory</option>
                            <option value="002445">Plant operator - office only - control room - no manual work</option>
                            <option value="002446">Plant operators - mining - open cut mines only</option>
                            <option value="002447">Plasterer - trade qualified or minimum three years experience</option>
                            <option value="002448">Plasterer - unqualified or less than three years experience</option>
                            <option value="002449">Plumber - roof plumber - qualified or unqualified - minimum three years experience</option>
                            <option value="002450">Plumber - trade qualified</option>
                            <option value="002451">Plumber - unqualified - less than three years experience</option>
                            <option value="002452">Podiatrist</option>
                            <option value="002453">Police - all officers</option>
                            <option value="002454">Police - clerical - non officer (past or present) - not degree qualified</option>
                            <option value="002455">Pool builder - above ground - qualified</option>
                            <option value="002456">Pool builder - in ground - concrete - licensed</option>
                            <option value="002457">Pool builder - in ground - fibreglass</option>
                            <option value="002458">Pool cleaner</option>
                            <option value="002459">Porter - hotel or motel</option>
                            <option value="002460">Porter - railway workers</option>
                            <option value="002461">Post office - clerical - counter staff</option>
                            <option value="002462">Post office - mail contractor or sorter or delivery</option>
                            <option value="002463">Post office - postman - not using motorbike</option>
                            <option value="002464">Post office - postman - using motorbike</option>
                            <option value="002465">Potter - commercial - qualified - office only - not working from home</option>
                            <option value="002466">Potter - commercial - unqualified - working from home</option>
                            <option value="002467">Poultry farmer - manager only</option>
                            <option value="002468">Poultry farmer - other than manager</option>
                            <option value="002469">Poultry or pig - proprietor or owner or manager - farming industry</option>
                            <option value="002470">Priest - sole occupation</option>
                            <option value="002471">Printer - bookbinder or compositor</option>
                            <option value="002472">Printer - editor or proof-reader - not degree qualified</option>
                            <option value="002473">Printer - editor or proof-reader - relevant degree</option>
                            <option value="002474">Printer - lithographer</option>
                            <option value="002475">Printer - trade qualified</option>
                            <option value="002476">Printer - unqualified - minimum three years experience</option>
                            <option value="002477">Prison - clerical - non officer</option>
                            <option value="002478">Prison warden or officer</option>
                            <option value="002479">Private investigator - well established - minimum three years experience - unarmed</option>
                            <option value="002480">Probation officer - office only</option>
                            <option value="002481">Process worker</option>
                            <option value="002482">Producer - film industry - non-studio</option>
                            <option value="002483">Producer - film industry - not degree qualified - studio only</option>
                            <option value="002484">Producer - film industry - relevant degree studio only</option>
                            <option value="002485">Production line worker</option>
                            <option value="002486">Professional sportsperson</option>
                            <option value="002487">Professor</option>
                            <option value="002489">Project manager - no manual work and minimal site visits - not degree qualified</option>
                            <option value="002488">Project manager - no manual work and minimal site visits - relevant degree or average income more than $120,000</option>
                            <option value="002490">Property developer or investor - full time - involved with project management and actual development - not self employed</option>
                            <option value="002491">Property developer or investor - no involvement with project management or in actual development - not self employed</option>
                            <option value="002492">Property manager or caretaker - living on premises</option>
                            <option value="002493">Property manager or caretaker - not living on premises</option>
                            <option value="002494">Property rental manager - involving some light manual work</option>
                            <option value="002495">Property rental manager - sedentary only - no manual work</option>
                            <option value="002496">Psychiatrist</option>
                            <option value="002497">Psychologist</option>
                            <option value="002498">Public relations officer</option>
                            <option value="002499">Publisher - not degree qualified</option>
                            <option value="002500">Publisher - relevant degree</option>
                            <option value="002501">Quantity surveyor - consulting or office work only - relevant degree</option>
                            <option value="002502">Quantity surveyor - office duties only - not degree qualified</option>
                            <option value="002503">Quantity surveyor - qualified - other</option>
                            <option value="002504">Quarries - blaster</option>
                            <option value="002505">Quarries - crusher man</option>
                            <option value="002506">Quarries - jackhammer operator</option>
                            <option value="002507">Quarries - licensed tradesman (e.g. carpenter, electrician, mechanic) - explosives handling</option>
                            <option value="002508">Quarries - licensed tradesman (e.g. carpenter, electrician, mechanic) - no explosives</option>
                            <option value="002509">Quarries - semi-skilled - plant operator</option>
                            <option value="002510">Quarry worker - mining - no explosives</option>
                            <option value="002511">Radio worker - director or producer - not degree qualified</option>
                            <option value="002512">Radio worker - director or producer - relevant degree</option>
                            <option value="002513">Radio worker - sound engineer - qualified</option>
                            <option value="002514">Radio worker - technician</option>
                            <option value="002515">Radiographer</option>
                            <option value="002516">Radiologist</option>
                            <option value="002517">Railway workers - booking officer</option>
                            <option value="002518">Railway workers - ganger</option>
                            <option value="002519">Railway workers - guard</option>
                            <option value="002520">Railway workers - inspector - ticket</option>
                            <option value="002521">Railway workers - maintenance staff</option>
                            <option value="002522">Railway workers - porter</option>
                            <option value="002523">Railway workers - signalman</option>
                            <option value="002524">Railway workers - station master</option>
                            <option value="002525">Railway workers - ticket collector</option>
                            <option value="002526">Railway workers - train or tram driver</option>
                            <option value="002527">Ranger</option>
                            <option value="002530">Real estate agent - administration - involving some light manual work</option>
                            <option value="002528">Real estate agent - administration only or sales - no manual work - average income less than 120,000</option>
                            <option value="002529">Real estate agent - administration only or sales - no manual work - average income more than $120,000</option>
                            <option value="002531">Receptionist</option>
                            <option value="002532">Record shop - shop assistant or keeper - less than 10% manual work</option>
                            <option value="002533">Record shop - shop assistant or keeper - more than 10% manual work</option>
                            <option value="002534">Reflexologist - qualified - Australian registered - not working from home</option>
                            <option value="002535">Refrigeration mechanic - trade qualified</option>
                            <option value="002536">Refrigeration mechanic - unqualified - minimum three years experience</option>
                            <option value="002537">Rehabilitation consultant</option>
                            <option value="002538">Removalist</option>
                            <option value="002539">Renderer - cement</option>
                            <option value="002540">Repairmen or trench workers - oil and gas industry - onshore</option>
                            <option value="002541">Reporter - employed - no overseas work - office only - not degree qualified</option>
                            <option value="002542">Reporter - employed - no overseas work - office only - relevant degree</option>
                            <option value="002543">Reporter - self employed or overseas work</option>
                            <option value="002544">Repossession agent</option>
                            <option value="002545">Residential care worker</option>
                            <option value="002546">Restaurant - kitchen hand</option>
                            <option value="002547">Restaurant - maitre de</option>
                            <option value="002548">Restaurant - waitress or waiter</option>
                            <option value="002549">Restaurant owner - less than 20% manual work</option>
                            <option value="002550">Restaurant owner - more than 20% manual work</option>
                            <option value="002551">Restaurant owner - no manual work</option>
                            <option value="002554">Rigger - oil and gas industry - offshore</option>
                            <option value="002552">Rigger - oil and gas industry - onshore - heights over ten metres</option>
                            <option value="002553">Rigger - oil and gas industry - onshore - heights up to ten metres</option>
                            <option value="002555">Road maintenance and construction</option>
                            <option value="002556">Road sweeper or cleaner driver</option>
                            <option value="002557">Roller door installer</option>
                            <option value="002558">Rubbish or garbage removalist - non-driver</option>
                            <option value="002559">Saddle maker</option>
                            <option value="002560">Safety officer - mining</option>
                            <option value="002561">Sailmaker</option>
                            <option value="002562">Sales representative - deliveries</option>
                            <option value="002563">Sales representative - deliveries - light goods only</option>
                            <option value="002564">Sales representative - door to door</option>
                            <option value="002565">Sales representative - no deliveries or repairs - involving some light manual work</option>
                            <option value="002566">Sales representative - no deliveries or repairs - no manual work</option>
                            <option value="002567">Sales representative - requiring lifting or demonstration of heavy goods</option>
                            <option value="002568">Sandblaster</option>
                            <option value="002569">Saw miller</option>
                            <option value="002570">Scaffold worker - over ten metres</option>
                            <option value="002571">Scaffold worker - up to ten metres</option>
                            <option value="002574">Scientist - field work - hazardous chemicals</option>
                            <option value="002572">Scientist - field work less than 20% - no hazardous chemicals</option>
                            <option value="002573">Scientist - field work more than 20% - no hazardous chemicals</option>
                            <option value="002575">Scientist - laboratory or office only - no hazardous chemicals - relevant degree</option>
                            <option value="002576">Scrap metal dealer</option>
                            <option value="002577">Scrap metal worker</option>
                            <option value="002578">Screen printer - trade qualified</option>
                            <option value="002579">Screen printer - unqualified - minimum three years experience</option>
                            <option value="002580">Sculptor</option>
                            <option value="002581">Second hand goods - shop assistant or keeper</option>
                            <option value="002582">Secretary</option>
                            <option value="002583">Security - armed - hotel or motel</option>
                            <option value="002584">Security - unarmed - hotel or motel</option>
                            <option value="002585">Security guard - aviation security - armed</option>
                            <option value="002586">Security guard - aviation security - unarmed</option>
                            <option value="002587">Security guard - bailiff - armed - courtroom only</option>
                            <option value="002588">Security guard - bailiff - unarmed - courtroom only</option>
                            <option value="002589">Security guard - bank security - armed</option>
                            <option value="002590">Security guard - bank security - unarmed</option>
                            <option value="002591">Security guard - bodyguard</option>
                            <option value="002592">Security guard - bouncer</option>
                            <option value="002593">Security guard - casino security</option>
                            <option value="002594">Security guard - control room - unarmed - no intruder confrontation</option>
                            <option value="002595">Security guard - department store security or detectives</option>
                            <option value="002596">Security guard - detectives</option>
                            <option value="002597">Security guard - hotel or motel industry security - armed</option>
                            <option value="002598">Security guard - hotel or motel industry security - unarmed</option>
                            <option value="002599">Security guard - railway guard</option>
                            <option value="002600">Sewage plant worker</option>
                            <option value="002601">Sewing machine mechanic</option>
                            <option value="002602">Sewing machinist - qualified - not working from home</option>
                            <option value="002603">Sewing machinist - unqualified</option>
                            <option value="002604">Shearer</option>
                            <option value="002605">Shed or carport erector</option>
                            <option value="002606">Sheetmetal worker - not trade qualified less than three years experience</option>
                            <option value="002607">Sheetmetal worker - not trade qualified minimum three years experience</option>
                            <option value="002608">Sheetmetal worker - trade qualified</option>
                            <option value="002609">Shipwright</option>
                            <option value="002610">Shipyard worker</option>
                            <option value="002611">Shoemaker or repairer - less than three years experience</option>
                            <option value="002612">Shoemaker or repairer - minimum three years experience</option>
                            <option value="002613">Shop assistant or keeper - adult books or goods</option>
                            <option value="002614">Shop assistant or keeper - antique dealers - deliveries</option>
                            <option value="002615">Shop assistant or keeper - antique dealers - restoration</option>
                            <option value="002616">Shop assistant or keeper - antique dealers - sales and office only - no deliveries</option>
                            <option value="002617">Shop assistant or keeper - aquarium shop</option>
                            <option value="002618">Shop assistant or keeper - art supplies - less than 10% manual work</option>
                            <option value="002619">Shop assistant or keeper - art supplies - more than 10% manual work</option>
                            <option value="002620">Shop assistant or keeper - baby shop - less than 10% manual work</option>
                            <option value="002621">Shop assistant or keeper - baby shop - more than 10% manual work</option>
                            <option value="002622">Shop assistant or keeper - bakery</option>
                            <option value="002623">Shop assistant or keeper - battery sales - no fitting</option>
                            <option value="002624">Shop assistant or keeper - bedding - less than 10% manual work</option>
                            <option value="002625">Shop assistant or keeper - bedding - more than 10% manual work</option>
                            <option value="002626">Shop assistant or keeper - bicycle repairs</option>
                            <option value="002627">Shop assistant or keeper - bicycle sales</option>
                            <option value="002628">Shop assistant or keeper - boating equipment - sales only - less than 10% manual work</option>
                            <option value="002629">Shop assistant or keeper - boating equipment - sales only - more than 10% manual work</option>
                            <option value="002630">Shop assistant or keeper - books or stationery - less than 10% manual work</option>
                            <option value="002631">Shop assistant or keeper - books or stationery - more than 10% manual work</option>
                            <option value="002632">Shop assistant or keeper - bottle shop</option>
                            <option value="002633">Shop assistant or keeper - brassware shop - less than 10% manual work</option>
                            <option value="002634">Shop assistant or keeper - brassware shop - more than 10% manual work</option>
                            <option value="002635">Shop assistant or keeper - building supplies - no deliveries</option>
                            <option value="002636">Shop assistant or keeper - camping equipment</option>
                            <option value="002637">Shop assistant or keeper - card shop - less than 10% manual work</option>
                            <option value="002638">Shop assistant or keeper - card shop - more than 10% manual work</option>
                            <option value="002639">Shop assistant or keeper - carpet - sales only - less than 10% manual work</option>
                            <option value="002640">Shop assistant or keeper - carpet - sales only - more than 10% manual work</option>
                            <option value="002641">Shop assistant or keeper - cars - office only - involving some light manual work</option>
                            <option value="002642">Shop assistant or keeper - cars - office only - no sales or manual work</option>
                            <option value="002643">Shop assistant or keeper - cars - yard sales</option>
                            <option value="002644">Shop assistant or keeper - chemist shop assistant - less than 10% manual work</option>
                            <option value="002645">Shop assistant or keeper - chemist shop assistant - more than 10% manual work</option>
                            <option value="002646">Shop assistant or keeper - chinaware and glassware shop - less than 10% manual work</option>
                            <option value="002647">Shop assistant or keeper - chinaware and glassware shop - more than 10% manual work</option>
                            <option value="002648">Shop assistant or keeper - clothing - less than 10% manual work</option>
                            <option value="002649">Shop assistant or keeper - clothing - more than 10% manual work</option>
                            <option value="002650">Shop assistant or keeper - computer - less than 10% manual work</option>
                            <option value="002651">Shop assistant or keeper - computer - more than 10% manual work</option>
                            <option value="002652">Shop assistant or keeper - confectionary - less than 10% manual work</option>
                            <option value="002653">Shop assistant or keeper - confectionary - more than 10% manual work</option>
                            <option value="002654">Shop assistant or keeper - curtain - less than 10% manual work</option>
                            <option value="002655">Shop assistant or keeper - curtain - more than 10% manual work</option>
                            <option value="002656">Shop assistant or keeper - delicatessen</option>
                            <option value="002657">Shop assistant or keeper - department store - deliveries</option>
                            <option value="002658">Shop assistant or keeper - department store - sales - no deliveries - less than 10% manual work</option>
                            <option value="002659">Shop assistant or keeper - department store - sales - no deliveries - more than 10% manual work</option>
                            <option value="002660">Shop assistant or keeper - disposal store</option>
                            <option value="002661">Shop assistant or keeper - duty free shop - less than 10% manual work</option>
                            <option value="002662">Shop assistant or keeper - duty free shop - more than 10% manual work</option>
                            <option value="002663">Shop assistant or keeper - electrical - deliveries</option>
                            <option value="002664">Shop assistant or keeper - electrical - retail sales only - less than 10% manual work</option>
                            <option value="002665">Shop assistant or keeper - electrical - retail sales only - more than 10% manual work</option>
                            <option value="002666">Shop assistant or keeper - fish and chip shop</option>
                            <option value="002667">Shop assistant or keeper - florist - deliveries</option>
                            <option value="002668">Shop assistant or keeper - florist - sales - no deliveries</option>
                            <option value="002669">Shop assistant or keeper - florist - shop proprietor - no deliveries - less than 10% manual work</option>
                            <option value="002670">Shop assistant or keeper - florist - shop proprietor - no deliveries - more than 10% manual work</option>
                            <option value="002671">Shop assistant or keeper - foot wear - less than 10% manual work</option>
                            <option value="002672">Shop assistant or keeper - foot wear - more than 10% manual work</option>
                            <option value="002673">Shop assistant or keeper - furnishings (cushions, fabrics) - less than 10% manual work</option>
                            <option value="002674">Shop assistant or keeper - furnishings (cushions, fabrics) - more than 10% manual work</option>
                            <option value="002675">Shop assistant or keeper - furniture - deliveries</option>
                            <option value="002676">Shop assistant or keeper - furniture - sales only - less than 10% manual work</option>
                            <option value="002677">Shop assistant or keeper - furniture - sales only - more than 10% manual work</option>
                            <option value="002678">Shop assistant or keeper - gift shop - less than 10% manual work</option>
                            <option value="002679">Shop assistant or keeper - gift shop - more than 10% manual work</option>
                            <option value="002680">Shop assistant or keeper - hardware - administration only</option>
                            <option value="002681">Shop assistant or keeper - hardware - deliveries</option>
                            <option value="002682">Shop assistant or keeper - hardware - sales</option>
                            <option value="002683">Shop assistant or keeper - health food - less than 10% manual work</option>
                            <option value="002684">Shop assistant or keeper - health food - more than 10% manual work</option>
                            <option value="002685">Shop assistant or keeper - ice cream parlour</option>
                            <option value="002686">Shop assistant or keeper - juice vendor</option>
                            <option value="002687">Shop assistant or keeper - lawn moving sales</option>
                            <option value="002688">Shop assistant or keeper - light fittings - less than 10% manual work</option>
                            <option value="002689">Shop assistant or keeper - light fittings - more than 10% manual work</option>
                            <option value="002690">Shop assistant or keeper - machinery sales or hire</option>
                            <option value="002691">Shop assistant or keeper - motor vehicle accessories and spare parts</option>
                            <option value="002692">Shop assistant or keeper - musical instruments - deliveries</option>
                            <option value="002693">Shop assistant or keeper - musical instruments - no deliveries - less than 10% manual work</option>
                            <option value="002694">Shop assistant or keeper - musical instruments - no deliveries - more than 10% manual work</option>
                            <option value="002695">Shop assistant or keeper - newsagent - no deliveries - less than 10% manual work</option>
                            <option value="002696">Shop assistant or keeper - newsagent - no deliveries - more than 10% manual work</option>
                            <option value="002697">Shop assistant or keeper - nursery retail - less than 20% manual work</option>
                            <option value="002698">Shop assistant or keeper - office supply - less than 10% manual work</option>
                            <option value="002699">Shop assistant or keeper - office supply - more than 10% manual work</option>
                            <option value="002700">Shop assistant or keeper - paint and wallpaper</option>
                            <option value="002701">Shop assistant or keeper - pet shop</option>
                            <option value="002702">Shop assistant or keeper - photographic - repairs</option>
                            <option value="002703">Shop assistant or keeper - photographic - sales - less than 10% manual work</option>
                            <option value="002704">Shop assistant or keeper - photographic - sales - more than 10% manual work</option>
                            <option value="002705">Shop assistant or keeper - record shop - less than 10% manual work</option>
                            <option value="002706">Shop assistant or keeper - record shop - more than 10% manual work</option>
                            <option value="002707">Shop assistant or keeper - second hand goods</option>
                            <option value="002708">Shop assistant or keeper - sporting goods - sales only - less than 10% manual work</option>
                            <option value="002709">Shop assistant or keeper - sporting goods - sales only - more than 10% manual work</option>
                            <option value="002710">Shop assistant or keeper - supermarket - cashier</option>
                            <option value="002711">Shop assistant or keeper - supermarket - deliveries</option>
                            <option value="002713">Shop assistant or keeper - supermarket - manager and clerical - administration - involving some light manual work</option>
                            <option value="002712">Shop assistant or keeper - supermarket - manager and clerical - administration only - no manual work</option>
                            <option value="002714">Shop assistant or keeper - supermarket - shelf stockist</option>
                            <option value="002715">Shop assistant or keeper - swimming pool supplies</option>
                            <option value="002716">Shop assistant or keeper - tobacconist - less than 10% manual work</option>
                            <option value="002717">Shop assistant or keeper - tobacconist - more than 10% manual work</option>
                            <option value="002718">Shop assistant or keeper - toy shop - less than 10% manual work</option>
                            <option value="002719">Shop assistant or keeper - toy shop - more than 10% manual work</option>
                            <option value="002720">Shop assistant or keeper - video or DVD or record shop - less than 10% manual work</option>
                            <option value="002721">Shop assistant or keeper - video or DVD or record shop - more than 10% manual work</option>
                            <option value="002722">Shop filler or shelf stacker</option>
                            <option value="002723">Shop owner - less than 10% manual work</option>
                            <option value="002724">Shop owner - less than 20% manual work</option>
                            <option value="002725">Shop owner - more than 20% manual work</option>
                            <option value="002726">Shop owner - no manual work</option>
                            <option value="002727">Shop owner - sales - counter only - less than 10% manual work</option>
                            <option value="002728">Shop owner - sales - counter only - more than 10% manual work</option>
                            <option value="002729">Shopfitter - not trade qualified - less than three years experience</option>
                            <option value="002730">Shopfitter - not trade qualified - more than three years experience</option>
                            <option value="002731">Shopfitter - trade qualified</option>
                            <option value="002732">Shunter</option>
                            <option value="002733">Sign writer - more than ten metres</option>
                            <option value="002734">Sign writer - qualified - less than ten metres</option>
                            <option value="002735">Sign writer - unqualified - less than ten metres</option>
                            <option value="002736">Signalman - railway workers</option>
                            <option value="002737">Silversmith - qualified</option>
                            <option value="002738">Silversmith - unqualified - minimum three years experience</option>
                            <option value="002739">Singer</option>
                            <option value="002740">Skylight fitter - less than ten metres</option>
                            <option value="002741">Skylight fitter - more than ten metres</option>
                            <option value="002742">Slaughterman</option>
                            <option value="002743">Social educator or trainer</option>
                            <option value="002744">Social worker or counsellor - not degree qualified - minimum three years experience</option>
                            <option value="002745">Social worker or counsellor- relevant degree</option>
                            <option value="002746">Soft drink vendor</option>
                            <option value="002747">Solicitor</option>
                            <option value="002748">Sound technician - film industry - studio only</option>
                            <option value="002749">Sound technician - studio only - minimum three years experience</option>
                            <option value="002750">Sound, lighting, electrical - film industry - non-studio</option>
                            <option value="002751">Speech therapist or pathologist - relevant degree</option>
                            <option value="002752">Sporting goods - shop assistant or keeper - sales only - less than 10% manual work</option>
                            <option value="002753">Sporting goods - shop assistant or keeper - sales only - more than 10% manual work</option>
                            <option value="002754">Spray painter - trade qualified</option>
                            <option value="002755">Spray painter - unqualified - minimum three years experience</option>
                            <option value="002756">Squash court proprietor - no coaching</option>
                            <option value="002757">Station master - railway workers</option>
                            <option value="002758">Statistician - not degree qualified</option>
                            <option value="002759">Statistician - relevant degree</option>
                            <option value="002760">Steel mill worker</option>
                            <option value="002761">Stevedore</option>
                            <option value="002762">Stock and station agent - no manual work</option>
                            <option value="002763">Stock and station agent - with manual work</option>
                            <option value="002764">Stockbroker - not degree qualified</option>
                            <option value="002765">Stockbroker - relevant degree</option>
                            <option value="002766">Stockman</option>
                            <option value="002767">Stone mason</option>
                            <option value="002768">Store person or warehouse person</option>
                            <option value="002769">Student - medical or nursing or dentistry (with practical)</option>
                            <option value="002770">Student - other</option>
                            <option value="002771">Stunt person - film or TV</option>
                            <option value="002772">Stunt person - record attempts and one off stunts</option>
                            <option value="002773">Sugarcane - proprietor or owner or manager - farming industry</option>
                            <option value="002774">Supermarket - shop assistant or keeper - deliveries</option>
                            <option value="002776">Supermarket - shop assistant or keeper - manager and clerical - administration - involving some light manual work</option>
                            <option value="002775">Supermarket - shop assistant or keeper - manager and clerical - administration only - no manual work</option>
                            <option value="002777">Supermarket - shop assistant or keeper - shelf stockist</option>
                            <option value="002778">Supervisor - more than 20% light manual work and supervising blue collar workers</option>
                            <option value="002779">Supervisor - no manual work and supervising blue collar workers</option>
                            <option value="002780">Supervisor - office duties only - oil and gas industry - offshore</option>
                            <option value="002781">Supervisor - office duties only - oil and gas industry - onshore</option>
                            <option value="002782">Supervisor - other - oil and gas industry - offshore</option>
                            <option value="002783">Supervisor - other - oil and gas industry - onshore</option>
                            <option value="002784">Supervisor - up to 20% light manual work and supervising blue collar workers</option>
                            <option value="002785">Surfboard reshaper</option>
                            <option value="002786">Surgeon</option>
                            <option value="002787">Surveyor - consulting or office work only - relevant degree</option>
                            <option value="002788">Surveyor - field work - other - qualified</option>
                            <option value="002789">Surveyor - land - qualified - less than 20% field work</option>
                            <option value="002790">Surveyor - mining - qualified - no underground</option>
                            <option value="002791">Surveyor - quantity - office duties only - not degree qualified</option>
                            <option value="002793">Surveyor - quantity - office duties only - relevant degree</option>
                            <option value="002792">Surveyor - quantity - qualified - other</option>
                            <option value="002794">Surveyor - underwater - qualified</option>
                            <option value="002795">Swimming pool attendant - permanent - full time - minimum two years experience</option>
                            <option value="002796">Swimming pool builder - above ground - qualified</option>
                            <option value="002797">Swimming pool builder - in ground - concrete - licensed</option>
                            <option value="002798">Swimming pool builder - in ground - fibreglass</option>
                            <option value="002799">Swimming pool supplies - shop assistant or keeper</option>
                            <option value="002800">TAB agent - full time</option>
                            <option value="002801">Tattooist</option>
                            <option value="002802">Tax consultant - not degree qualified</option>
                            <option value="002803">Tax consultant - relevant degree</option>
                            <option value="002804">Taxidermist</option>
                            <option value="002805">Teacher - headmaster or mistress or principal</option>
                            <option value="002806">Teacher - kindergarten aide</option>
                            <option value="002807">Teacher - kindergarten teacher - qualified</option>
                            <option value="002808">Teacher - music</option>
                            <option value="002809">Teacher - music teacher - qualified - working from home</option>
                            <option value="002810">Teacher - non-manual - classroom</option>
                            <option value="002811">Teacher - physical education, trades, art, woodwork</option>
                            <option value="002812">Teacher - teacher's aide</option>
                            <option value="002813">Telephone industry - administration only</option>
                            <option value="002814">Telephone industry - cable installation</option>
                            <option value="002815">Telephone industry - linesman - heights over ten metres</option>
                            <option value="002816">Telephone industry - linesman - heights up to ten metres</option>
                            <option value="002817">Telephone industry - technician - no underground</option>
                            <option value="002818">Television or radio repairer</option>
                            <option value="002819">Theatre or cinema - management - office only</option>
                            <option value="002820">Theatre or cinema - projectionist</option>
                            <option value="002821">Theatre or cinema - ticket seller</option>
                            <option value="002822">Theatre or cinema - usher</option>
                            <option value="002823">Ticket collector - railway workers</option>
                            <option value="002824">Tiler - floor and wall tiler - trade qualified - no roof tiling or paving</option>
                            <option value="002825">Tiler - roof tiler - fully qualified - up to ten metres</option>
                            <option value="002826">Tiler - roof tiler - unqualified or working over ten metres - less than three years experience</option>
                            <option value="002827">Tiler - roof tiler - unqualified or working over ten metres - minimum three years experience</option>
                            <option value="002828">Timber merchant</option>
                            <option value="002829">Tobacconist - shop assistant or keeper - less than 10% manual work</option>
                            <option value="002830">Tobacconist - shop assistant or keeper - more than 10% manual work</option>
                            <option value="002831">Tool maker - trade qualified</option>
                            <option value="002832">Tool maker - unqualified - less than three years experience</option>
                            <option value="002833">Tool maker - unqualified - minimum three years experience</option>
                            <option value="002834">Tourist guide - full time - not seasonal</option>
                            <option value="002835">Tourist guide - part time or seasonal</option>
                            <option value="002836">Town planner - not degree qualified</option>
                            <option value="002837">Town planner- relevant degree</option>
                            <option value="002838">Toy shop - shop assistant or keeper - less than 10% manual work</option>
                            <option value="002839">Toy shop - shop assistant or keeper - more than 10% manual work</option>
                            <option value="002840">Traffic controller - road and construction</option>
                            <option value="002841">Train or tram driver</option>
                            <option value="002842">Tram or train driver</option>
                            <option value="002843">Translator - not working from home</option>
                            <option value="002844">Travel agent</option>
                            <option value="002845">Tree lopper</option>
                            <option value="002846">Tree surgeon</option>
                            <option value="002847">Truck driver - airline staff of major airlines only</option>
                            <option value="002848">Truck driver - airline staff of minor or charter airlines</option>
                            <option value="002849">Tugboat operator</option>
                            <option value="002850">Tupperware sales</option>
                            <option value="002851">Tutor - full time - not working from home</option>
                            <option value="002852">Tutor - full time - working at home</option>
                            <option value="002853">Typesetter</option>
                            <option value="002854">Typist</option>
                            <option value="002855">Tyre fitter or repairer</option>
                            <option value="002856">Underground mining - explosives handling</option>
                            <option value="002857">Underground mining - explosives handling - not trade qualified</option>
                            <option value="002860">Underground mining - explosives handling - trade qualified</option>
                            <option value="002858">Underground mining - no explosives - not trade qualified</option>
                            <option value="002859">Underground mining - no explosives - trade qualified (e.g. welder, carpenter, electrician, mechanic)</option>
                            <option value="002861">Unemployed</option>
                            <option value="002862">University or equivalent lecturer</option>
                            <option value="002863">Unspecified Occupation 0001</option>
                            <option value="002864">Unspecified Occupation 0002</option>
                            <option value="002865">Unspecified Occupation 0003</option>
                            <option value="002866">Unspecified Occupation 0004</option>
                            <option value="002867">Unspecified Occupation 0005</option>
                            <option value="002868">Unspecified Occupation 0006</option>
                            <option value="002869">Unspecified Occupation 0007</option>
                            <option value="002870">Unspecified Occupation 0008</option>
                            <option value="002871">Unspecified Occupation 0009</option>
                            <option value="002872">Unspecified Occupation 0010</option>
                            <option value="002873">Unspecified Occupation 0011</option>
                            <option value="002874">Unspecified Occupation 0012</option>
                            <option value="002875">Unspecified Occupation 0013</option>
                            <option value="002876">Unspecified Occupation 0014</option>
                            <option value="002877">Unspecified Occupation 0015</option>
                            <option value="002878">Unspecified Occupation 0016</option>
                            <option value="002879">Unspecified Occupation 0017</option>
                            <option value="002880">Unspecified Occupation 0018</option>
                            <option value="002881">Unspecified Occupation 0019</option>
                            <option value="002882">Unspecified Occupation 0020</option>
                            <option value="002883">Unspecified Occupation 0021</option>
                            <option value="002884">Unspecified Occupation 0022</option>
                            <option value="002885">Unspecified Occupation 0023</option>
                            <option value="002886">Unspecified Occupation 0024</option>
                            <option value="002887">Unspecified Occupation 0025</option>
                            <option value="002888">Unspecified Occupation 0026</option>
                            <option value="002889">Unspecified Occupation 0027</option>
                            <option value="002890">Unspecified Occupation 0028</option>
                            <option value="002891">Unspecified Occupation 0029</option>
                            <option value="002892">Unspecified Occupation 0030</option>
                            <option value="002893">Unspecified Occupation 0031</option>
                            <option value="002894">Unspecified Occupation 0032</option>
                            <option value="002895">Unspecified Occupation 0033</option>
                            <option value="002896">Unspecified Occupation 0034</option>
                            <option value="002897">Unspecified Occupation 0035</option>
                            <option value="002898">Unspecified Occupation 0036</option>
                            <option value="002899">Unspecified Occupation 0037</option>
                            <option value="002900">Unspecified Occupation 0038</option>
                            <option value="002901">Unspecified Occupation 0039</option>
                            <option value="002902">Unspecified Occupation 0040</option>
                            <option value="002903">Unspecified Occupation 0041</option>
                            <option value="002904">Upholsterer or trimmer - not qualified - minimum three years experience</option>
                            <option value="002905">Upholsterer or trimmer - trade qualified</option>
                            <option value="002906">Urologist</option>
                            <option value="002907">Valet - full time</option>
                            <option value="002908">Valuer - livestock - no manual work</option>
                            <option value="002909">Valuer - livestock - with manual work</option>
                            <option value="002910">Valuer - property</option>
                            <option value="002911">Vehicle body builder - trade qualified</option>
                            <option value="002912">Vehicle body builder - unqualified</option>
                            <option value="002913">Vending machine filler</option>
                            <option value="002914">Vending machine serviceman</option>
                            <option value="002915">Veterinary nurse</option>
                            <option value="002916">Veterinary surgeon - domestic pets</option>
                            <option value="002917">Veterinary surgeon - large animals</option>
                            <option value="002918">Wardsman</option>
                            <option value="002919">Warehouse - manager - less than 10% manual work</option>
                            <option value="002920">Warehouse - manager - less than 20% manual work</option>
                            <option value="002921">Warehouse - manager - more than 20% manual work</option>
                            <option value="002922">Warehouse - person or store person</option>
                            <option value="002923">Washing machine mechanic</option>
                            <option value="002924">Watchmaker or repairer</option>
                            <option value="002925">Water proofer</option>
                            <option value="002926">Weather forecaster</option>
                            <option value="002927">Welder - oil and gas industry - trade qualified - onshore</option>
                            <option value="002928">Welder - mining - trade qualified - no explosives</option>
                            <option value="002929">Welder - trade qualified</option>
                            <option value="002930">Welder - unqualified</option>
                            <option value="002931">Welfare worker - administration or office only</option>
                            <option value="002932">Welfare worker - qualified - visiting or outside work less than 20%</option>
                            <option value="002933">Welfare worker - qualified - visiting or outside work more than 20%</option>
                            <option value="002934">Welfare worker - unqualified</option>
                            <option value="002935">Wharf or waterside worker</option>
                            <option value="002936">Window dresser - qualified</option>
                            <option value="002937">Window dresser - unqualified</option>
                            <option value="002938">Window tinter - employee</option>
                            <option value="002939">Window tinter - proprietor</option>
                            <option value="002940">Windscreen fitter - less than three years experience</option>
                            <option value="002941">Windscreen fitter - minimum three years experience</option>
                            <option value="002942">Windscreen repairer</option>
                            <option value="002943">Winemaker - qualified</option>
                            <option value="002944">Wool broker or buyer</option>
                            <option value="002945">Wool classer</option>
                            <option value="002946">Wrecker</option>
                            <option value="002947">X-ray technician - qualified</option>
                            <option value="002948">Yoga or pilates instructor - fulltime - not from home</option>
                            <option value="002949">Zoo attendant - qualified</option>
                            <option value="002950">Zoo attendant - unqualified</option>
                            <option value="002951">Zoologist</option>
                        </select>
                        <p class="d-inline-flex" style="font-size: 1.5rem">in exchange for my hard work, I recieve a salary of </p>
                        <input class="d-inline-flex form-control form-control-lg" type="number" min="0" placeholder="$" id="salary" name="annualIncome">
                        <p class="d-inline-flex" style="font-size: 1.5rem">yearly.</p>
                    </div>
                    <div class="form-group pb-5">
                        <p class="d-inline-flex" style="font-size: 1.5rem">I have</p>
                        <select class="d-inline-flex form-select form-select-lg" id="smoking" name="smoker" required>
                            <option value="" disabled selected>Select your option</option>
                            <option>been smoking</option>
                            <option>not been smoking</option>
                        </select>
                        <p class="d-inline-flex" style="font-size: 1.5rem">for the past 12 months.</p>
                    </div>
                    <hr class="mb-5">
                    <div class="form-group pb-5">
                        <h5 class="text-center text-muted pb-2"> Choose the option that describes you the best:</h5>
                        <div class="btn-group btn-group-sm d-flex align-self-center" role="group" aria-label="Premade option button group">
                            <input type="radio" class="btn-check btn-primary" onclick="myFunction(); AvaFunction();" name="btnradio" id="btnradio1" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio1">
                                <i class="fa-solid fa-person"></i><br>Single
                            </label>

                            <input type="radio" class="btn-check btn-primary" onclick="myFunctionM(); AvaFunction();" name="btnradio" id="btnradio2" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio2">
                                <i class="fa-solid fa-children"></i><br>Married
                            </label>

                            <input type="radio" class="btn-check btn-primary" onclick="myFunctionSK(); AvaFunction();" name="btnradio" id="btnradio3" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio3">
                                <i class="fa-solid fa-person-breastfeeding"></i><br>Single Parent
                            </label>

                            <input type="radio" class="btn-check btn-primary" onclick="myFunctionMK(); AvaFunction();" name="btnradio" id="btnradio4" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio4">
                                <i class="fa-solid fa-people-roof"></i><br>Married with Kids
                            </label>

                            <input type="radio" class="btn-check btn-primary" onclick="myFunctionR(); AvaFunction();" name="btnradio" id="btnradio5" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio5">
                                <i class="fa-solid fa-person-cane"></i><br>Pre-retiree
                            </label>

                            <input type="radio" class="btn-check btn-primary" onclick="myFunctionC(); AvaFunction();" name="btnradio" id="btnradio6" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio6">
                                <i class="fa-solid fa-cog"></i><br>Custom Options
                            </label>
                        </div>

                        <div class="card mt-2 p-4" style="display:none;" id="myS">
                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    If I can't work, I need income to pay the bills
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="SIncome" name="SIncome">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="control-label" >
                                    If I was to die, I need money to pay debts (home loan, car loans, credit cards, personal loans)
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="SDie" name="SDie">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    If I were to become permanently disabled, I need money to pay debts (home loan, car loans, credit cards, personal loans)
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="SDisabled" name="SDisabled">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>
                        </div>

                        <div class="card mt-2 p-4" style="display:none;" id="myM">
                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    I am the main bread winner
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="MWinner" name="MWinner">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    I need income for my bills/loans
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="MIncome" name="MIncome">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    If I was to die, I want my partner to have 2 years of my wage so they are financially alright
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="MDie" name="MDie">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    If I was to become total permanently disabled, I want my partner to have 2 years of my wage so they are financially alright
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="MDisabled" name="MDisabled">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>
                        </div>



                        <div class="card mt-2 p-4" style="display:none;" id="mySK">
                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    I need income for my bills/loans
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="SKIncome" name="SKIncome">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    If I was to die, I want to estate/kids to have 2 years of my wage plus pay out loans so they are financially alright
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="SKDie" name="SKDie">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    If I was to become total permanently disabled, I want my estate/kids to have 2 years of my wage plus payout loans so they are financially alright
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="SKDisabled" name="SKDisabled">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>
                        </div>



                        <div class="card mt-2 p-4" style="display:none;" id="myMK">
                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    I am the main bread winner
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="MKWinner" name="MKWinner">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    I need income for my bills/loans
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="MKIncome" name="MKIncome">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    If I was to die, I need money to pay debts (car loans, credit cards, personal loans)
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="MKDie" name="MKDie">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    If I was to become total permanently disabled, I need money to pay debts (car loans, credit cards, personal loans)
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="MKDisabled" name="MKDisabled">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>
                        </div>


                        <div class="card mt-2 p-4" style="display:none;" id="myR">
                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    If I can't work, I need income to pay bills to keep the retirement plan going
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="Rincome" name="RIncome">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    If I was to die, I want a lump sum that would replace my lost earnings so my partner can retire
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="RDie" name="RDie">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    If I was to become total permamently disabled, I need a policy to pay out for funeral/outstanding debt
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="RDisabled" name="RDisabled">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>
                        </div>


                        <div class="card mt-2 p-4" style="display:none;" id="myC">
                            <div class="form-group">

                                <h5 class="text-muted" style="font-size: 1.5rem">If I were to become permanently disabled, I want the following covered:</h5>

                                <label style="font-size: 1.25rem" class="form-label" >
                                    Funeral Expenses
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="Custom1" name="Custom1">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    Personal debt - Car loans/Personal Loans
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="Custom2" name="Custom2">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    Home/Investment Loans
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="Custom3" name="Custom3">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    Children's Education costs
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="Custom4" name="Custom4">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    Wage replacement
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="Custom5" name="Custom5">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    Childcare costs
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="Custom6" name="Custom6">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <h5 class="text-muted" style="font-size: 1.5rem">If you were to go through some trauma, I want the following covered:</h5>

                                <label style="font-size: 1.25rem" class="form-label" >
                                    Wage replacement
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="Custom7" name="Custom7">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    Medical expenses
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="Custom8" name="Custom8">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    Living cost
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="Custom9" name="Custom9">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label style="font-size: 1.25rem" class="form-label" >
                                    Debt
                                </label>
                                <select class="d-inline-flex form-select form-select-lg" id="Custom10" name="Custom10">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-none">
                        <select class="d-inline-flex form-select form-select-lg" id="custom-option-choice" name="custom-option-choice">
                            <option value="invalid"></option>
                            <option value="myS"></option>
                            <option value="myM"></option>
                            <option value="mySK"></option>
                            <option value="myMK"></option>
                            <option value="myR"></option>
                            <option value="myC"></option>
                        </select>
                    </div>
                    <div class="mx-auto pb-5" style="display: block; width: fit-content;">
                        <button class="btn btn-primary btn-lg" id="submitButton" type="submit" data-bs-toggle="modal" data-bs-target="#bean-eater" disabled>Get quote</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="bean-eater" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgba(241, 242, 243, 0) none repeat scroll 0% 0%; display: block; shape-rendering: auto;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                        <g>
                            <circle cx="60" cy="50" r="4" fill="#6c757d">
                                <animate attributeName="cx" repeatCount="indefinite" dur="0.47393364928909953s" values="95;35" keyTimes="0;1" begin="-1.4137s" />
                                <animate attributeName="fill-opacity" repeatCount="indefinite" dur="0.47393364928909953s" values="0;1;1" keyTimes="0;0.2;1" begin="-1.4137s" />
                            </circle>
                            <circle cx="60" cy="50" r="4" fill="#6c757d">
                                <animate attributeName="cx" repeatCount="indefinite" dur="0.47393364928909953s" values="95;35" keyTimes="0;1" begin="-0.6963s" />
                                <animate attributeName="fill-opacity" repeatCount="indefinite" dur="0.47393364928909953s" values="0;1;1" keyTimes="0;0.2;1" begin="-0.6963s" />
                            </circle>
                            <circle cx="60" cy="50" r="4" fill="#6c757d">
                                <animate attributeName="cx" repeatCount="indefinite" dur="0.47393364928909953s" values="95;35" keyTimes="0;1" begin="0s" />
                                <animate attributeName="fill-opacity" repeatCount="indefinite" dur="0.47393364928909953s" values="0;1;1" keyTimes="0;0.2;1" begin="0s" />
                            </circle>
                        </g>
                        <g transform="translate(-15 0)">
                            <path d="M50 50L20 50A30 30 0 0 0 80 50Z" fill="#00b0f0" transform="rotate(90 50 50)" />
                            <path d="M50 50L20 50A30 30 0 0 0 80 50Z" fill="#00b0f0">
                                <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="0.47393364928909953s" values="0 50 50;45 50 50;0 50 50" keyTimes="0;0.5;1" />
                            </path>
                            <path d="M50 50L20 50A30 30 0 0 1 80 50Z" fill="#00b0f0">
                                <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="0.47393364928909953s" values="0 50 50;-45 50 50;0 50 50" keyTimes="0;0.5;1" />
                            </path>
                        </g>
                        <!-- [ldio] generated by https://loading.io/ -->
                    </svg>
                    <hr>
                    <h3></h3>
                </div>
            </div>
        </div>
    </div>

    <script>
        function AvaFunction() {
            document.getElementById("submitButton").disabled = false;
        }

        function myFunction() {
            //Change value of invisible select element to tell api which custom option the user selected
            document.getElementById("custom-option-choice").value = "myS";


            var s = document.getElementById("myS");
            var m = document.getElementById("myM");
            var sk = document.getElementById("mySK");
            var mk = document.getElementById("myMK");
            var r = document.getElementById("myR");
            var c = document.getElementById("myC");
            if (s.style.display === "block") {
                s.style.display = "none";
            } else {
                s.style.display = "block";
                m.style.display = "none";
                sk.style.display = "none";
                mk.style.display = "none";
                r.style.display = "none";
                c.style.display = "none";
            }
        }

        function myFunctionM() {
            //Change value of invisible select element to tell api which custom option the user selected
            document.getElementById("custom-option-choice").value = "myM";


            var s = document.getElementById("myS");
            var m = document.getElementById("myM");
            var sk = document.getElementById("mySK");
            var mk = document.getElementById("myMK");
            var r = document.getElementById("myR");
            var c = document.getElementById("myC");
            if (m.style.display === "block") {
                m.style.display = "none";
            } else {
                m.style.display = "block";
                s.style.display = "none";
                sk.style.display = "none";
                mk.style.display = "none";
                r.style.display = "none";
                c.style.display = "none";
            }
        }

        function myFunctionSK() {
            //Change value of invisible select element to tell api which custom option the user selected
            document.getElementById("custom-option-choice").value = "mySK";


            var s = document.getElementById("myS");
            var m = document.getElementById("myM");
            var sk = document.getElementById("mySK");
            var mk = document.getElementById("myMK");
            var r = document.getElementById("myR");
            var c = document.getElementById("myC");

            if (sk.style.display === "block") {
                sk.style.display = "none";
            } else {
                sk.style.display = "block";
                m.style.display = "none";
                s.style.display = "none";
                mk.style.display = "none";
                r.style.display = "none";
                c.style.display = "none";
            }
        }

        function myFunctionMK() {
            //Change value of invisible select element to tell api which custom option the user selected
            document.getElementById("custom-option-choice").value = "myMK";


            var s = document.getElementById("myS");
            var m = document.getElementById("myM");
            var sk = document.getElementById("mySK");
            var mk = document.getElementById("myMK");
            var r = document.getElementById("myR");
            var c = document.getElementById("myC");
            if (mk.style.display === "block") {
                mk.style.display = "none";
            } else {
                mk.style.display = "block";
                m.style.display = "none";
                sk.style.display = "none";
                s.style.display = "none";
                r.style.display = "none";
                c.style.display = "none";
            }
        }

        function myFunctionR() {
            //Change value of invisible select element to tell api which custom option the user selected
            document.getElementById("custom-option-choice").value = "myR";


            var s = document.getElementById("myS");
            var m = document.getElementById("myM");
            var sk = document.getElementById("mySK");
            var mk = document.getElementById("myMK");
            var r = document.getElementById("myR");
            var c = document.getElementById("myC");
            if (r.style.display === "block") {
                r.style.display = "none";
            } else {
                r.style.display = "block";
                m.style.display = "none";
                sk.style.display = "none";
                mk.style.display = "none";
                s.style.display = "none";
                c.style.display = "none";
            }
        }

        function myFunctionC() {
            //Change value of invisible select element to tell api which custom option the user selected
            document.getElementById("custom-option-choice").value = "myC";


            var s = document.getElementById("myS");
            var m = document.getElementById("myM");
            var sk = document.getElementById("mySK");
            var mk = document.getElementById("myMK");
            var r = document.getElementById("myR");
            var c = document.getElementById("myC");

            if (c.style.display === "block") {
                c.style.display = "none";
            } else {
                c.style.display = "block";
                r.style.display = "none";
                m.style.display = "none";
                sk.style.display = "none";
                mk.style.display = "none";
                s.style.display = "none";
            }
        }
    </script>
</body>

</html>