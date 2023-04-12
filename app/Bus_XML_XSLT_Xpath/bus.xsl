<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="buses">
    <buses>
        <xsl:apply-templates/>
    </buses>
</xsl:template>

<xsl:template match="bus">
    <bus>
        <xsl:copy-of select="plateNumber"/>
        <xsl:copy-of select="model"/>
        <xsl:copy-of select="purchaseDate"/>
        <xsl:copy-of select="roadTaxExpirationDate"/>
        <xsl:copy-of select="busType"/>
        <xsl:choose>
            <xsl:when test="busType/@kind='DoubleDeckBus'">
                <seat type="DoubleDeckBus">45</seat>
            </xsl:when>
            <xsl:when test="busType/@kind='SingleDeckBus'">
                <seat type="SingleDeckBus">27</seat>
            </xsl:when>
            <xsl:otherwise>
                <seat>0</seat>
            </xsl:otherwise>
        </xsl:choose>
    </bus>
</xsl:template>

</xsl:stylesheet>
