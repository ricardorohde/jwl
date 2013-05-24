-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 03/05/2012 às 21h13min
-- Versão do Servidor: 5.5.16
-- Versão do PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `metroneng`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `idbanner` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `arte` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `ativo` char(1) NOT NULL,
  PRIMARY KEY (`idbanner`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`idbanner`, `titulo`, `arte`, `link`, `ativo`) VALUES
(2, 'Teste de banner 002', '/jwl/assets/userfiles/images/Koala.jpg', 'http://www.facebook.com', 's'),
(3, 'banner para não exibir no site', '/jwl/assets/userfiles/images/Desert.jpg', 'http://www.globo.com', 'n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estatico`
--

CREATE TABLE IF NOT EXISTS `estatico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idsecao` int(11) DEFAULT NULL,
  `pertencea` int(11) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `metatags` text,
  `keywords` text,
  `conteudo` text,
  `ativo` char(1) DEFAULT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE IF NOT EXISTS `imoveis` (
  `idimoveis` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` int(11) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `fotocapa` varchar(255) DEFAULT NULL,
  `descricao` text,
  `localizacao` text,
  `googlemaps` text,
  `valores` varchar(255) DEFAULT NULL,
  `acesse` text,
  `datacad` datetime DEFAULT NULL,
  PRIMARY KEY (`idimoveis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`idimoveis`, `tipo`, `nome`, `fotocapa`, `descricao`, `localizacao`, `googlemaps`, `valores`, `acesse`, `datacad`) VALUES
(2, 3, 'Ed. Canto do Cantagalo', '/jwl/assets/userfiles/images/Koala.jpg', '<p>\r\n	Im&oacute;vel lind&iacute;ssimo,</p>\r\n', 'Rua do miguel, 999', '<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;q=casa+da+m%C3%A3e+joana&amp;aq=&amp;sll=-22.911653,-43.18238&amp;sspn=0.003301,0.005681&amp;t=h&amp;ie=UTF8&amp;st=109146043351405611748&amp;rq=1&amp;ev=zi&amp;split=1&amp;radius=0.22&amp;hq=casa+da+m%C3%A3e+joana&amp;hnear=&amp;ll=-22.911504,-43.182691&amp;spn=0.003301,0.005681&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;q=casa+da+m%C3%A3e+joana&amp;aq=&amp;sll=-22.911653,-43.18238&amp;sspn=0.003301,0.005681&amp;t=h&amp;ie=UTF8&amp;st=109146043351405611748&amp;rq=1&amp;ev=zi&amp;split=1&amp;radius=0.22&amp;hq=casa+da+m%C3%A3e+joana&amp;hnear=&amp;ll=-22.911504,-43.182691&amp;spn=0.003301,0.005681" style="color:#0000FF;text-align:left">Exibir mapa ampliado</a></small>', '2500', 'http://www.globo.com        ', '2012-04-17 17:04:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis_acompanhamento`
--

CREATE TABLE IF NOT EXISTS `imoveis_acompanhamento` (
  `idacompanhamento` int(11) NOT NULL AUTO_INCREMENT,
  `idimovel` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`idacompanhamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis_acompanhamento_stats`
--

CREATE TABLE IF NOT EXISTS `imoveis_acompanhamento_stats` (
  `idstats` int(11) NOT NULL AUTO_INCREMENT,
  `idacompanhamento` int(11) DEFAULT NULL,
  `nivel` varchar(200) DEFAULT NULL,
  `concluido` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idstats`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis_perspectiva`
--

CREATE TABLE IF NOT EXISTS `imoveis_perspectiva` (
  `idperspectiva` int(11) NOT NULL AUTO_INCREMENT,
  `perspectiva` varchar(255) DEFAULT NULL,
  `idimovel` int(11) DEFAULT NULL,
  PRIMARY KEY (`idperspectiva`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `imoveis_perspectiva`
--

INSERT INTO `imoveis_perspectiva` (`idperspectiva`, `perspectiva`, `idimovel`) VALUES
(2, '/jwl/assets/userfiles/images/Desert.jpg', 2),
(3, '/jwl/assets/userfiles/images/Koala.jpg', 2),
(4, '/jwl/assets/userfiles/images/perfil%20twitter-01.jpg', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis_plantas`
--

CREATE TABLE IF NOT EXISTS `imoveis_plantas` (
  `idplanta` int(11) NOT NULL AUTO_INCREMENT,
  `planta` varchar(255) DEFAULT NULL,
  `legenda` varchar(255) DEFAULT NULL,
  `idimovel` int(11) DEFAULT NULL,
  PRIMARY KEY (`idplanta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `imoveis_plantas`
--

INSERT INTO `imoveis_plantas` (`idplanta`, `planta`, `legenda`, `idimovel`) VALUES
(1, '/jwl/assets/userfiles/images/Desert.jpg', 'Morro seco', 2),
(2, '/jwl/assets/userfiles/images/Penguins.jpg', 'Pinguins Falantes', 2),
(3, '/jwl/assets/userfiles/images/Chrysanthemum.jpg', 'Troço inexplicável', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis_servicos`
--

CREATE TABLE IF NOT EXISTS `imoveis_servicos` (
  `idservico` int(11) NOT NULL AUTO_INCREMENT,
  `servico` text,
  `imagem` varchar(255) DEFAULT NULL,
  `idimovel` int(11) DEFAULT NULL,
  PRIMARY KEY (`idservico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `imoveis_servicos`
--

INSERT INTO `imoveis_servicos` (`idservico`, `servico`, `imagem`, `idimovel`) VALUES
(2, 'Massagem Relaxante Pinguins', '/jwl/assets/userfiles/images/Penguins.jpg', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis_tipo`
--

CREATE TABLE IF NOT EXISTS `imoveis_tipo` (
  `idtipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idtipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `imoveis_tipo`
--

INSERT INTO `imoveis_tipo` (`idtipo`, `tipo`) VALUES
(1, 'Lançamentos'),
(2, 'Em Construção'),
(3, 'Pronto para morar'),
(4, 'Breve Lançamento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis_videos`
--

CREATE TABLE IF NOT EXISTS `imoveis_videos` (
  `idvideos` int(11) NOT NULL AUTO_INCREMENT,
  `idimovel` int(11) DEFAULT NULL,
  `linkvideo` text,
  PRIMARY KEY (`idvideos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `idlogins` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idlogins`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `idnoticias` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `data` date DEFAULT NULL,
  `fonte` varchar(255) DEFAULT NULL,
  `ativo` char(1) DEFAULT NULL,
  PRIMARY KEY (`idnoticias`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`idnoticias`, `titulo`, `texto`, `data`, `fonte`, `ativo`) VALUES
(1, 'A mamona mamou o mamilo do mamão', '<p>\r\n	<img alt="" src="/jwl/assets/userfiles/images/Desert.jpg" style="width: 350px; height: 263px;" />Testando :D</p>\r\n', '2012-04-05', 'Gabriel', 's'),
(2, 'Second', '<p>\r\n	Testsando o teste do teste, inclusive com teste de marca&ccedil;&atilde;o de texto para o site da Metron.</p>\r\n', '2012-04-05', 'metron', 'n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissoes`
--

CREATE TABLE IF NOT EXISTS `permissoes` (
  `idpermissoes` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idsecao` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpermissoes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `site`
--

CREATE TABLE IF NOT EXISTS `site` (
  `idsite` int(11) NOT NULL AUTO_INCREMENT,
  `secao` varchar(100) DEFAULT NULL,
  `pertencea` int(11) DEFAULT NULL COMMENT 'pertencea => 0 nenhum\noutro é o id de referencia da seção.',
  PRIMARY KEY (`idsite`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `site`
--

INSERT INTO `site` (`idsite`, `secao`, `pertencea`) VALUES
(1, 'Quem Somos', 0),
(2, 'Prêmios e Certificados', 0),
(3, 'Sustentabilidade e Responsabilidade Social', 0),
(4, 'Obras Realizadas', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idusers` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL,
  `login` varchar(16) DEFAULT NULL,
  `senha` varchar(16) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ativo` char(1) DEFAULT NULL,
  PRIMARY KEY (`idusers`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`idusers`, `username`, `login`, `senha`, `email`, `ativo`) VALUES
(1, 'Gabriel Pinheiro', 'gabriel', 'wcom', 'gabriel@wcomunica.com.br', 's'),
(2, 'Lucas', 'lucas', 'lucas', 'lucas@wcomunica.com.br', 's');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
