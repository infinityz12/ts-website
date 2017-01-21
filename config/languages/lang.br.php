<?php
/*
 * Tradução para PT-BR para tsweb.
 * @copy Michel Lago <michel_physalis@hotmail.com>
 */

$lang = array();

/************* General *************/

$lang["general"]["langcode"] = "br_GB";
$lang["general"]["scripterror"] = "Erro Ocorrido! {0}: {1}";

/************* Menu *************/

$lang["navbar"]["navigation"] = "Navegação";

$lang["navbar"]["viewer"] = "Ver Servidor";
$lang["navbar"]["bans"] = "Lista de Banidos";
$lang["navbar"]["rules"] = "Regras do Servidor";
$lang["navbar"]["menu"] = "Menu";

$lang["navbar"]["connect"] = "Conectar ao Servidor";
$lang["navbar"]["connecttooltip"] = "Clique para se conectar {0}";


/************* Rodapé *************/

$lang["footer"]["css"] = "CSS por";
$lang["footer"]["background"] = "Background";


/************* Status do Servidor *************/

$lang["serverstatus"]["title"] = "Status do Servidor";
$lang["serverstatus"]["address"] = "Endereço";
$lang["serverstatus"]["loading"] = "Carregando...";

$lang["serverstatus"]["online"] = "Online";
$lang["serverstatus"]["offline"] = "Offline";
$lang["serverstatus"]["uptime"] = "Uptime";
$lang["serverstatus"]["version"] = "Versão";
$lang["serverstatus"]["avgping"] = "Ping";
$lang["serverstatus"]["avgpl"] = "Perda de pacotes";


/************* Lista de Admins *************/

$lang["adminlist"]["title"] = "Lista de Admin's";
$lang["adminlist"]["emptygroup"] = "Este grupo esta vazio";
$lang["adminlist"]["status"]["online"] = "Online";
$lang["adminlist"]["status"]["away"] = "Ausente";
$lang["adminlist"]["status"]["offline"] = "Offline";
$lang["adminlist"]["lastupdate"] = "Ultima atualização: {0}";


/************* Server viewer ( embaixo da lista de adm e ebaixo da aba contato) *************/

$lang["svpb"]["title"] = "Servidor Online";
$lang["svpb"]["takealook"] = "Dê uma olhada &raquo;";


/************************************/
/************* SUB-PAGINAS **********/
/************************************/


/************* Noticias - index.php *************/

$lang["index"]["title"] = "Notícias";
$lang["index"]["showmore"] = "Mostrar Mais";
$lang["index"]["showless"] = "Mostrar Menos";

$lang["index"]["errortitle"] = "Erro: Diretório de Noticias não encontrado!";
$lang["index"]["errorsubtitle"] = "Por favor tenha a certeza que o arquivo no diretório <b><code>config/config.php</code></b> está valido.";


/************* Server viewer - viewer.php *************/

$lang["viewer"]["title"] = "Servidor Online";
$lang["viewer"]["lastupdate"] = "Ultima Atualização: {0}";


/************* Lista de Bans - bans.php *************/

$lang["banlist"]["title"] = "Lista de Banidos";
$lang["banlist"]["datatablesurl"] = "//cdn.datatables.net/plug-ins/1.10.12/i18n/English.json";
$lang["banlist"]["emptylist"] = "Lista de Ban está vazia";
$lang["banlist"]["lastupdate"] = "Ultima Atualização: {0}";

$lang["banlist"]["table"]["emptyreason"] = "(sem reação)";
$lang["banlist"]["table"]["permaban"] = "Permanente";

$lang["banlist"]["table"]["nickname"] = "Nome";
$lang["banlist"]["table"]["reason"] = "Reação";
$lang["banlist"]["table"]["bannedby"] = "Banido por";
$lang["banlist"]["table"]["bandate"] = "Data do Ban";
$lang["banlist"]["table"]["expires"] = "Expira";

/************* Regras do Servidor - rules.php *************/

$lang["rules"]["title"] = "Regras do servidor";
$lang["rules"]["filenotfound"] = "Error: Arquivo <code>config/rules.md</code> não foi encontrado!";
$lang["rules"]["readerror"] = "Error: Não foi possível acessar o arquivo <code>config/rules.md</code>!";
