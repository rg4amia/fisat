<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{ public_path('assets/css/font_opensan.css') }}" rel="stylesheet">

    <style type="text/css">

        ol {
            margin: 0;
            padding: 0
        }

        table td,
        table th {
            padding: 0
        }

        .c2 {
            padding: 5pt 5pt 5pt 5pt;
            vertical-align: top;
            border-right-color: #000000;
            border-left-width: 1pt;
            border-bottom-width: 1pt;
            width: 160pt;
            border-top-color: #000000;
        }

        .c1 {
            color: #000000;
            font-weight: 300;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 14pt;
            font-family: "Bookman Old Style";
            font-style: normal
        }

        .c4 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            orphans: 2;
            widows: 2;
            text-align: left;
            height: 11pt
        }

        .c5 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            text-align: left;
            height: 11pt
        }

        .c0 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            text-align: right
        }

        .c3 {
            border-spacing: 0;
            border-collapse: collapse;
            margin-right: auto
        }

        .c6 {
            background-color: #ffffff;
            max-width: 451.4pt;
            padding: 72pt 72pt 72pt 72pt
        }

        .c7 {
            height: 0pt
        }

        .title {
            padding-top: 0pt;
            color: #000000;
            font-size: 26pt;
            padding-bottom: 3pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        .subtitle {
            padding-top: 0pt;
            color: #666666;
            font-size: 15pt;
            padding-bottom: 16pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        li {
            color: #000000;
            font-size: 11pt;
            font-family: "Arial"
        }

        p {
            margin: 0;
            color: #000000;
            font-size: 11pt;
            font-family: "Arial"
        }

        h1 {
            padding-top: 20pt;
            color: #000000;
            font-size: 20pt;
            padding-bottom: 6pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h2 {
            padding-top: 18pt;
            color: #000000;
            font-size: 16pt;
            padding-bottom: 6pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h3 {
            padding-top: 16pt;
            color: #434343;
            font-size: 14pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h4 {
            padding-top: 14pt;
            color: #666666;
            font-size: 12pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h5 {
            padding-top: 12pt;
            color: #666666;
            font-size: 11pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h6 {
            padding-top: 12pt;
            color: #666666;
            font-size: 11pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            font-style: italic;
            orphans: 2;
            widows: 2;
            text-align: left
        }

    </style>
</head>
<body>
<table>
    <tbody>
    <tr>
        <td><img alt="" src="{{ public_path('assets/images/forum_logo.png') }}" style="height: 150px" /></td>
    </tr>
    </tbody>
</table>

<br>

<table>
    <tbody>
    <tr>
        <td>
            <p style="text-align:center">
                <span style="font-family: 'Bookman Old Style'; font-size:25.0pt;font-weight: bold; color: #db863d;">BADGE ENTREPRISE AU FORUM</span>
            </p>
        </td>
    </tr>
    </tbody>
</table>

<br>

<table>
    <tbody>

        <tr>
            <td class="c2">
                <span class="c1">NOM ENTREPRISE :</span>
            </td>
            <td class="c2" rowspan="1">
                <span class="c1">{{ $entreprise->nom_entreprise }}</span>
            </td>
        </tr>

        <tr class="c7">
            <td class="c2" rowspan="1">
                <span class="c1">RESPONSABLE :</span>
            </td>
            <td class="c2" rowspan="1">
                <span class="c1">{{ $entreprise->nom_responsable }}</span>
            </td>
        </tr>

        <tr class="c7">
            <td class="c2" rowspan="1">
                <span class="c1">ACTIVITE :</span>
            </td>
            <td class="c2" rowspan="1">
                <span class="c1">{{ $entreprise->secteuractivite->libelle }}</span>
            </td>
        </tr>

        <tr class="c7">
            <td class="c2" rowspan="1">
                <span class="c1">T&Eacute;L&Eacute;PHONE :</span>
            </td>
            <td class="c2" rowspan="1">
                <span class="c1">{{ $entreprise->telephone }}</span>
            </td>
        </tr>

    </tbody>
</table>

<br>
<br>
<br>
<table>
    <tbody>
    <tr>
        <td><img alt="" src="{{ public_path('assets/images/forum_partenaire.png') }}" style="height: 150px" /></td>
    </tr>
    </tbody>
</table>

</body>
</html>
