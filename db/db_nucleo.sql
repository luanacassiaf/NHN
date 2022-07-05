-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.17 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para db_nucleo
CREATE DATABASE IF NOT EXISTS `db_nucleo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_nucleo`;

-- Copiando estrutura para tabela db_nucleo.album
CREATE TABLE IF NOT EXISTS `album` (
  `idalbum` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `categoria_idcategoria` int(11) NOT NULL,
  PRIMARY KEY (`idalbum`),
  KEY `fk_album_categoria1_idx` (`categoria_idcategoria`),
  CONSTRAINT `fk_album_categoria1` FOREIGN KEY (`categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_nucleo.album: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
INSERT INTO `album` (`idalbum`, `nome`, `categoria_idcategoria`) VALUES
	(4, 'Visitas Mediadas', 3),
	(5, 'Exposição Temporária', 1),
	(6, 'Multimídia - Imagens', 2),
	(7, 'Curadoria', 4),
	(8, 'Visitas a escolas', 9),
	(9, 'Observatório Astronômico', 5),
	(10, 'Atividades de Férias', 6),
	(11, 'Acervo - Fotos', 8),
	(20, 'Vertebrados', 7),
	(21, 'Invertebrados', 7);
/*!40000 ALTER TABLE `album` ENABLE KEYS */;

-- Copiando estrutura para tabela db_nucleo.areas
CREATE TABLE IF NOT EXISTS `areas` (
  `idareas` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `apresentacao` text,
  `linhas_pesquisa` text,
  `projetos` text,
  `parceiros` text,
  PRIMARY KEY (`idareas`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_nucleo.areas: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
INSERT INTO `areas` (`idareas`, `nome`, `apresentacao`, `linhas_pesquisa`, `projetos`, `parceiros`) VALUES
	(1, 'Biodiversidade', '<p align="justify" style="margin-bottom: 0cm; border: none; padding: 0cm; line-height: 150%; page-break-inside: auto; orphans: 2; widows: 2; page-break-after: auto">\r\n	<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; A Biodiversidade no Instituto Federal Campus Inconfidentes &eacute; pesquisada em diversos setores da Institui&ccedil;&atilde;o, os quais visam a manuten&ccedil;&atilde;o da diversidade biol&oacute;gica a partir do conhecimento, que pode servir como base para outros setores da sociedade, bem como para a educa&ccedil;&atilde;o.</span></span></p>\r\n<p align="justify" style="margin-bottom: 0cm; border: none; padding: 0cm; line-height: 150%; page-break-inside: auto; orphans: 2; widows: 2; page-break-after: auto">\r\n	&nbsp;</p>\r\n<p dir="rtl" style="text-indent: 1.27cm; margin-bottom: 0cm; line-height: 150%; text-align: left;">\r\n	<strong><span style="font-size: 16px;"><span style="font-family: verdana, geneva, sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp; ZOOLOGIA</span></span></strong></p>\r\n<p align="justify" style="text-indent: 1.27cm; margin-bottom: 0cm; line-height: 150%">\r\n	<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">O grupo de pesquisa em Zoologia foi fundado em 2013 pelo Prof. Dr. Marcos Magalh&atilde;es com o objetivo de investigar quest&otilde;es de biodiversidade e Etnobiologia. Parte do material coletado em campo &eacute; cedido ao MPL para ser exposto.</span></span></p>\r\n<p align="justify" style="text-indent: 1.27cm; margin-bottom: 0cm; line-height: 150%">\r\n	&nbsp;</p>\r\n<p dir="rtl" style="margin-bottom: 0cm; line-height: 150%; text-align: left;">\r\n	<span style="font-size: 16px;"><span style="font-family: verdana, geneva, sans-serif;"><b>&nbsp; CURADORIA</b></span></span></p>\r\n<ul>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Recebimento e prepara&ccedil;&atilde;o de material para acervo e exposi&ccedil;&otilde;es</span></span></p>\r\n	</li>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Tombamento de patrim&ocirc;nio</span></span></p>\r\n	</li>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Elabora&ccedil;&atilde;o e planejamento do espa&ccedil;o e das exposi&ccedil;&otilde;es</span></span></p>\r\n	</li>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Media&ccedil;&atilde;o de visitas</span></span></p>\r\n	</li>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Guarda da identidade legal do Museu e cuidado para com os demais documentos</span></span></p>\r\n	</li>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">No MPL:</span></span></p>\r\n		<ul>\r\n			<li>\r\n				<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n					<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">manuten&ccedil;&atilde;o e atualiza&ccedil;&atilde;o das pe&ccedil;as taxidermizadas, osteol&oacute;gicas e biomineralizadas</span></span></p>\r\n			</li>\r\n			<li>\r\n				<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n					<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">prepara&ccedil;&atilde;o de material f&oacute;ssil</span></span></p>\r\n			</li>\r\n		</ul>\r\n	</li>\r\n</ul>\r\n<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n	&nbsp;</p>\r\n<p style="margin-bottom: 0cm; line-height: 150%;">\r\n	<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;"><b>TAXIDERMIA</b></span></span></p>\r\n<p style="text-indent: 1.27cm; margin-bottom: 0cm; line-height: 150%;">\r\n	<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">O Museu de Hist&oacute;ria Natural Professor Laercio Loures conta com um numeroso acervo de animais taxidermizados, aberto para visita&ccedil;&atilde;o, contendo animais de todos os biomas do Brasil, com uma boa variedade de esp&eacute;cies e fam&iacute;lias.</span></span></p>\r\n<p style="text-indent: 1.27cm; margin-bottom: 0cm; line-height: 150%;">\r\n	<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Considerando a import&acirc;ncia educativa dessa exposi&ccedil;&atilde;o, e a constante demanda de realiza&ccedil;&atilde;o do procedimento de taxidermia (em virtude dos animais que chegam at&eacute; n&oacute;s, mortos por atropelamento e doen&ccedil;as, principalmente), est&aacute; sendo criado um N&uacute;cleo de Taxidermia e Pesquisa, realizado por alunos de Ci&ecirc;ncias Biol&oacute;gicas, com apoio do Coordenador Prof. Dr. Marcos Magalh&atilde;es.</span></span></p>\r\n<p align="justify" style="text-indent: 1.27cm; margin-bottom: 0cm; line-height: 150%">\r\n	&nbsp;</p>\r\n', '<ul>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Biodiversidade, ecologia, taxonomia e ecologia de diferentes grupos de invertebrados: insetos - vespas sociais, odonata, megaloptera e lepidoptera; e aracn&iacute;deos - opili&otilde;es e aranhas; e vertebrados (anf&iacute;bios anuros).</span></span></p>\r\n	</li>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Etnozoologia, resgate do conhecimento popular sobre insetos e serpentes.</span></span></p>\r\n	</li>\r\n</ul>\r\n', '<ul>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Biodiversidade (lepidoptera, megaloptera, Opilione) no Parque Estadual do Papagaio, MG</span></span></p>\r\n	</li>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Riqueza de esp&eacute;cies de odonata no munic&iacute;pio de Bueno Brand&atilde;o, MG</span></span></p>\r\n	</li>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Biodiversidade (vespas sociais e opilione) no munic&iacute;pio de Ol&iacute;mpio Noronha, MG</span></span></p>\r\n	</li>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Coleta passiva de vespas sociais no munic&iacute;pio de Inconfidentes, MG</span></span></p>\r\n	</li>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Intera&ccedil;&atilde;o ecol&oacute;gica entre vespas sociais e aves</span></span></p>\r\n	</li>\r\n</ul>\r\n', '<p>\r\n	<span style="font-family:verdana,geneva,sans-serif;"><span style="font-size: 16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Marcos Magalh&atilde;es de Souza</span></span></p>\r\n'),
	(2, 'Educação', '<p align="justify" style="text-indent: 1.27cm; margin-bottom: 0cm; line-height: 150%">\r\n	<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">O<b> </b>Museu de Hist&oacute;ria Natural Professor Laercio Loures, bem como as a&ccedil;&otilde;es realizadas atrav&eacute;s dele, possuem o objetivo principal de adequar seu espa&ccedil;o e a abordagem de forma did&aacute;tica e inclusiva, com o objetivo de promover a&ccedil;&otilde;es e eventos que veiculem a produ&ccedil;&atilde;o acad&ecirc;mica ao p&uacute;blico, e possam estimular a preserva&ccedil;&atilde;o e a pesquisa.</span></span></p>\r\n', '<ul>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Educa&ccedil;&atilde;o inclusiva e acessibilidade</span></span></p>\r\n	</li>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Museologia e pluralidade de recursos educacionais no ensino das Ci&ecirc;ncias Naturais</span></span></p>\r\n	</li>\r\n</ul>\r\n<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n	&nbsp;</p>\r\n', '<ul>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Museu acess&iacute;vel: visitas mediadas com Tradutor-Int&eacute;rprete de Libras e Leitura T&aacute;til</span></span></p>\r\n	</li>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Noites astron&ocirc;micas no IFSULDEMINAS: uma estrat&eacute;gia no Ensino de F&iacute;sica</span></span></p>\r\n	</li>\r\n</ul>\r\n', '<p>\r\n	Parceiros</p>\r\n'),
	(3, 'Etnografia', '<p align="justify" style="text-indent: 1.27cm; margin-bottom: 0cm; line-height: 150%">\r\n	<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">A partir da Etnografia pretende-se reconhecer as influ&ecirc;ncias &eacute;tnicas na constru&ccedil;&atilde;o hist&oacute;rica do povo, nas diversas esferas regionais, al&eacute;m de apresentar ao visitante do Museu de Hist&oacute;ria Natural Prof. La&eacute;rcio Loures a pluralidade cultural respons&aacute;vel pela constru&ccedil;&atilde;o de sua identidade cultural.</span></span></p>\r\n', '<ul>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Etnobot&acirc;nica e fitoterapia</span></span></p>\r\n	</li>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Resgate etnogr&aacute;fico da agricultura rudimentar para estudos comparativos em agroecologia</span></span></p>\r\n	</li>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Arqueologia</span></span></p>\r\n	</li>\r\n</ul>\r\n', '<ul>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Fitoterapia e agroecologia: implanta&ccedil;&atilde;o de um ervan&aacute;rio para a populariza&ccedil;&atilde;o do uso de plantas medicinais em Inconfidentes, MG</span></span></p>\r\n	</li>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Levantamento etnobot&acirc;nico do conhecimento de plantas medicinais entre produtores rurais no entorno do munic&iacute;pio de Inconfidentes, MG</span></span></p>\r\n	</li>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Levantamento etnogr&aacute;fico de paleo&iacute;ndios do sul e sudeste de Minas atrav&eacute;s da arte rupestre</span></span></p>\r\n	</li>\r\n</ul>\r\n', '<p>\r\n	Parceiros</p>\r\n'),
	(4, 'Geociências', '<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n	<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; As investiga&ccedil;&otilde;es em Geoci&ecirc;ncias associadas ao NHN s&atilde;o coordenadas pelos professores Dra. Fernanda Aparecida Leonardi e M&aacute;rcio Luiz da Silva, com o objetivo de compreender e interpretar os ambientes pret&eacute;ritos e a din&acirc;mica da paisagem, bem como trazer suporte te&oacute;rico e did&aacute;tico &agrave;s atividades relacionadas &agrave; evolu&ccedil;&atilde;o biol&oacute;gica e tempo geol&oacute;gico, no Museu de Hist&oacute;ria Natural Prof. La&eacute;rcio Loures.</span></span></p>\r\n', '<ul>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Reconstitui&ccedil;&otilde;es de ambientes pret&eacute;ritos atrav&eacute;s da paleopedologia</span></span></p>\r\n	</li>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Identifica&ccedil;&atilde;o e correla&ccedil;&atilde;o de superf&iacute;cies geom&oacute;rficas</span></span></p>\r\n	</li>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Ilustra&ccedil;&atilde;o de hist&oacute;ria natural para a reconstitui&ccedil;&atilde;o de organismos f&oacute;sseis</span></span></p>\r\n	</li>\r\n	<li>\r\n		<p align="justify" style="margin-bottom: 0cm; line-height: 150%">\r\n			<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Curadoria paleontol&oacute;gica</span></span></p>\r\n	</li>\r\n</ul>\r\n', '<p>\r\n	Projetos</p>\r\n', '<p>\r\n	Parceiros</p>\r\n');
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;

-- Copiando estrutura para tabela db_nucleo.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_nucleo.categoria: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`idcategoria`, `categoria`) VALUES
	(1, 'Museu > Acervo > Exposição Temporária'),
	(2, 'Museu > Multimídia > Imagens'),
	(3, 'Museu > Ações Educativas > Visitas  Mediadas'),
	(4, 'Museu > Curadoria'),
	(5, 'Museu > Ações Educativas > Observatório Astronômico'),
	(6, 'Museu > Ações Educativas > Atividades de Férias'),
	(7, 'Museu > Acervo > Categorias'),
	(8, 'Museu > Acervo > Fotos'),
	(9, 'Museu > Ações Educativas > Visitas  a escolas');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Copiando estrutura para tabela db_nucleo.conteudo
CREATE TABLE IF NOT EXISTS `conteudo` (
  `idconteudo` int(11) NOT NULL AUTO_INCREMENT,
  `local` enum('Quem Somos','Fale Conosco','Museu','Áreas de Pesquisa','Publicações','Vespas Sociais') NOT NULL,
  `categoria` enum('Resumo Home','Museu Menu') NOT NULL,
  `texto` text,
  PRIMARY KEY (`idconteudo`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_nucleo.conteudo: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `conteudo` DISABLE KEYS */;
INSERT INTO `conteudo` (`idconteudo`, `local`, `categoria`, `texto`) VALUES
	(8, 'Museu', 'Resumo Home', '<p align="justify" style="text-indent: 1.27cm; margin-bottom: 0cm; line-height: 200%">\r\n	<span style="font-size:18px;"><span style="font-family: verdana, geneva, sans-serif;">O MPL foi inaugurado em 2015 pelo Prof. Roberto Marin Viestel Pantanal, reunindo o acervo pessoal do Prof. La&eacute;rcio Loures, constru&iacute;do em mais de trinta anos de trabalho. O objetivo do MPL &eacute; contribuir com o relato da hist&oacute;ria da vida na Terra, salvaguardando o patrim&ocirc;nio natural dos biomas brasileiros e da hist&oacute;ria geol&oacute;gica.</span></span></p>\r\n<p align="justify" style="text-indent: 1.27cm; margin-bottom: 0cm; line-height: 200%">\r\n	<span style="font-size:18px;"><span style="font-family: verdana, geneva, sans-serif;">O Acervo do MPL &eacute; composto por pe&ccedil;as provenientes de diversas fontes: grande parte fora doada pelo professor La&eacute;rcio Loures, de seu acervo particular; doa&ccedil;&otilde;es de diversos setores do Instituto Federal; animais taxidermizados no pr&oacute;prio campus, em geral resgatados doentes ou atropelados; esp&eacute;cimes coletados durante trabalhos de campo e advindos de cole&ccedil;&otilde;es de pesquisa cient&iacute;fica.</span></span></p>\r\n<p align="justify" style="text-indent: 1.27cm; margin-bottom: 0cm; line-height: 200%">\r\n	&nbsp;</p>\r\n'),
	(9, 'Áreas de Pesquisa', 'Resumo Home', '<p align="justify" style="text-indent: 1.27cm; margin-bottom: 0cm; line-height: 200%">\r\n	<span style="font-size:18px;"><span style="font-family: verdana, geneva, sans-serif;">O N&uacute;cleo de Hist&oacute;ria Natural (NHN) foi criado em 2017 pela equipe do Museu de Hist&oacute;ria Natural Prof. La&eacute;rcio Loures (MPL) sob a coordena&ccedil;&atilde;o do Prof. Dr. Marcos Magalh&atilde;es de Souza, com o objetivo de integrar as pesquisas em Hist&oacute;ria Natural no IFSULDEMINAS - Campus Inconfidentes, de modo a subsidiar as atividades do MPL.</span></span></p>\r\n<p align="justify" style="text-indent: 1.27cm; margin-bottom: 0cm; line-height: 200%">\r\n	<span style="font-size:18px;"><span style="font-family: verdana, geneva, sans-serif;">Dentre os interesses do NHN est&atilde;o as investiga&ccedil;&otilde;es em Biodiversidade, Ecologia, Geoci&ecirc;ncias, Ilustra&ccedil;&atilde;o de Hist&oacute;ria Natural, Etnografia e Hist&oacute;ria das Ci&ecirc;ncias Naturais.</span></span></p>\r\n<p>\r\n	<span style="font-size:18px;"><span style="font-family: verdana, geneva, sans-serif;">O NHN existe com o objetivo de a atender &agrave; Institui&ccedil;&atilde;o oferecendo oportunidades de trabalho com pesquisa e extens&atilde;o &agrave; comunidade.</span></span></p>\r\n'),
	(10, 'Publicações', 'Resumo Home', '<div style="text-align: justify;">\r\n	<span style="font-size:18px;"><span style="font-family: verdana, geneva, sans-serif;">&nbsp; &nbsp; &nbsp;O​​ ​​Museu​ ​de​ ​Hist&oacute;ria​ ​Natural​ ​Professor​ ​Laercio​ ​Loures,​ ​bem​ ​como​ ​as​ ​a&ccedil;&otilde;es realizadas​ ​atrav&eacute;s​ ​dele,​ ​possuem​ ​o​ ​objetivo​ ​principal​ ​de​ ​adequar​ ​seu​ ​espa&ccedil;o​ ​e​ ​a abordagem​ ​de​ ​forma​ ​did&aacute;tica​ ​e​ ​inclusiva,​ ​com​ ​o​ ​objetivo​ ​de​ ​promover​ ​a&ccedil;&otilde;es​ ​e​ ​eventos​ ​que veiculem​ ​a​ ​produ&ccedil;&atilde;o​ ​acad&ecirc;mica​ ​ao​ ​p&uacute;blico,​ ​e​ ​possam​ ​estimular​ ​a​ ​preserva&ccedil;&atilde;o​ ​e​ ​a pesquisa.&nbsp;</span></span></div>\r\n<div>\r\n	&nbsp;</div>\r\n'),
	(11, 'Vespas Sociais', 'Resumo Home', '<div style="text-align: justify;">\r\n	<span style="font-size:18px;"><span style="font-family: verdana, geneva, sans-serif;">&nbsp; &nbsp; &nbsp;O​ ​Museu​ ​de​ ​Hist&oacute;ria​ ​Natural​ ​Professor​ ​Laercio​ ​Loures​ ​conta​ ​com​ ​um​ ​numeroso acervo​ ​de​ ​animais​ ​taxidermizados,​ ​aberto​ ​para​ ​visita&ccedil;&atilde;o,​ ​contendo​ ​animais​ ​de​ ​todos​ ​os biomas​ ​do​ ​Brasil,​ ​com​ ​uma​ ​boa​ ​variedade​ ​de​ ​esp&eacute;cies​ ​e​ ​fam&iacute;lias.&nbsp; Considerando​ ​a​ ​import&acirc;ncia​ ​educativa​ ​dessa​ ​exposi&ccedil;&atilde;o,​ ​e​ ​a​ ​constante​ ​demanda​ ​de realiza&ccedil;&atilde;o​ ​do​ ​procedimento​ ​de​ ​taxidermia​ ​​ ​(em​ ​virtude​ ​dos​ ​animais​ ​que​ ​chegam​ ​at&eacute;​ ​n&oacute;s, mortos​ ​por​ ​atropelamento​ ​e​ ​doen&ccedil;as,​ ​principalmente),​ ​est&aacute;​ ​sendo​ ​criado​ ​um​ ​N&uacute;cleo​ ​de Taxidermia​ ​e​ ​Pesquisa,​ ​realizado​ ​por​ ​alunos​ ​de​ ​Ci&ecirc;ncias​ ​Biol&oacute;gicas,​ ​com​ ​apoio​ ​do Coordenador​ ​Prof.​ ​Dr.​ ​Marcos​ ​Magalh&atilde;es.&nbsp;</span></span></div>\r\n<div style="text-align: justify;">\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n'),
	(12, 'Quem Somos', 'Museu Menu', '<p align="justify" style="text-indent: 1.27cm; margin-bottom: 0cm; line-height: 150%">\r\n	<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">O N&uacute;cleo de Hist&oacute;ria Natural (NHN) foi criado em 2017 pela equipe do Museu de Hist&oacute;ria Natural Prof. La&eacute;rcio Loures (MPL) sob a coordena&ccedil;&atilde;o do Prof. Dr. Marcos Magalh&atilde;es de Souza, com o objetivo de integrar as pesquisas em Hist&oacute;ria Natural no IFSULDEMINAS - Campus Inconfidentes, de modo a subsidiar as atividades do MPL.</span></span></p>\r\n<p align="justify" style="text-indent: 1.27cm; margin-bottom: 0cm; line-height: 150%">\r\n	<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">Dentre os interesses do NHN est&atilde;o as investiga&ccedil;&otilde;es em Biodiversidade, Ecologia, Geoci&ecirc;ncias, Ilustra&ccedil;&atilde;o de Hist&oacute;ria Natural, Etnografia e Hist&oacute;ria das Ci&ecirc;ncias Naturais.</span></span></p>\r\n<p align="justify" style="text-indent: 1.27cm; margin-bottom: 0cm; line-height: 150%">\r\n	<span style="font-size:16px;"><span style="font-family: verdana, geneva, sans-serif;">O NHN existe com o objetivo de a atender &agrave; Institui&ccedil;&atilde;o oferecendo oportunidades de trabalho com pesquisa e extens&atilde;o &agrave; comunidade.</span></span></p>\r\n'),
	(14, 'Fale Conosco', 'Museu Menu', '<p style="font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 0); text-align: center;">\r\n	<span style="font-family:verdana,geneva,sans-serif;"><span style="font-size:16px;"><strong>Localiza&ccedil;&atilde;o:</strong><br />\r\n	IFSULDEMINAS &ndash; Campus Inconfidentes<br />\r\n	CEP: 37576 &ndash; 000<br />\r\n	Inconfidentes &ndash; MG</span></span></p>\r\n<p style="font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 0); text-align: center;">\r\n	<span style="font-family:verdana,geneva,sans-serif;"><span style="font-size:16px;"><strong>Contatos para agendamento de visitas:</strong><br />\r\n	(35) 3463 &ndash; 1208</span></span></p>\r\n<p style="font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 0); text-align: center;">\r\n	<span style="font-family:verdana,geneva,sans-serif;"><span style="font-size:16px;"><strong>Informa&ccedil;&otilde;es:</strong><br />\r\n	<span id="cloak70859"><a href="mailto:ciec.inconfidentes@ifsuldeminas.edu.br" style="text-decoration-line: none; color: rgb(102, 131, 3);"><span style="color:#000000;">ciec.inconfidentes@ifsuldeminas.edu.br</span></a></span><br />\r\n	<span id="cloak40396"><a href="mailto:museu.inconfidentes@ifsuldeminas.edu.br" style="text-decoration-line: none; color: rgb(102, 131, 3);"><span style="color:#000000;">museu.inconfidentes@ifsuldeminas.edu.br</span></a></span></span></span></p>\r\n<p style="font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 0); text-align: center;">\r\n	<span style="font-family:verdana,geneva,sans-serif;"><span style="font-size:16px;"><strong>Expediente:</strong><br />\r\n	De Segunda &ndash; feira &agrave; Sexta &ndash; feira<br />\r\n	Das 07h00 &agrave;s 11h00<br />\r\n	Das 13h00 &agrave;s 17h00</span></span></p>\r\n');
/*!40000 ALTER TABLE `conteudo` ENABLE KEYS */;

-- Copiando estrutura para tabela db_nucleo.fotos
CREATE TABLE IF NOT EXISTS `fotos` (
  `idfotos` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(250) NOT NULL,
  `legenda` varchar(200) NOT NULL,
  `album_idalbum` int(11) NOT NULL,
  PRIMARY KEY (`idfotos`),
  KEY `fk_fotos_album1_idx` (`album_idalbum`),
  CONSTRAINT `fk_fotos_album1` FOREIGN KEY (`album_idalbum`) REFERENCES `album` (`idalbum`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_nucleo.fotos: ~23 rows (aproximadamente)
/*!40000 ALTER TABLE `fotos` DISABLE KEYS */;
INSERT INTO `fotos` (`idfotos`, `foto`, `legenda`, `album_idalbum`) VALUES
	(40, '21774-ninho.jpg', 'Ninho de Marimbondo Pomba de cavalo (Chartergus globiventri)', 6),
	(41, 'f08bd-museu.jpg', 'Museu H.N. Professor Laércio Loures', 6),
	(42, 'd4271-cobras.jpg', 'Jararaca (Bothrops jararaca)', 11),
	(43, '3beb2-jaguatirica.jpg', 'Jaguatirica (Leopardus pardalis)', 11),
	(44, '1bd81-fossil.jpg', 'Mesossauro sp.', 11),
	(45, '05bc1-cranio_onca.jpg', 'Crânio de onça parda (Felis concolor)', 11),
	(46, '3e443-cranio_gato.jpg', 'Crânio de gato (Felis catus)', 11),
	(47, '1c0bd-xylopia.jpg', 'Xylopia sp.', 11),
	(60, 'b3e85-cranio_gato.jpg', 'Crânio de gato', 20),
	(61, '210fb-cobras.jpg', 'Cobra', 20),
	(62, '20dfa-borboleta.jpg', 'Borboleta', 21),
	(63, '3d431-cobras.jpg', 'Cobra', 6),
	(64, '60754-cranio_onca.jpg', 'Crânio de onça', 6),
	(66, 'afedd-fossil.jpg', 'Mesossauro', 6),
	(67, 'daa0d-5.jpg', 'Vespa Social', 21),
	(68, '1932a-jaguatirica.jpg', 'Jaguatirica', 7),
	(69, '6162d-cobras.jpg', 'Cobra', 7),
	(70, 'd71cf-xylopia.jpg', 'Xylopia', 7),
	(71, 'c7a81-ooo.png', 'nhn', 5),
	(72, '4ac49-visitas1.jpg', 'Apresentação do Acervo aos alunos de escolas públicas da região.', 4),
	(73, '6780c-visitas2.jpg', 'Apresentação do Acervo aos alunos de escolas públicas da região.', 4),
	(74, '9af9a-visitas3.jpg', 'Apresentação de fotos tiradas em campo pelo Grupo de Pesquisa em Zoologia (GPZoo): conversa sobre diversidade biológica e adaptações.', 4),
	(75, 'bb188-visitas5.jpg', 'Explicação sobre o tempo Geológico e Paleontologia através da linha do tempo e fósseis.', 4),
	(76, 'c524b-visitas6.jpg', 'Explicação sobre o tempo Geológico e Paleontologia através da linha do tempo e fósseis.', 4),
	(77, '2b515-visitas4.jpg', 'Apresentação de fotos tiradas em campo pelo Grupo de Pesquisa em Zoologia (GPZoo): conversa sobre diversidade biológica e adaptações.', 4),
	(78, '4167c-escolas1.jpg', 'Intervenção sobre animais peçonhentos na ASMEC - Ouro Fino, junto com estudantes de Enfermagem (out/2017), utilizando parte do acervo.', 8);
/*!40000 ALTER TABLE `fotos` ENABLE KEYS */;

-- Copiando estrutura para tabela db_nucleo.multimidia
CREATE TABLE IF NOT EXISTS `multimidia` (
  `idMultimidia` int(11) NOT NULL AUTO_INCREMENT,
  `som` varchar(200) DEFAULT NULL,
  `video` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idMultimidia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_nucleo.multimidia: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `multimidia` DISABLE KEYS */;
/*!40000 ALTER TABLE `multimidia` ENABLE KEYS */;

-- Copiando estrutura para tabela db_nucleo.programacao
CREATE TABLE IF NOT EXISTS `programacao` (
  `idprogramacao` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `horario` varchar(45) NOT NULL,
  `evento` varchar(200) NOT NULL,
  PRIMARY KEY (`idprogramacao`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_nucleo.programacao: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `programacao` DISABLE KEYS */;
INSERT INTO `programacao` (`idprogramacao`, `data`, `horario`, `evento`) VALUES
	(1, '2017-11-01', '12h', 'Visita'),
	(2, '2017-11-01', '13h', 'Evento');
/*!40000 ALTER TABLE `programacao` ENABLE KEYS */;

-- Copiando estrutura para tabela db_nucleo.publicacoes
CREATE TABLE IF NOT EXISTS `publicacoes` (
  `idpublicacoes` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) NOT NULL,
  `tipo` enum('Periódicos','Artigos','TCC/Dissertações/Teses','Anais de Congresso','Resumos') NOT NULL,
  `resumo` text NOT NULL,
  `autor` varchar(45) NOT NULL,
  `arquivo` varchar(250) NOT NULL,
  `areas_idareas` int(11) NOT NULL,
  PRIMARY KEY (`idpublicacoes`),
  KEY `fk_publicacoes_areas1_idx` (`areas_idareas`),
  CONSTRAINT `fk_publicacoes_areas1` FOREIGN KEY (`areas_idareas`) REFERENCES `areas` (`idareas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COMMENT='titulo,tipo,autor,areas_idareas';

-- Copiando dados para a tabela db_nucleo.publicacoes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `publicacoes` DISABLE KEYS */;
INSERT INTO `publicacoes` (`idpublicacoes`, `titulo`, `tipo`, `resumo`, `autor`, `arquivo`, `areas_idareas`) VALUES
	(38, 'Nesting of social wasps (Hymenoptera: Vespida)', 'Periódicos', '<p style="text-align: justify;">\r\n	<span style="font-size:16px;"><span style="font-family:verdana,geneva,sans-serif;"><span style="text-align: justify;">&nbsp; &nbsp; &nbsp; A sobreviv&ecirc;ncia das esp&eacute;cies de vespas sociais depende do sucesso na funda&ccedil;&atilde;o de novos ninhos. Essas esp&eacute;cies podem utilizar para nidifica&ccedil;&atilde;o de diferentes esp&eacute;cies vegetais com caracter&iacute;sticas espec&iacute;ficas, com a arquitetura dos ninhos que variam em rela&ccedil;&atilde;o aos h&aacute;bitos dessas esp&eacute;cies vegetais. A nidifica&ccedil;&atilde;o de vespas sociais em ambiente natural foi estudada no per&iacute;odo de outubro de 2005 a setembro de 2007 em uma floresta rip&aacute;ria do rio das Mortes, munic&iacute;pio de Barroso, Estado de Minas Gerais, Brasil, com o objetivo de avaliar os diferentes tipos de substratos vegetais utilizados por vespas sociais para nidifica&ccedil;&atilde;o, e investigar se h&aacute; rela&ccedil;&atilde;o entre o tipo de constru&ccedil;&atilde;o dos ninhos com os h&aacute;bitos das esp&eacute;cies vegetais. Foram registradas 171 col&ocirc;nias de vespas sociais pertencentes a 29 esp&eacute;cies, que utilizaram como substrato de nidifica&ccedil;&atilde;o 78 esp&eacute;cies vegetais (76 Angiospermas e 2 Pterid&oacute;fitas) de h&aacute;bitos arbustivo, herb&aacute;cea, arb&oacute;reo, ep&iacute;fita e liana. Esp&eacute;cies com ninhos fragmoc&iacute;taros e gimin&oacute;domos nidificaram, com maior incid&ecirc;ncia, em plantas arb&oacute;reas e a deciduidade das mesmas n&atilde;o afetou a nidifica&ccedil;&atilde;o. Sugere-se a preserva&ccedil;&atilde;o das &aacute;reas naturais de modo a garantir maior disponibilidade de locais de nidifica&ccedil;&atilde;o para as esp&eacute;cies de vespas sociais, assegurando maior efici&ecirc;ncia nos servi&ccedil;os ambientais e no controle biol&oacute;gico de pragas na agricultura.</span></span></span></p>\r\n', 'Marcos Magalhães de Souza', '1450a-bd635-floresta_riparia.pdf', 1),
	(39, 'SEASONAL RICHNESS AND COMPOSITION OF SOCIAL W', 'Resumos', '<p>\r\n	<span style="font-family:verdana,geneva,sans-serif;"><span style="font-size: 16px;">&nbsp;&nbsp;&nbsp;&nbsp; ABSTRACT: The study evaluated the seasonal richness and composition of social wasps in Cerrado transition areas and Atlantic Forest in the municipal district of Barroso (Cerrado Grassland, Semidecidual Forest and Anthropic Areas). Thirty-eight species of social wasps were recorded, distributed in 10 genera and 127 colonies. The phytophysiognomy of Cerrado Grassland had the highest number of species (35) and colonies (76), followed by Semidecidual Forest (26 species and 37 colonies) and Anthropic Areas (nine species and 14 colonies). Agelaia vicina (Saussure, 1854) showed the highest constancy, present in 57.7% of collections. The number of social wasp species and colonies was positively correlated with temperature and precipitation. The hot and humid season is the most favorable period for social wasp population growth.</span></span></p>\r\n', 'Marcos Magalhães de Souza', 'dd629-04333-sazonalidade_de_vespas.pdf', 2);
/*!40000 ALTER TABLE `publicacoes` ENABLE KEYS */;

-- Copiando estrutura para tabela db_nucleo.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_nucleo.usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`idusuario`, `login`, `senha`) VALUES
	(1, 'administrador', 'museu123');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
