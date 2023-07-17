<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
<html> 
<body style="background-image: url(photo213.png);background-size: 105.4% 80%">
  <h2 align="center" style="color: red;font-size:55px;font-style: italic;">Menu Card</h2>

  <table align="center" border="2" width="39.5%">
    <tr bgcolor="#9acd32">
      <th style="text-align:left;font-size:25px;" >Category</th>
      <th style="text-align:left;font-size:25px;">Food-Items</th>
      <th style="text-align:left;font-size:25px;">Price</th>
    </tr>
    <xsl:for-each select="catalog/cd">
    <tr>
      <td style="font-size:25px;"><xsl:value-of select="Category"/></td>
      <td style="font-size:25px;"><xsl:value-of select="Food-Items"/></td>
      <td style="font-size:25px;"><xsl:value-of select="price"/></td>
    </tr>
    </xsl:for-each>
  </table>
    <h2 align="center">Click here to <a href="food-selection.html" target="_blank"> Order</a></h2>
</body>
</html>
</xsl:template>
</xsl:stylesheet>