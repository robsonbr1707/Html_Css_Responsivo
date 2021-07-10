-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 10-Jul-2021 às 20:50
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste_empresa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `registros`
--

DROP TABLE IF EXISTS `registros`;
CREATE TABLE IF NOT EXISTS `registros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `descricao` text CHARACTER SET utf8 NOT NULL,
  `imagem` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `registros`
--

INSERT INTO `registros` (`id`, `titulo`, `descricao`, `imagem`) VALUES
(1, 'Oque é Html 5', 'HTML abreviação para a expressão inglesa HyperText Markup Language, que significa:\"Linguagem de Marcação de Hipertexto\" é uma linguagem de marcação utilizada na construção de páginas na Web. Documentos HTML podem ser interpretados por navegadores. A tecnologia é fruto da junção entre os padrões HyTime e SGML.', 0x696d6167656e732f68746d6c2e706e67),
(2, 'Oque é Css', 'Cascading Style Sheets é um mecanismo para adicionar estilo a um documento web. O código CSS pode ser aplicado diretamente nas tags ou ficar contido dentro das tags <style>. Também é possível, em vez de colocar a formatação dentro do documento, criar um link para um arquivo CSS que contém os estilos', 0x696d6167656e732f6373732e706e67),
(3, 'Oque é Php', 'PHP é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor, capazes de gerar conteúdo dinâmico na World Wide Web.', 0x696d6167656e732f7068702e6a7067),
(4, 'Oque é Laravel', 'Laravel é um framework PHP livre e open-source criado por Taylor B. Otwell para o desenvolvimento de sistemas web que utilizam o padrão MVC.', 0x696d6167656e732f6c61726176656c2e706e67),
(5, 'Oque é Bootstrap', 'Bootstrap é um framework web com código-fonte aberto para desenvolvimento de componentes de interface e front-end para sites e aplicações web usando HTML, CSS e JavaScript, baseado em modelos de design para a tipografia, melhorando a experiência do usuário em um site amigável e responsivo.', 0x696d6167656e732f626f6f7473747261702e706e67),
(6, 'Curso De Html', 'Curso De Html 5 Gratuito. Sobre O Curso: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur temporibus aliquid voluptas minus quisquam', 0x696d6167656e732f6465765f312e6a706567),
(7, 'Curso De Css', 'Curso De Css Gratuito. Sobre O Curso: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur temporibus aliquid voluptas minus quisquam', 0x696d6167656e732f6465765f322e6a7067),
(8, 'Curso De Php e Mysql', 'Curso De Php e Mysql Gratuito. Sobre O Curso: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur temporibus aliquid voluptas minus quisquam', 0x696d6167656e732f6465765f332e6a7067),
(9, 'Curso De JavaScript', 'Curso De JavaScript Gratuito. Sobre O Curso: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur temporibus aliquid voluptas minus quisquam', 0x696d6167656e732f6465765f342e6a7067),
(10, 'Curso Completo Desenvolvimento Web', 'Curso Completo De Desenvolvimento Web. Sobre O Curso: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur temporibus aliquid voluptas minus quisquam', 0x696d6167656e732f6465765f352e6a706567),
(11, 'Vikings 1° Temporada', 'A série acompanha a saga dos navegadores nórdicos que exploram - e conquistam - novos territórios nos tempos medievais.', 0x696d6167656e732f76696b696e67732e6a706567),
(12, 'O Gambito Da Rainha', 'Uma órfã prodígio do xadrez luta contra vícios enquanto enfrenta os maiores enxadristas do mundo.', 0x696d6167656e732f67616d6269746f5f64615f7261696e68612e6a7067),
(13, 'Supernatural Completo', 'Os irmãos Sam e Dean Winchester encaram cenários sinistros caçando monstros. Velhos truques, armas e esconderijos não funcionam mais e seus amigos os traem, forçando os irmãos a contar um com o outro enquanto enfrentam novos inimigos. Sendo A Melhor Série De TODAS', 0x696d6167656e732f73757065726e61747572616c5f6d656c686f725f73657269652e6a7067),
(14, 'Stranger Things 1° Temporada', 'Will, um garoto de 12 anos, desaparece em Montauk, Long Island. Enquanto a polícia, família e amigos procuram respostas, eles mergulham em um extraordinário mistério, envolvendo um experimento secreto do governo, forças sobrenaturais e uma garotinha.', 0x696d6167656e732f737472616e6765725f7468696e67732e706e67),
(15, 'The Witcher 1° Temporada', 'O mutante Geralt de Rívia é um caçador de monstros que luta para encontrar seu lugar em um mundo onde as pessoas, muitas vezes, são mais perversas do que as criaturas selvagens.', 0x696d6167656e732f7468655f776974636865722e6a7067),
(16, 'Os Vingadores A Guerra Infinita', 'Homem de Ferro, Thor, Hulk e os Vingadores se unem para combater seu inimigo mais poderoso, o maligno Thanos. Em uma missão para coletar todas as seis pedras infinitas, Thanos planeja usá-las para infligir sua vontade maléfica sobre a realidade.', 0x696d6167656e732f6f735f76696e6761646f7265732e6a7067),
(17, 'Senhor Dos Aneis A Sociedade Do Anel', 'Senhor Dos Aneis A Sociedade Do Anel é um filme de fantasia dirigido por Peter Jackson e baseado no primeiro volume da série O Senhor dos Anéis, de J. R. R. Tolkien. O filme narra a procura do Senhor do Escuro Sauron pelo Um Anel. O anel que atualmente está em posse do hobbit Frodo Bolseiro.', 0x696d6167656e732f73656e686f725f646f735f616e6569732e6a7067),
(18, 'Hobbit Uma Jornada Inesperada', 'Como a maioria dos hobbits, Bilbo Bolseiro leva uma vida tranquila até o dia em que recebe uma missão do mago Gandalf. Acompanhado por um grupo de anões, ele parte numa jornada até a Montanha Solitária para libertar o Reino de Erebor do dragão Smaug', 0x696d6167656e732f686f626269742e6a7067),
(19, 'Velozes e Furiosos 8', 'The Fate of the Furious, também conhecido como Fast & Furious 8, Fast 8 e Furious 8, e estilizado F8, é um filme de ação estadunidense de 2017, dirigido por F. Gary Gray e escrito por Chris Morgan.', 0x696d6167656e732f76656c6f7a65735f655f667572696f736f732e6a7067),
(20, 'Venom', 'O jornalista Eddie Brock desenvolve força e poder sobre-humanos quando seu corpo se funde com o alienígena Venom. Dominado pela raiva, Venom tenta controlar as novas e perigosas habilidades de Eddie.', 0x696d6167656e732f76656e6f6d2e6a7067);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
