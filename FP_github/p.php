<html>
    <head>
    <style type="text/css" media="print">
    @media print
    {
    #non-printable { display: none; }
    #printable {
    display: block;
    width: 100%;
    height: 100%;
    }
    }
    </style>
    </head>
    <body>
    <div id="printable" >
    Your content to print
    </div>
    <div id='non-printable'>
    this is not printable section
    </div>
    <input type="button" id="non-printable" class=normaltext onclick="JavaScript:window.print();" value="print" />
    </body>
    </html>