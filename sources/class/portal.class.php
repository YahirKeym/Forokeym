<?php
/**
 * Será la base principal del foro (Header y footer)
 */
class portalForo
{
    /**
     * $cMostrar Mostrara lo que le pidamos, en este caso, será el header y el footer
     * @var string
     */
    private $cMostrar = "";
    /**
     * $cUrlArchivosBase Guardara la url para la configuración de los html
     * @var string
     */
    private $cUrlArchivosBase = "";
    /**
     * $aBaseFiles Guardara los archivos base que usaremos
     * @var array
     */
    private $aBaseFiles = [];
    /**
     * $aCssElements Guardara los elementos css que se usaran de manera extra al portal
     * @var array
     */
    private $aCssElements = [];
    /**
     * $oPortalHtml Será el objeto que guardara el html principal del portal
     * @var object
     */
    private $oPortalHtml = null;
    /**
     * __construct Hará la configuración necesaria para que todo funcione. Configurara el template que se usara, la conexión, etc
     * @param array $aConfiguracion Base de datos de configuración provisional.
     */
    public function __construct($aConfiguracion = [])
    {
        $this->cUrlArchivosBase = dirname(dirname(dirname(__FILE__))) . '/templates/' . $aConfiguracion['configtemplate'].'/';
        require_once $this->cUrlArchivosBase . 'portal.template.php';
        $this->oPortalHtml = new portalForoHtml();
    }
    public function getHeader()
    {
        $cCssNamePack = $this->createPackData($this->aCssElements, "css");
        return $this->oPortalHtml->headerHtml("Forokeym");
    }
    public function getFooter()
    {

    }
    public function addMetaElement()
    {

    }
    /**
     * addCssElement Agregara los archivos css que necesitemos y le pidamos
     * @param string $cCssElement Será el archivo css que le mandaremos o agregaremos
     */
    public function addCssElement($cCssElement = "")
    {
        $this->aCssElements[$cCssElement] = [];
    }
    public function addScriptElement()
    {

    }
    private function createPackData($aFiles = [], $cTypeFiles = "")
    {
        $this->selectBaseFiles($cTypeFiles);
        $cCodificacion = $this->createShaPack($aFiles, $cTypeFiles);
        $this->extractDataFiles($this->aBaseFiles,$cTypeFiles);
    }
    /**
     * extractDataFiles Extraera el contenido de los archivos para poder agregarlos al archivo pack
     * @param  array  $aFiles     Serán los archivos externos
     * @param  string $cTypeFiles Será el tipo de archivo que se manejara
     * @return string             Regresa el contenido de los archivos en una sola variable
     */
    private function extractDataFiles($aFiles = [],$cTypeFiles = "")
    {
    	$cContenido = "";
    	foreach ($aFiles as $cArchivos) {
    		$cRutaArchivo = $this->cUrlArchivosBase.'assets/'.$cTypeFiles.'/'.$cArchivos.'.'.$cTypeFiles;
    		 $cContenido .= file_get_contents($cRutaArchivo, true);
    	}
    	return $cContenido;
    }
    /**
     * selectBaseFiles Seleccionaremos los archivos base dependiendo del tipo de archivos que le pidamos
     * @param  string $cTypeFiles [description]
     * @return [type]             [description]
     */
    private function selectBaseFiles($cTypeFiles = "")
    {
        switch ($cTypeFiles) {
            case 'css':
                $this->aBaseFiles = ['bootstrap', 'main'];
                break;
            case 'js':
                $this->aBaseFiles = ['bootstrap', 'main'];
                break;
        }
    }
    /**
     * createShaPack Creara el sha1 para generar el paquete de datos, mediante los archivos base y los agregados
     * @param  string $aFiles     Son los archivos agregados
     * @param  string $cTypeFiles Es el tipo de archivo que se manejara
     * @return string             Regresa el sha1 que le solicitamos
     */
    private function createShaPack($aFiles = "", $cTypeFiles = "")
    {
    	$cNombreSha = "";
        foreach ($this->aBaseFiles as $archivosBase) {
            $cNombreSha .= $archivosBase . "." . $cTypeFiles;
        }
        $cNameFiles = array_keys($aFiles);
        foreach ($cNameFiles as $archivosAgregados) {
            $cNombreSha .= $archivosAgregados . "." . $cTypeFiles;
        }
        return sha1($cNombreSha);
    }
}
