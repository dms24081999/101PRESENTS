<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<table cellpadding="10">
<xsl:for-each select="product/cd">
    <tr>
      <th><xsl:value-of select="title"/></th>
	<th>:</th>
      <td><xsl:value-of select="des"/></td>
    </tr>
    </xsl:for-each>
</table>

</xsl:template>
</xsl:stylesheet>