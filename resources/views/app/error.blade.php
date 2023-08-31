{{-- HTML --}}
<!doctype html>
<html lang="{{ App::getLocale() }}">

    {{-- Head --}}
    <head>

        {{-- Title --}}
        <title>
            {{ Config::get('app.name') }}
        </title>

        {{-- Meta --}}
        <meta name="format-detection" content="telephone=no">
        <meta name="robots"           content="noindex, nofollow" />
        <meta name="Content-Type"     content="text/html; charset=UTF-8">
        <meta name="viewport"         content="width=device-width, initial-scale=1">
        <meta name="description"      content="{{ Config::get('app.description') }}">

        {{-- Open Graph --}}
        <meta property="og:type"        content="website">
        <meta property="og:url"         content="{{ Request::url() }}">
        <meta property="og:title"       content="{{ Config::get('app.name') }}">
        <meta property="og:image"       content="{{ URL::asset('images/card.png') }}">
        <meta property="og:secure_url"  content="{{ URL::asset('images/card.png') }}">
        <meta property="og:description" content="{{ Config::get('app.description') }}">

        {{-- Twitter Card --}}
        <meta name="twitter:card"        content="summary_large_image">
        <meta name="twitter:title"       content="{{ Config::get('app.name') }}">
        <meta name="twitter:image"       content="{{ URL::asset('images/card.png') }}">
        <meta name="twitter:description" content="{{ Config::get('app.description') }}">

        {{-- Favicon --}}
        <link rel="icon" type="image/png" href="{{ URL::asset('images/logo.png') }}">

        {{-- Fonts --}}
        <link rel="stylesheet" href="{{ Config::get('services.type_kit.url') }}">

        {{-- Scripts --}}
        <script src="https://cdn.tailwindcss.com"></script>

        {{-- Styles --}}
        <style>
            .font-sans { font-family: 'proxima-nova' !important }
        </style>

    </head>

    {{-- Body --}}
    <body class="font-sans leading-none flex flex-col justify-center items-center min-h-screen">

        {{-- Graphic --}}
        <svg viewBox="0 0 2745 3192"
             class="w-[200px] -mt-6 md:-mt-4 lg:-mt-6 xl:-mt-10 mb-12">

            {{-- Paths --}}
            <path d="M1763.95 2989.57C2377.37 2989.57 2457.59 2635.68 2396.24 2404.47C2986.07 2149.65 2721.83 1545.68 2377.37 1545.68C2731.27 1309.75 2608.57 889.787 2334.89 870.907C2504.77 394.334 1674.29 2.68068 1325.12 540.614C806.067 384.894 181.64 701.04 294.88 1196.49C-296.519 1529.95 128.16 2061.57 480.48 2041.13C-85.7531 2362 3.9002 2668.71 371.947 2800.83C740 2932.95 1763.95 2989.57 1763.95 2989.57Z" fill="#EAF4FE"/>
            <path d="M1679.33 2894.89C2160.09 2894.89 2222.96 2617.53 2174.89 2436.32C2637.16 2236.61 2342.2 1718.69 2072.23 1718.69C2349.6 1533.79 2286.72 1198.71 2072.23 1183.92C2288.17 708.747 1612.95 268.494 1335.4 975.534C928.6 853.494 564.747 924.574 653.493 1312.89C189.987 1574.23 430.84 1942.33 706.973 1926.31C263.187 2177.79 299.907 2643.41 588.36 2746.96C876.827 2850.52 1679.33 2894.89 1679.33 2894.89Z" fill="#DDE9F5"/>
            <path d="M1635.11 2570.17C1977.51 2570.17 2022.28 2372.63 1988.04 2243.57C2433.99 2253.47 2107.2 1732.47 1914.93 1732.47C2112.47 1600.77 1999.28 1343.87 1846.52 1333.33C2000.32 994.92 1587.83 699.64 1390.16 1203.19C961.774 920.453 896.214 1214.85 959.427 1491.41C440.374 1456.03 828.814 1941.65 1025.48 1930.24C430.934 2045.85 546.36 2502.95 751.8 2576.69C957.24 2650.44 1635.11 2570.17 1635.11 2570.17Z" fill="#CADAE8"/>
            <path d="M754.586 613.453L348.613 762.946C325.306 771.52 299.466 759.586 290.893 736.293L177.52 428.387C168.933 405.08 180.866 379.24 204.16 370.666L610.146 221.173C633.439 212.6 659.293 224.533 667.866 247.826L781.239 555.746C789.826 579.04 777.893 604.88 754.586 613.453Z" fill="#CADAE8"/>
            <path d="M592.467 650.8L747.933 714.813L709.24 601.613L592.467 650.8Z" fill="#CADAE8"/>
            <path d="M381.52 528.494C380.627 518.32 371.653 510.814 361.48 511.707C351.306 512.614 343.8 521.587 344.693 531.76C345.6 541.934 354.573 549.44 364.746 548.547C374.92 547.64 382.427 538.667 381.52 528.494Z" fill="#F5F9FD"/>
            <path d="M500.506 492.427C499.613 482.253 490.626 474.747 480.466 475.64C470.293 476.547 462.773 485.52 463.68 495.693C464.586 505.867 473.56 513.373 483.733 512.48C493.893 511.573 501.413 502.6 500.506 492.427Z" fill="#F5F9FD"/>
            <path d="M618.252 451.054C617.346 440.88 608.372 433.374 598.199 434.28C588.026 435.174 580.519 444.147 581.426 454.32C582.319 464.494 591.292 472 601.466 471.107C611.639 470.2 619.146 461.227 618.252 451.054Z" fill="#F5F9FD"/>
            <path d="M868.441 2508.71C863.721 2496.13 682.054 2428.49 659.241 2437.93C636.441 2447.37 587.107 2528.76 587.107 2528.76C603.401 2581.07 712.721 2627.8 776.427 2637.85C840.121 2647.91 873.161 2521.29 868.441 2508.71Z" fill="#E04545"/>
            <path d="M656.347 2494.35C807.347 2491.2 956.921 2495.73 965.774 2518.15C974.614 2540.56 856.107 2889.73 838.014 2938.49C819.921 2987.25 781.387 3146.12 781.387 3146.12C617.814 3162.24 491.201 3053.71 505.267 2942.81C514.054 2873.59 550.934 2785.6 562.761 2746.6C599.721 2624.71 656.347 2494.35 656.347 2494.35Z" fill="#FFC5A6"/>
            <path d="M931.346 2581.31L882.053 2764.69L765.666 2806.37L918.226 2816.6L921.639 2816.81C945.799 2727.99 970.399 2625.96 965.026 2612.32C962.506 2605.93 950.573 2594.43 931.346 2581.31Z" fill="#F0A17D"/>
            <path d="M814.414 2025.05C782.681 2067.51 743.201 2145.08 705.267 2228.05C634.601 2382.6 587.107 2528.76 587.107 2528.76C686.201 2487.48 894.788 2539.39 964.388 2627.85C1029.51 2710.64 1043.27 2279.85 1043.27 2279.85L814.414 2025.05Z" fill="#F95959"/>
            <path d="M1020.52 2254.52L970.68 2199.03L880.627 2098.76L872.227 2093.32L920.587 2354.17L931.053 2757.61C975.16 2776.79 923.653 2625.89 946.546 2654.99C963.173 2676.13 977.627 2661.95 989.92 2629.17L1020.52 2254.52Z" fill="#E04545"/>
            <path d="M2056.99 2634.93C1983.45 2654.99 1892.63 2654.99 1892.63 2654.99L1918.57 2456.8L2038.91 2542.92L2056.99 2634.93Z" fill="#E04545"/>
            <path d="M1188.37 1793.84L814.414 2025.05L951.254 2343.95L853.747 2922.77C853.747 2922.77 1633.89 2971.53 1638.6 2968.39C1643.32 2965.24 1827.35 2381.19 1827.35 2381.19L2024.75 2028.59L1620.55 1812.12L1188.37 1793.84Z" fill="#F95959"/>
            <path d="M1199.77 1699.07C1363.55 1669.39 1605.97 1720.71 1605.97 1720.71L1317.55 2050.41L1199.77 1699.07Z" fill="#E04545"/>
            <path d="M1200.17 1463.53C1247.36 1598.01 1263.87 1863.44 1261.51 2000.28C1361.77 2121.79 1517.49 2041.56 1572.93 1964.89C1570.57 1705.36 1610.69 1566.16 1610.69 1566.16C1610.69 1566.16 1397.17 1403.37 1200.17 1463.53Z" fill="#FFC5A6"/>
            <path d="M1200.17 1463.53C1228.2 1543.43 1245.41 1669.53 1254.27 1787.44L1584.48 1718.99C1595.61 1618.61 1610.69 1566.16 1610.69 1566.16C1610.69 1566.16 1397.17 1403.37 1200.17 1463.53Z" fill="#F0A17D"/>
            <path d="M1335.92 552.107C1464.88 603.4 1567.39 738.92 1600.61 806.974C1623.08 852.96 1626.61 1038.56 1668.28 1117C1709.95 1195.43 1750.93 1232.52 1761.53 1320.32C1772.12 1408.12 1780.77 1649.72 1742.96 1689.11C1705.16 1728.49 1581.61 1747.07 1358.76 1575.85C1135.91 1404.64 1018.21 1240.85 996.307 1199.03C974.387 1157.21 803.587 983.387 871 874.374C938.4 765.347 1335.92 552.107 1335.92 552.107Z" fill="#FFC5A6"/>
            <path d="M1702.55 1493.04C1681.05 1527.99 1611.39 1513.73 1602.56 1508.25C1615.08 1548.52 1674.83 1574.56 1686.91 1558.13C1698.99 1541.69 1702.55 1493.04 1702.55 1493.04Z" fill="#F0A17D"/>
            <path d="M1672 1366.27C1595.17 1385.12 1595.68 1434.63 1596.92 1452.13C1597.97 1467.24 1612.28 1493.64 1641.01 1488.6C1669.75 1483.55 1702.65 1423.93 1664.13 1394.63C1653.4 1383.67 1672 1366.27 1672 1366.27Z" fill="#6B3F30"/>
            <path d="M1189.93 1411.56C1189.93 1411.56 1126.65 1283.84 1124.63 1275.49C1077.79 1121.28 1055.47 944.454 1055.47 944.454C992.946 943.094 927.933 945.16 927.933 945.16C927.933 945.16 1071.52 782.187 1251.64 708.054C1431.76 633.92 1441.85 637.094 1441.85 637.094C1484.29 655.987 1530.68 705.254 1563 744.947C1563.04 705.587 1533.88 522.774 1506.68 494.907C1479.48 467.04 1383.39 507.2 1366.99 504.174C1350.59 501.147 1236.25 428.8 1142.57 448.6C1048.89 468.387 961.627 639.574 923.773 699.427C885.92 759.28 797.693 896.174 787.386 946.52C777.066 996.867 959.613 1268.77 1055.75 1343.52C1151.88 1418.28 1189.93 1411.56 1189.93 1411.56Z" fill="#233142"/>
            <path d="M1598.93 1461.59C1603.88 1476.07 1617.69 1492.69 1641.01 1488.6C1656.76 1485.83 1673.75 1466.65 1679.55 1445.08C1661.05 1442.63 1628.51 1442.24 1598.93 1461.59Z" fill="#FF7E67"/>
            <path d="M1642.8 1220.64C1631.49 1276.07 1550.09 1294 1532.07 1292.08C1583.44 1335.11 1612.47 1318.19 1632.56 1288.69C1652.64 1259.21 1642.8 1220.64 1642.8 1220.64Z" fill="#F08D6C"/>
            <path d="M1424.23 1116.77C1431.33 1141.53 1422.29 1165.84 1404.04 1171.08C1385.77 1176.32 1365.21 1160.51 1358.11 1135.76C1351 1111.01 1360.05 1086.71 1378.31 1081.45C1396.56 1076.21 1417.12 1092.03 1424.23 1116.77Z" fill="#233142"/>
            <path d="M1406.65 1092.39C1412.33 1099.2 1412.87 1108.11 1407.84 1112.29C1402.81 1116.49 1394.13 1114.36 1388.45 1107.55C1382.77 1100.73 1382.25 1091.83 1387.28 1087.63C1392.31 1083.44 1400.97 1085.57 1406.65 1092.39Z" fill="#455D7A"/>
            <path d="M1597.92 1030.17C1605.08 1052.28 1598.61 1074.17 1583.48 1079.07C1568.36 1083.96 1550.29 1070.01 1543.15 1047.89C1535.99 1025.79 1542.45 1003.91 1557.59 999.014C1572.71 994.107 1590.77 1008.07 1597.92 1030.17Z" fill="#233142"/>
            <path d="M1264.23 848.467C1289.17 874.72 1291 883.814 1254.75 936.04C1196.84 1019.48 1214.21 1047.15 1208.72 1051.64C1203.23 1056.15 1178.43 1013.81 1194.85 957.213C1207.21 914.627 1254.88 838.64 1264.23 848.467Z" fill="#233142"/>
            <path d="M1465.43 779.72C1457.4 810.12 1494.79 815.947 1510.6 814.227C1579.03 806.8 1588.48 845.493 1594.67 844.52C1600.84 843.533 1596.55 807.2 1559.56 786.12C1531.72 770.267 1468.43 768.333 1465.43 779.72Z" fill="#233142"/>
            <path d="M1388.4 538.894C1257.23 551.654 1189.32 615 1189.32 615C990.574 643.894 879.787 851.907 879.787 851.907C997.64 567.054 1082.8 466.627 1184.29 467.614C1285.79 468.6 1388.4 538.894 1388.4 538.894Z" fill="#455D7A"/>
            <path d="M1420.67 558.307C1450.87 570.56 1458.69 610.227 1458.69 610.227C1460.51 546.547 1498 495.347 1498 495.347C1454.17 508.507 1399.71 512.587 1399.71 512.587C1419.08 539.36 1420.67 558.307 1420.67 558.307Z" fill="#455D7A"/>
            <path d="M1581.11 1007.57C1586.35 1013.87 1587.33 1021.67 1583.31 1025.03C1579.29 1028.37 1571.79 1026 1566.55 1019.71C1561.31 1013.43 1560.32 1005.61 1564.35 1002.27C1568.36 998.92 1575.87 1001.29 1581.11 1007.57Z" fill="#455D7A"/>
            <path d="M1743.99 1681.77C1760.13 1663.52 1770.23 1611.2 1769.84 1544.69C1759.6 1537.04 1716.8 1533.44 1707.41 1530.77C1653.63 1522.21 1680.29 1540.01 1604 1532.75C1593.75 1531.76 1541.37 1519.05 1522.21 1520.55C1476.09 1524.17 1482.89 1581.11 1507.27 1603.92C1546.24 1640.37 1680.68 1655.03 1680.68 1655.03C1656.31 1681.77 1646.89 1695.99 1636.24 1720.71C1713.89 1737.92 1723.8 1704.6 1743.99 1681.77Z" fill="#F0A17D"/>
            <path d="M1199.77 1699.07C1216.29 1729.75 1301.23 1813.89 1301.23 1813.89L1317.73 2045.89L1410.53 1808.39L1605.97 1720.71L1660.63 1870.12C1585.13 1972.75 1311.05 2086.39 1307.52 2086.39C1210.79 1988.48 1149.44 1819.79 1149.44 1819.79L1199.77 1699.07Z" fill="#F95959"/>
            <path d="M1287.47 1828.05L1134.11 2042.75L1123.49 1832.77L1199.77 1699.07L1287.47 1828.05Z" fill="#F95959"/>
            <path d="M1426.27 1833.56L1497.84 2078.13L1660.63 1881.52L1605.97 1720.71L1426.27 1833.56Z" fill="#F95959"/>
            <path d="M1129 2034.09L1264.11 1860.75L1300.43 2062.69L1292.56 2093.32L909.973 1999.09L1123.49 1860.75L1129 2034.09Z" fill="#E04545"/>
            <path d="M1426.27 1833.56L1313.03 2093.08L1712.04 2093.04L1648.04 1907.48L1536.27 2069.44L1426.27 1833.56Z" fill="#E04545"/>
            <path d="M1317.55 2050.41L1279.2 2146.56L1295.6 2206.72L1179.25 2942.81L1165.05 2941.95L1287.47 2209.67L1266.81 2141.84L1317.73 2045.89" fill="#E04545"/>
            <path d="M1455.16 3008.95C1455.16 3008.95 989.013 3128.81 781.387 3146.12C639.04 3124.09 575.52 3094.08 588.84 3006.84C602.146 2919.59 652.8 2835.48 793.187 2811.36C842.973 2802.8 1496.77 2847.49 1514.99 2850.28C1564.47 2910.63 1455.16 3008.95 1455.16 3008.95Z" fill="#FFC5A6"/>
            <path d="M1855.17 2975.41L2102.51 2813.8L2124.92 2851.55L1869.33 3019.45L1855.17 2975.41Z" fill="#FF7E67"/>
            <path d="M2116.72 2837.73L1893.12 2985.44C1893.12 2985.44 1895.25 2993.24 1897.59 3000.89L2124.92 2851.55L2116.72 2837.73Z" fill="#E04545"/>
            <path d="M1514.99 2850.28C1666.76 2861.13 1811.11 2884.33 1832.16 2886.96C1853.2 2889.59 1874.56 2896.05 1888.49 2925.72C1901.4 2953.17 1913.01 2979.83 1916.81 2993.55C1919.59 3004.64 1923.16 3061.08 1905.37 3089.55C1899.39 3099.15 1875.23 3098.53 1863.72 3096.48C1842.81 3092.72 1839.55 3085.41 1834.43 3081.63C1816.03 3101.43 1778.89 3109.81 1778.89 3109.81C1772.11 3127.92 1749.67 3146.4 1739.85 3151.03C1732.49 3154.51 1726.56 3153.53 1726.56 3153.53C1719.97 3171.56 1689.93 3190.71 1689.93 3190.71C1673.08 3196.24 1591.69 3168.56 1582.67 3161.19C1573.64 3153.81 1571.07 3115.52 1572.48 3110.57C1540.99 3105.52 1392.83 3024.29 1392.13 2996.79C1391.45 2969.27 1377.73 2911.11 1514.99 2850.28Z" fill="#FFC5A6"/>
            <path d="M1572.48 3110.57C1573.83 3110.39 1658.91 3134.4 1658.91 3134.4L1662.19 3162.95C1662.19 3162.95 1654.53 3143.63 1653.48 3143.55C1652.43 3143.47 1571.76 3120.61 1571.76 3120.61L1572.48 3110.57Z" fill="#F0A17D"/>
            <path d="M1779.35 3033.99L1778.89 3109.81C1778.89 3109.81 1782.4 3109.01 1787.76 3107.35L1779.35 3033.99Z" fill="#F0A17D"/>
            <path d="M1726.56 3153.53L1727.41 3077.36L1735.08 3152.79C1731.91 3154.6 1726.56 3153.53 1726.56 3153.53Z" fill="#F0A17D"/>
            <path d="M1141.25 2381.19C1309.88 2351.81 1451.44 2414.73 1451.44 2414.73C1279.11 2259.65 1141.25 2381.19 1141.25 2381.19Z" fill="#E04545"/>
            <path d="M1646.47 3014C1796.48 3000.04 1872.96 2899.17 1912.28 2837.83C1951.61 2776.49 2027.11 2318.79 2027.11 2318.79L1769.16 2331.37L1646.47 3014Z" fill="#F0A17D"/>
            <path d="M1647.25 3010.07C1509.63 3005.35 1419.91 2881.21 1480.53 2867.13C1541.16 2853.07 1571.76 2900.75 1613.44 2932.2C1655.12 2963.67 1647.25 3010.07 1647.25 3010.07Z" fill="#F0A17D"/>
            <path d="M1972.77 2613.73C1981.11 2573.11 1989.13 2531.45 1996.36 2492.71L1797.67 2422L1754.01 2798.32L1823.27 2845.51L1874.93 2590.11C1874.93 2590.11 1922.89 2593.07 1972.77 2613.73Z" fill="#F0A17D"/>
            <path d="M2024.75 2028.59C2132.49 2090.72 2060.13 2628.64 2056.99 2634.93C1959.47 2538.99 1725.11 2477.64 1725.11 2477.64C1810.05 2161.49 1917 2010.51 2024.75 2028.59Z" fill="#F95959"/>
            <path d="M1848.88 2194.48C1877.97 2129.21 1951.12 2061.57 1951.12 2061.57C1951.12 2061.57 1859.11 2128.43 1851.24 2147.29C1843.37 2166.17 1848.88 2194.48 1848.88 2194.48Z" fill="#E04545"/>
            <path d="M1709.39 2051.4C1709.39 2051.4 1504.91 2573.59 1456.15 2729.31C1407.39 2885.01 1553.67 3021.85 1646.47 3014C1739.27 3006.13 1823.27 2918.05 1833.64 2803.23C1838.69 2747.32 1882.4 2017.97 1880.83 1997.52C1821.05 1937.76 1709.39 2051.4 1709.39 2051.4Z" fill="#FFC5A6"/>
            <path d="M1880.83 1997.52C1880.83 1828.05 1867.27 1665.84 1866.08 1642.25C1864.91 1618.67 1841.39 1594.63 1811.23 1576.79C1783.31 1560.27 1744.77 1534.12 1730.61 1528.81C1715.28 1523.51 1655.52 1526.65 1603.61 1526.65C1551.71 1526.65 1528.89 1510.52 1504.52 1511.31C1480.13 1512.09 1509.16 1577.09 1554.65 1596.24C1577.07 1605.68 1654.33 1605.88 1684.21 1596.44C1714.89 1615.32 1738.48 1632.61 1738.48 1632.61C1699.16 1631.56 1653.48 1634.29 1648.04 1638.91C1625.83 1657.79 1627.6 1683.73 1627.6 1683.73C1608.03 1689.83 1592.99 1711.27 1585.61 1719.52C1579.72 1726.12 1577.65 1738.4 1577.65 1738.4C1558.19 1744.29 1535.77 1776.15 1535.77 1776.15C1528.71 1794.43 1551.71 1887.03 1558.79 1897.65C1565.85 1908.27 1605.97 1914.16 1611.28 1912.99C1614.23 1948.37 1688.55 2119.43 1717.44 2122.37C1746.35 2125.32 1806.51 2145.17 1880.83 1997.52Z" fill="#FFC5A6"/>
            <path d="M1611.28 1912.99C1611.57 1911.51 1592.69 1815.07 1592.69 1815.07L1562.91 1809.17C1562.91 1809.17 1582.67 1819.2 1582.67 1820.39C1582.67 1821.56 1600.67 1912.99 1600.67 1912.99H1611.28Z" fill="#F0A17D"/>
            <path d="M1738.48 1632.61L1797.07 1646.97L1714.8 1616.13L1738.48 1632.61Z" fill="#F0A17D"/>
            <path d="M1627.6 1683.73L1707.41 1689.24L1627.99 1673.52L1627.6 1683.73Z" fill="#F0A17D"/>
            <path d="M1577.65 1738.4L1657.88 1743.51L1580.21 1729.83C1578.07 1733.23 1577.65 1738.4 1577.65 1738.4Z" fill="#F0A17D"/>
            <path d="M1413.01 3022.88L1374.17 2984.4L1388.59 3025.61L1413.01 3022.88Z" fill="#F0A17D"/>
            <path d="M1834.43 3081.63C1838.65 3043.68 1840.13 2994.73 1840.13 2994.73L1860.19 3031C1852.23 3026.88 1848.39 3020.87 1848.39 3020.87C1846.03 3057.25 1848.2 3091.91 1848.2 3091.91C1842.49 3090.87 1834.43 3081.63 1834.43 3081.63Z" fill="#F0A17D"/>
            <path d="M1100.09 1333.88C1064.05 1318.01 1016.11 1331.11 1006.68 1375.64C995.08 1430.37 1031.13 1489.45 1078.97 1512.47C1126.83 1535.47 1218.95 1521.09 1242.67 1495.24C1279.91 1454.64 1162.69 1361.44 1100.09 1333.88Z" fill="#FFC5A6"/>
            <path d="M1221.32 1449.23C1221.32 1449.23 1191.36 1449.33 1178.8 1442.23C1166.23 1435.12 1137.63 1393.68 1137.63 1393.68C1088.77 1367.64 1032.69 1377.19 1035.17 1419.12C1043 1399.45 1056.48 1391.11 1076.99 1389.6C1097.49 1388.08 1129.44 1400.05 1131.92 1401.85C1140.13 1417.45 1167.2 1443.72 1167.2 1443.72C1156 1467.11 1151.72 1471.19 1151.72 1471.19C1152.24 1448.92 1179.99 1452.69 1179.99 1452.69C1199.6 1456.71 1221.32 1449.23 1221.32 1449.23Z" fill="#F0A17D"/>
            <path d="M1084.88 1390.19C1105.61 1395.71 1070.24 1427.31 1093.85 1458.25C1117.47 1489.2 1196.41 1480.45 1197.28 1468.05C1198.15 1455.65 1192.6 1450.24 1192.6 1450.24L1166.49 1440.8L1132.12 1398.57C1132.12 1398.57 1097.59 1388.48 1084.88 1390.19Z" fill="#F0A17D"/>
            <path d="M2093.75 642.974L1970.61 562.56L2045.31 373.374L2222.52 322.134L2159.29 175.107L2013.84 208.28L2016.03 351.054L1861.93 363.721L1847.31 232.347L1919.21 27.3073L2234.81 0.5604L2365.23 140.934L2315.21 465.48L2142.13 517.08L2093.75 642.974ZM1930.97 803.707L1921.73 706.121L1982.95 660.427L2124.96 679L2110.49 809.907L1930.97 803.707Z" fill="#FF7E67"/>
            <path d="M2340.68 1776L2267.92 1701.83L2348.2 1582.59L2478.28 1574.12L2456.96 1463.05L2351.53 1463.87L2331.37 1562.75L2223.09 1548.08L2232.95 1455.2L2313.69 1324.6L2535.57 1354.05L2604.25 1470.72L2520.49 1687.12L2393.19 1696.45L2340.68 1776ZM2203.95 1862.23L2212.39 1793.47L2261.57 1771.24L2356.77 1805.6L2326.89 1893.76L2203.95 1862.23Z" fill="#FF7E67"/>
            <path d="M546.653 1879.88L495.227 1819.13L514.8 1760.29L618.027 1706.77L669.133 1800.72L546.653 1879.88ZM580.507 1697.27L461.173 1700.81L423.146 1540.11L517.427 1423.73L407.08 1355.12L325.56 1444.72L393.267 1538.83L296.48 1618.77L225.773 1538.04L178.533 1368.05L376.387 1203.79L528.413 1236.79L645.693 1476.23L554.32 1590.92L580.507 1697.27Z" fill="#FF7E67"/>
            <path d="M2155.13 2795.85L2102.51 2813.8C2102.51 2813.8 2100.59 2818.96 2108.25 2823.83C2108.25 2823.83 2104.43 2835.48 2116.72 2837.73C2116.72 2837.73 2115.77 2852.15 2124.92 2851.55L2162.25 2807.25C2158.97 2804.89 2155.77 2801.2 2155.13 2795.85Z" fill="#FFC5A6"/>
            <path d="M2155.13 2795.85C2155.77 2801.2 2158.97 2804.89 2162.25 2807.25L2178.6 2787.85L2155.13 2795.85Z" fill="#233142"/>

        </svg>

        {{-- Title --}}
        <h1 class="font-semibold text-[30px] md:text-[32px] text-center -tracking-[.3px] mb-5">
            Something went wrong&hellip;
        </h1>

        {{-- Description --}}
        <h2 class="text-[18px] text-gray-600/[.82] text-center leading-normal max-w-[500px] px-6 mb-7">

            {{-- Text --}}
            It looks like you encountered a {{ $code }} error. That means

            {{-- Detail --}}
            {{
                [
                    403 => 'you are not allowed to access this page or resource.',
                    404 => 'the page you were trying to access could not be found.',
                    405 => 'the request method is not valid for the chosen resource.',
                    500 => 'the server encountered an error. Try again, or contact us.',
                    503 => 'we are performing routine maintenance. Try again later.',
                ][$code]
            }}

        </h2>

        {{-- Link --}}
        <a href="/"
           class="text-[13px] font-semibold text-indigo-600 hover:text-sky-600 uppercase transition duration-300">

            {{-- Text --}}
            Go home

        </a>

        {{-- Credit --}}
        <a target="_blank"
           class="text-[12px] text-gray-400 absolute left-2 bottom-2"
           href="https://www.vecteezy.com/vector-art/3475012-confused-man-with-question-mark-concept-flat-illustration">

            {{-- Text --}}
            Image Credit

        </a>

    </body>

</html>