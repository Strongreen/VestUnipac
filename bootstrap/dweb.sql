/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : 127.0.0.1:3306
Source Database       : dweb

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-12-07 16:07:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for contato
-- ----------------------------
DROP TABLE IF EXISTS `contato`;
CREATE TABLE `contato` (
`id`  int(11) NOT NULL AUTO_INCREMENT ,
`name`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`email`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`celular`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`mensagem`  varchar(4096) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=5

;

-- ----------------------------
-- Records of contato
-- ----------------------------
BEGIN;
INSERT INTO `contato` VALUES ('3', 'Adalton Dantas', 'donatelloferraz@hotmail.com', '31 9 99260301', 'Gostaria de receber uma confirmaÃ§Ã£o por e-mail da minha inscriÃ§Ã£o. \r\nFica minha dica de aprimoramento para o site.'), ('4', 'Simone Alencar', 'simonealencar@hotmail.com', '31 9 71596823', 'OlÃ¡, tudo bem? \r\n\r\nEu gostaria que o site mais informaÃ§Ãµes sobre a faculdade. Para quem nunca visitou acredito ser de grande importÃ¢ncia. \r\n\r\nGrata. ');
COMMIT;

-- ----------------------------
-- Table structure for cursos
-- ----------------------------
DROP TABLE IF EXISTS `cursos`;
CREATE TABLE `cursos` (
`id`  int(2) NOT NULL AUTO_INCREMENT ,
`nome`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`resumo`  varchar(2048) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`autorizacao`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`duracao`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`periodos`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`objetivo`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`coordenacao`  varchar(1024) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`mensalidade`  float(8,0) NOT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=12

;

-- ----------------------------
-- Records of cursos
-- ----------------------------
BEGIN;
INSERT INTO `cursos` VALUES ('1', 'AdministraÃ§Ã£o', 'O Bacharel em AdministraÃ§Ã£o da UNIPAC Lafaiete Ã© um profissional preparado para atuar em organizaÃ§Ãµes, pÃºblicas e privadas, de grande, mÃ©dio e pequeno porte e organizaÃ§Ãµes nÃ£o governamentais (ONGs). O curso possui uma equipe de profissionais altamente qualificados que priorizam a formaÃ§Ã£o de alunos com habilidades para atuar no ramo da consultoria, favorece o domÃ­nio de competÃªncias para a tomada de decisÃµes estratÃ©gicas e gerenciais, que visam a melhoria da produtividade empresarial. O perfil empreendedor Ã© destaque no mundo atual e o administrador da UNIPAC Lafaiete no decorrer de sua formaÃ§Ã£o, adquire uma vasta experiÃªncia para atuar de acordo com as expectativas do mercado.', 'Reconhecido pela Portaria do MinistÃ©rio da EducaÃ§Ã£o nÂº 522, de 15 de outubro de 2013, publicada no D.O.U. em 17 de outubro de 2013.', 'Carga HorÃ¡ria Total do Curso: 3.000 horas', 'PerÃ­odo de IntegralizaÃ§Ã£o: MÃ­nimo 4 anos (8 perÃ­odos) / MÃ¡ximo 6 anos (12 perÃ­odos)', 'Objetivo geral\r\n\r\nFormar profissionais que detenham conhecimentos, competÃªncias e habilidades essenciais na Ã¡rea de AdministraÃ§Ã£o e que sejam capazes de conduzir, gerir e gerenciar as organizaÃ§Ãµes empresariais e atender Ã s necessidades regionais e ', 'Prof. DÃ­lson Campos de Oliveira\r\n\r\nMestre em AdministraÃ§Ã£o pela Pontifica Universidade CatÃ³lica de Minas Gerais.\r\nEspecializaÃ§Ã£o em EducaÃ§Ã£o TecnolÃ³gica pelo Centro Federal de EducaÃ§Ã£o TecnolÃ³gica de Minas Gerais â€“ CEFET/MG.\r\nEspecialista em AdministraÃ§Ã£o Financeira â€“ Centro de Pesquisas Educacionais e Desenvolvimento de Recursos humanos / UNA\r\nGraduado em AdministraÃ§Ã£o de Empresas â€“ Faculdade FUMEC\r\nAperfeiÃ§oamento em Controladoria Financeira â€“ CEPEAD/UFMG.', '605'), ('2', 'EducaÃ§Ã£o FÃ­sica', 'O curso de EducaÃ§Ã£o FÃ­sica da UNIPAC de Conselheiro Lafaiete oferece o Bacharelado. A profissÃ£o de educador FÃ­sico nos Ãºltimos anos vem ampliando suas possibilidades de diversificaÃ§Ã£o e inserÃ§Ã£o no mercado de trabalho. Seguindo uma tendÃªncia mundial de procura de uma vida saudÃ¡vel, prÃ¡ticas esportivas e prevenÃ§Ã£o/tratamento de doenÃ§as atravÃ©s de exercÃ­cios fÃ­sicos, o mercado profissional tÃªm se mostrado altamente atrativo.', 'Reconhecido pela Portaria do MinistÃ©rio da EducaÃ§Ã£o nÂº 1, de 6 de janeiro de 2012, publicada no D.O.U. em 9 de janeiro de 2012.', 'Carga HorÃ¡ria do Curso: 3200h', ' Bacharelado: 8 semestres', 'Formar profissionais Ã©ticos, crÃ­ticos, conscientes e protagonistas de modo a atuar em seu entorno oferecendo a comunidade condiÃ§Ãµes para que esta possa ter como norte a Ã©tica, o humanismo e o compromisso com o trabalho para o crescimento da sociedade', 'Professor Carlos Alberto dos Santos,\r\n\r\nMestrado em EducaÃ§Ã£o.\r\nUniversidade Vale do Rio Verde , UNINCOR, TrÃªs CoraÃ§Ãµes, Brasil\r\nTÃ­tulo: GestÃ£o nas Escolas Estaduais e Municipais de Conselheiro Lafaiete:Um Estudo de Caso, Ano de obtenÃ§Ã£o: 2005\r\nEspecializaÃ§Ã£o em AdministraÃ§Ã£o Engenharia e Marketing Desportivo.\r\nUniversidade Gama Filho, UGF, Rio De Janeiro, Brasil\r\nTÃ­tulo: EficiÃªncia e EficÃ¡cia dos Gestor Esportivo\r\nGraduaÃ§Ã£o em EducaÃ§Ã£o FÃ­sica.\r\nUniversidade Federal de Minas Gerais, UFMG, Belo Horizonte, Brasil', '638'), ('3', 'Engenharia da ComputaÃ§Ã£o', 'O Curso de Engenharia de ComputaÃ§Ã£o da Faculdade Presidente AntÃ´nio Carlos prepara seus egressos para o mercado de trabalho assim como fundamenta sua formaÃ§Ã£o para o prosseguimento dos estudos em nÃ­vel de mestrado e doutorado, focando os sistemas de telecomunicaÃ§Ãµes, eletrÃ´nica e software, visando a formaÃ§Ã£o de um profissional capacitado a atender as demandas de desenvolvimento de sistemas computacionais, segundo uma abordagem de projeto conjunto de hardware e software.', 'Reconhecido pelo Artigo 63 da Portaria Normativa nÂº 40, de 12 de dezembro de 2007, consolidada pela Portaria Normativa nÂº 23, de 1Âº de dezembro de 2010, do MinistÃ©rio da EducaÃ§Ã£o e protocolado no e-MEC sob o nÂº 201012836.  DuraÃ§Ã£o:', 'Carga HorÃ¡ria : 3600 Horas', '10 PerÃ­odos, 5 anos.', 'O curso de Engenharia da ComputaÃ§Ã£o da Faculdade Presidente AntÃ´nio Carlos tem como objetivos principais:\r\n- Suprir a demanda de profissionais voltados para o projeto de sistemas eletrÃ´nicos microprocessados, de controle para automaÃ§Ã£o industrial e ', 'Prof. Eduardo Luiz Miranda Lobo, \r\n\r\nMestre em Modelagem MatemÃ¡tica e Computacional pelo Centro Federal de EducaÃ§Ã£o TecnolÃ³gica de Minas Gerais - CEFETMG 01./05/2003 a 30./10/2005. DissertaÃ§Ã£o: Uma SoluÃ§Ã£o do Problema de HorÃ¡rio Escolar Via Algoritmo GenÃ©tico Paralelo\r\nPÃ³s GraduaÃ§Ã£o Lato Sensu em Banco de Dados. Centro UniversitÃ¡rio de Belo Horizonte, 01/02/1998 a 20/12/1998. \r\nLicenciatura Plena em InformÃ¡tica pela UTRAMIG â€“ Belo Horizonte, 02/1997 a 12/1997.\r\nGraduaÃ§Ã£o em CiÃªncia da ComputaÃ§Ã£o. Universidade â€“ PontifÃ­cia Universidade CatÃ³lica de Minas Gerais. 01/08/1991 a 30./06/1995. \r\nGraduaÃ§Ã£o Incompleta em Engenharia de Minas. Universidade Federal de Ouro Preto â€“ UFOP. 08/1988 a 10/1990', '759'), ('4', 'Engenharia de Controle e AutomaÃ§Ã£o', 'â€œA Engenharia de Controle e AutomaÃ§Ã£o Ã© um ramo da engenharia voltado Ã  automaÃ§Ã£o e controle de processos. Ã‰ amplamente empregada em indÃºstrias de qualquer natureza, outros ramos de atividade e atÃ© em residÃªncias. \r\nUtiliza de elementos tecnolÃ³gicos como computadores, sensores, atuadores, robÃ´s, mÃ¡quinas elÃ©tricas, softwares, etc., como recursos para o desenvolvimento de processos automatizados e para a supervisÃ£o destes. \r\nÃ‰ uma ciÃªncia multidisciplinar, que engloba conhecimento de engenharia elÃ©trica, eletrÃ´nica, de computaÃ§Ã£o e mecÃ¢nica. \r\nPor ser necessÃ¡ria em qualquer situaÃ§Ã£o onde exista um processo que possa ser automatizado, a Engenharia de Controle e AutomaÃ§Ã£o Ã© considerada uma das profissÃµes do futuro.â€\r\n\r\nA profissÃ£o do Engenheiro de Controle e AutomaÃ§Ã£o Ã© regulamentada pelo sistema CONFEA/CREA, atravÃ©s das resoluÃ§Ãµes, 218 de 1973 , 335 de 1984 e 427 de 1999. \r\nâ€œCompete ao Engenheiro de Controle e AutomaÃ§Ã£o, o desempenho das atividades 1 a 18 do art. 1Âº da ResoluÃ§Ã£o nÂº 218 de 29 de junho de 1973 do CONFEA, no que se refere ao controle e automaÃ§Ã£o de equipamentos, processos, unidades e sistemas de produÃ§Ã£o, seus serviÃ§os afins e correlatos.â€\r\nParÃ¡grafo Ãšnico â€“ â€œ... os Engenheiros de Controle e AutomaÃ§Ã£o integrarÃ£o o grupo ou categoria da engenharia, modalidade eletricista, prevista no item II, letra â€œAâ€, do Art. 8Âº, da ResoluÃ§Ã£o 335, de 27 de outubro de 1984, do CONFEA.â€', 'Reconhecido pela Portaria do MinistÃ©rio da EducaÃ§Ã£o nÂº 125, de 15 de marÃ§o de 2013, publicada no D.O.U. em 19 de marÃ§o de 2013.', 'Carga HorÃ¡ria total de 3.600 horas.', 'DuraÃ§Ã£o: 5 anos (10 perÃ­odos)', 'Objetivo Geral\r\n\r\nFormar um Engenheiro na Ã¡rea de Controle e AutomaÃ§Ã£o, apto a se inserir no mercado e na indÃºstria para desenvolver soluÃ§Ãµes para questÃµes da Ã¡rea, voltadas para aspectos tecnolÃ³gicos, econÃ´micos, sociais e ambientais. O profiss', 'Professor Emerson Rodrigo Alves Tavares\r\n\r\nMestre em ComputaÃ§Ã£o pela Universidade Federal de Minas Gerais â€“ UFMG. Belo Horizonte â€“ MG. 2003.\r\nEspecialista em Engenharia de SeguranÃ§a do Trabalho â€“ Faculdade PitÃ¡goras. Belo Horizonte â€“ MG. 2013.\r\nGraduado em CiÃªncia da ComputaÃ§Ã£o. Universidade Federal de Ouro Preto â€“ UFOP. Ouro Preto â€“ MG, Brasil. 2000.\r\nGraduado em Engenharia da ComputaÃ§Ã£o. Universidade Presidente AntÃ´nio Carlos â€“ UNIPAC. Conselheiro Lafaiete â€“ MG. 2010.\r\nEletroeletrÃ´nica, com Ãªnfase em automaÃ§Ã£o industrial. Centro de FormaÃ§Ã£o Profissional Nansen AraÃºjo. Ouro Branco â€“ MG. 1995.', '759'), ('5', 'Engenharia de ProduÃ§Ã£o', 'A Engenharia de ProduÃ§Ã£o trata do estudo, desenvolvimento, projeto e administraÃ§Ã£o de sistemas integrados de pessoas, informaÃ§Ãµes, materiais, equipamentos e ambiente, que tÃªm como finalidades produzir e distribuir um serviÃ§o ou um produto de modos econÃ´micos, consistentes com os valores sociais vigentes e a preservaÃ§Ã£o do meio ambiente. O Engenheiro de ProduÃ§Ã£o da UNIPAC Lafaiete possui sÃ³lida formaÃ§Ã£o cientÃ­fica e profissional, que adquiri no decorrer do curso. Possui habilidades e competÃªncias na formulaÃ§Ã£o e resoluÃ§Ã£o de problemas ligados Ã s atividades de projeto, operaÃ§Ã£o e gerenciamento do trabalho e sistemas de produÃ§Ã£o de bens e/ou serviÃ§os, considerando seus aspectos humanos, econÃ´micos, sociais e ambientais, com visÃ£o Ã©tica e humana, em atendimento Ã s demandas da sociedade.', 'Reconhecido pela Portaria do MinistÃ©rio da EducaÃ§Ã£o nÂº 125, de 15 de marÃ§o de 2013, publicada no D.O.U. em 19 de marÃ§o de 2013.', 'Carga HorÃ¡ria do Curso: 3600', 'PerÃ­odo: 10 Semestres ou 5 anos', 'O curso apresenta como objetivo geral formar um profissional apto a se inserir no mercado e na indÃºstria para desenvolver soluÃ§Ãµes para questÃµes da Ã¡rea, voltadas para aspectos tecnolÃ³gicos, econÃ´micos, sociais e ambientais. O profissional deverÃ¡ ', 'Prof. CÃ¡ssio Roberto de AraÃºjo,\r\n\r\nMestre em Engenharia de Materiais Universidade de Federal de Ouro Preto - MG DissertaÃ§Ã£o, â€œProposiÃ§Ã£o de uma metodologia para desenvolvimento de um sistema para monitoramento do desgaste de bombas na indÃºstria minero â€“ metalÃºrgicaâ€\r\n\r\nGraduaÃ§Ã£o em Engenharia de ProduÃ§Ã£o Universidade Federal de Ouro Preto - MG', '759'), ('6', 'Engenharia de Minas', 'A Engenharia de Minas da UNIPAC Lafaiete Ã© um ramo da engenharia que cuida da extraÃ§Ã£o dos minÃ©rios da natureza e da separaÃ§Ã£o de matÃ©rias-primas minerais Ãºteis, tem como base as ciÃªncias exatas. Baseia-se no estudo das fontes minerais que sÃ£o necessÃ¡rias ao bem viver do homem de forma geral. Na evoluÃ§Ã£o do curso, o aluno entra em contato com processos que lhe transmite informaÃ§Ãµes sobre extraÃ§Ã£o, lavra, identificaÃ§Ã£o mineralÃ³gica, caracterizaÃ§Ã£o de composiÃ§Ã£o mineral, processamento e por fim o uso dos mesmos na metalurgia. O comprometimento com a Ã©tica e a formaÃ§Ã£o humanÃ­stica, aliada Ã s novas tendÃªncias do Engenheiro de Minas da UNIPAC Lafaiete compÃµem o perfil do profissional qualificado Ã  nossa realidade industrial, preparando seus alunos para o desempenho de diversas funÃ§Ãµes no ramo da mineraÃ§Ã£o.', 'Reconhecido pela Portaria do MinistÃ©rio da EducaÃ§Ã£o nÂº 125, de 15 de marÃ§o de 2013, publicada no D.O.U. em 19 de marÃ§o de 2013.', 'Carga horÃ¡ria de 3800h.', '10 PerÃ­odos, 5 anos.', 'A Engenharia de Minas da UNIPAC Lafaiete faz parte de um ramo da engenharia que se dedica a preparar o engenheiro para a extraÃ§Ã£o dos minÃ©rios da natureza, bem como da separaÃ§Ã£o das matÃ©rias-primas minerais Ãºteis, ela tem como base o raciocÃ­nio lÃ', 'Prof. Adriano Raimundo Totou.\r\n\r\nMestrado em Engenharia Mineral, UFOP - Universidade Federal de Ouro Preto. DissertaÃ§Ã£o: EFEITO DA DISPERSÃƒO NA DESLAMAGEM E FLOTAÃ‡ÃƒO DE MINÃ‰RIOS HEMATÃTICOS ITABIRÃTICOS. Ano de obtenÃ§Ã£o: 2010\r\n\r\nGraduaÃ§Ã£o em Engenharia de Minas, UFOP - Universidade Federal de Ouro Preto, 2003.', '759'), ('7', 'Engenharia MecÃ¢nica', 'De todas as especialidades da Engenharia, pode-se dizer que a MecÃ¢nica Ã© uma das mais amplas e diversificadas. Quase tudo o que usamos, portanto, teve, em algum momento, o trabalho do engenheiro mecÃ¢nico na sua confecÃ§Ã£o, fazendo dele o mais versÃ¡til dos engenheiros. Esta versatilidade garante ao engenheiro mecÃ¢nico um vasto campo de atuaÃ§Ã£o, possibilitando-o trabalhar em empresas privadas nacionais e multinacionais e pÃºblicas envolvidas em praticamente todos os ramos da indÃºstria, como em empresas mineradoras, siderÃºrgicas, metalÃºrgicas, automotivas, de mÃ¡quina, equipamentos e petroquÃ­micas.', 'Reconhecido pela Portaria do MinistÃ©rio da EducaÃ§Ã£o nÂº 125, de 15 de marÃ§o de 2013, publicada no D.O.U. em 19 de marÃ§o de 2013.', 'Carga horÃ¡ria: 3600 h', '10 PerÃ­odos, 5 anos.', 'Formar Engenheiros MecÃ¢nicos com um perfil generalista, humanista, crÃ­tico e reflexivo, capacitado a absorver e desenvolver novas tecnologias, estimulando a sua atuaÃ§Ã£o crÃ­tica e criativa na identificaÃ§Ã£o e resoluÃ§Ã£o de problemas, considerando se', 'Luciano JosÃ© Vieira Franco.\r\n\r\nMestre em EducaÃ§Ã£o pela Universidade Presidente Antonio Carlos â€“ UNIPAC. Barbacena â€“ MG. 2008. \r\nGraduado em Engenharia Civil pela Escola de Engenharia Kennedy â€“ 1981. Belo Horizonte â€“ MG. 1981. \r\nGraduado em Engenharia MecÃ¢nica pela FundaÃ§Ã£o Municipal SÃ£o JoÃ£o Del Rei. SÃ£o JoÃ£o Del Rei â€“ MG -1978.\r\nEspecializado em Engenharia de SeguranÃ§a do Trabalho pela Fundacentro / Fumec â€“Belo Horizonte MG -1980\r\nEspecializado em Engenharia EconÃ´mica pela FundaÃ§Ã£o Getulio Vargas - Belo Horizonte MG -1986\r\nEspecializado em Higiene Ocupacional pela - Faculdade de CiÃªncias MÃ©dicas - Belo Horizonte MG -2000.', '759'), ('8', 'Engenharia de SeguranÃ§a no Trabalho', 'A Engenharia de SeguranÃ§a do Trabalho Ã© um ramo da engenharia responsÃ¡vel por prevenir riscos Ã  saÃºde e Ã  vida do trabalhador. Esse engenheiro da UNIPAC Lafaiete tem a funÃ§Ã£o de assegurar que o trabalhador nÃ£o corra risco de acidentes em sua atividade profissional, sejam eles danos fÃ­sicos ou psicolÃ³gicos. Ele tambÃ©m administra e fiscaliza a seguranÃ§a no meio industrial, organiza programas de prevenÃ§Ã£o de acidentes, elabora planos de prevenÃ§Ã£o de riscos ambientais, faz inspeÃ§Ã£o e emite laudos tÃ©cnicos.', 'Reconhecido pela Portaria do MinistÃ©rio da EducaÃ§Ã£o nÂº 125, de 15 de marÃ§o de 2013, publicada no D.O.U. em 19 de marÃ§o de 2013.', 'Carga horÃ¡ria Total: 3721 h', '10 PerÃ­odos, 5 anos.', 'Formar Engenheiros de SeguranÃ§a do Trabalho com sÃ³lida fundamentaÃ§Ã£o teÃ³rico-prÃ¡tica, construÃ­da a partir da articulaÃ§Ã£o de conhecimentos tÃ©cnicos cientÃ­ficos especÃ­ficos da Ã¡rea, do campo de atuaÃ§Ã£o profissional e de elementos bÃ¡sicos par', 'Luciano JosÃ© Vieira Franco.\r\n\r\nMestre em EducaÃ§Ã£o pela Universidade Presidente Antonio Carlos â€“ UNIPAC. Barbacena â€“ MG. 2008. \r\nGraduado em Engenharia Civil pela Escola de Engenharia Kennedy â€“ 1981. Belo Horizonte â€“ MG. 1981. \r\nGraduado em Engenharia MecÃ¢nica pela FundaÃ§Ã£o Municipal SÃ£o JoÃ£o Del Rei. SÃ£o JoÃ£o Del Rei â€“ MG -1978\r\nEspecializado em Engenharia de SeguranÃ§a do Trabalho pela Fundacentro / Fumec â€“Belo Horizonte MG -1980\r\nEspecializado em Engenharia EconÃ´mica pela FundaÃ§Ã£o Getulio Vargas - Belo Horizonte MG -1986\r\nEspecializado em Higiene Ocupacional pela - Faculdade de CiÃªncias MÃ©dicas - Belo Horizonte MG -2000.', '759'), ('9', 'Engenharia Civil', 'O Curso de Engenharia Civil fundamenta-se em uma formaÃ§Ã£o voltada para o desenvolvimento da capacidade crÃ­tica e criativa, sem deixar de lado a formaÃ§Ã£o do aluno no sentido de criar um profissional com uma base sÃ³lida de conhecimentos cientÃ­ficos e tÃ©cnicos. A graduaÃ§Ã£o deve proporcionar condiÃ§Ãµes para que cada aluno construa com rigor essa base inicial para a vida profissional, juntamente com o desenvolvimento da capacidade de anÃ¡lise. Com isso serÃ¡ possÃ­vel ao profissional adaptar-se Ã s necessidades do mercado de trabalho, bem como estarÃ¡ apto para o treinamento continuado que se inicia com a vida prÃ¡tica, Ãºnica forma viÃ¡vel para acompanhar a contÃ­nua evoluÃ§Ã£o da tecnologia.\r\n\r\nAs grandes Escolas de engenharia sempre tiveram um enfoque maior na formaÃ§Ã£o de dois tipos de engenheiros: o projetista, com profundo conhecimento tecnolÃ³gico em uma Ã¡rea especÃ­fica e o cientista, com capacidade tecnolÃ³gica voltada para o desenvolvimento de produtos e processos, atuando basicamente em pesquisa. Atualmente, a tendÃªncia das propostas curriculares estÃ¡ voltada para o Engenheiro SistÃªmico, que tem uma visÃ£o integrada dos sistemas de produÃ§Ã£o e conhecimento empresarial e organizacional, que o torna capaz de atuar em administraÃ§Ã£o e gerenciamento. Suas atividades estÃ£o voltadas para as Ã¡reas de operaÃ§Ã£o, planejamento e controle, direcionando seu conhecimento tÃ©cnico para a produÃ§Ã£o.\r\nO Engenheiro Civil desenvolve atividades que o coloca frente a frente com as questÃµes relacionadas ao ambiente e Ã  preservaÃ§Ã£o de valores culturais, o que o leva a agir e interagir dentro das equipes de trabalho de forma multidisciplinar. AtravÃ©s deste perfil o engenheiro civil necessita da capacidade de comunicaÃ§Ã£o, de relacionamento pessoal e de lideranÃ§a, pois suas atividades o colocam em interaÃ§Ã£o extensa com pessoas de todos os extratos sociais e econÃ´micos, em processos de tomada de decisÃ£o.\r\nO Engenheiro Civil responde pelo atendimento de funÃ§Ãµes bÃ¡sicas que visam ao bem-estar, Ã  p', 'Autorizado pela Portaria do MinistÃ©rio da EducaÃ§Ã£o nÂº 537, de 25 de agosto de 2014, publicada no D.O.U em 26 de agosto de 2014.', 'Carga HorÃ¡ria total de 3.600 horas.', 'DuraÃ§Ã£o: 5 anos (10 perÃ­odos)', 'Objetivo Geral\r\nFormar profissionais de nÃ­vel superior, que tenham formaÃ§Ã£o generalista, alicerÃ§ada em sÃ³lida base teÃ³rica e prÃ¡tica dos conteÃºdos bÃ¡sicos, profissionalizantes e especÃ­ficos do curso, aptos a desenvolver novas tecnologias, atuar ', 'Professor AndrÃ© Luciano de Carvalho\r\n\r\nDoutor em Engenharia AgrÃ­cola â€“ Ãrea de Recursos HÃ­dricos e Ambientais â€“ Universidade Federal de ViÃ§osa â€“ UFV â€“ Ano de obtenÃ§Ã£o: 2005.\r\n\r\nMestre em Engenharia Civil â€“ Ãrea de Geotecnia Ambiental â€“ Universidade Federal de ViÃ§osa â€“ UFV â€“ Ano de obtenÃ§Ã£o: 2001.\r\n\r\nGraduado em Engenharia Civil â€“ Universidade de Guarulhos â€“ UnG â€“ Ano de obtenÃ§Ã£o: 1995.\r\nLicenciado em FormaÃ§Ã£o Especial do CurrÃ­culo do Ensino de 2Âº grau â€“ Universidade Estadual Paulista JÃºlio de Mesquita â€“ UNESP. â€“ Ano de obtenÃ§Ã£o: 1990.\r\nGraduado em Tecnologia da ConstruÃ§Ã£o Civil â€“ Modalidade: EdifÃ­cios â€“ Universidade Estadual Paulista JÃºlio de Mesquita â€“ UNESP. â€“ Ano de obtenÃ§Ã£o: 1989.', '826'), ('10', 'Pedagogia', 'O pedagogo Ã© o profissional especialista em educaÃ§Ã£o, que atua em vÃ¡rias instÃ¢ncias da prÃ¡tica educativa, devendo produzir e difundir conhecimentos no campo educacional. O Pedagogo da UNIPAC Lafaiete no decorrer de sua formaÃ§Ã£o desenvolve habilidades para atuar nas atividades referentes ao processo educativo em instituiÃ§Ãµes escolares e nÃ£o escolares, empresas, Ã³rgÃ£os pÃºblicos e ONGâ€™s. Cada vez mais se ampliam os espaÃ§os de atuaÃ§Ã£o do profissional da pedagogia, que nas empresas, sÃ£o envolvidos em tarefas de seleÃ§Ã£o e treinamento e no desenvolvimento de competÃªncias adquiridas pelos processos de reestruturaÃ§Ã£o do trabalho.', 'TransformaÃ§Ã£o do Normal Superior em Pedagogia autorizado pela 25Âª reuniÃ£o ordinÃ¡ria do CONSEP de 17/08/2009, conforme previsto no Art. 11 da ResoluÃ§Ã£o 1/2006. AutorizaÃ§Ã£o do Curso Normal Superior 11Â° Ata do CONSUN de 18/10/2005.', 'Carga horÃ¡ria: 3200h', '3 anos e meio (7 periodos)', 'Objetivo geral\r\n\r\nFormar o profissional da educaÃ§Ã£o com competÃªncia teÃ³rico-metodolÃ³gica, humana e polÃ­tica, para atuar na docÃªncia da EducaÃ§Ã£o Infantil e dos Anos Iniciais do Ensino Fundamental e na gestÃ£o dos processos educativos, consciente d', 'Vanesa Mara Tavares', '428'), ('11', 'Medicina VeterinÃ¡ria', 'O curso de Medicina VeterinÃ¡ria da UNIPAC Lafaiete tem uma formaÃ§Ã£o multidisciplinar, estando fundamentado na ciÃªncia que se dedica Ã  prevenÃ§Ã£o, controle, erradicaÃ§Ã£o e tratamento das doenÃ§as, traumatismos ou qualquer outro agravo Ã  saÃºde dos animais, alÃ©m do controle da sanidade dos produtos e subprodutos de origem animal para o consumo humano.', 'Reconhecido pela Portaria do MinistÃ©rio da EducaÃ§Ã£o nÂº 125, de 15 de marÃ§o de 2013, publicada no D.O.U. em 19 de marÃ§o de 2013.', 'Carga horÃ¡ria de 4000 horas.', 'DuraÃ§Ã£o de 5 anos', 'O objetivo geral do curso de Medicina VeterinÃ¡ria da UNIPAC Lafaiete Ã© a formaÃ§Ã£o de profissionais generalistas, dentro de uma visÃ£o holÃ­stica, com as habilidades e competÃªncias necessÃ¡rias para atividades de prevenÃ§Ã£o, diagnÃ³stico e tratamento', 'Professora Ivana Maria de Carvalho Siqueira,\r\n\r\nGraduada em Medicina VeterinÃ¡ria pela Universidade Federal de Minas Gerais â€“ 1996. \r\nMestre em CiÃªncia dos Alimentos pela Escola de FarmÃ¡cia da Universidade Federal de Minas Gerais â€“ 2000. \r\nEspecialista em InspeÃ§Ã£o de Carnes e Derivados pela Universidade Federal de Minas Gerais, UFMG - 1998.\r\nEspecialista em EducaÃ§Ã£o em SaÃºde PÃºblica, pela Universidade de RibeirÃ£o Preto, UNAERP â€“ 2003.', '1113');
COMMIT;

-- ----------------------------
-- Table structure for dados
-- ----------------------------
DROP TABLE IF EXISTS `dados`;
CREATE TABLE `dados` (
`id`  int(11) NOT NULL AUTO_INCREMENT ,
`name`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`cidade`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`estado`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`end`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`bairro`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`email`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`dateN`  date NOT NULL ,
`cpf`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`celular`  varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`sexo`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`curso`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`curso2`  varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
PRIMARY KEY (`id`, `cpf`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=45

;

-- ----------------------------
-- Records of dados
-- ----------------------------
BEGIN;
INSERT INTO `dados` VALUES ('42', 'Adalton Dantas', 'Jeceaba', 'MG', 'Rua Antonio Pereira Gomes nÂº 283', 'Centro', 'donatelloferraz@hotmail.com', '1993-01-03', '048.883.273-00', '31 9 99260301', 'Masculino', 'Engenharia de ComputaÃ§Ã£o', 'Engenharia de Controle e AutomaÃ§Ã£o'), ('43', 'Simone Alencar', 'Belo Horizonte', 'MG', 'Rua Bahia nÂº 1040', 'Santa Luzia', 'simonealencar@hotmail.com', '1995-05-10', '654.987.321-96', '31 9 71596823', 'Feminino', 'AdministraÃ§Ã£o', 'Engenharia de ProduÃ§Ã£o'), ('44', 'Raimundo JosÃ©', 'Congonhas', 'MG', 'Rua Pereira Gomes nÂº 321', 'Praia', 'raimundo@gmail.com', '1987-04-13', '987.654.321-00', '31 9 99563215', 'Masculino', 'Engenharia Civil', 'Engenharia Mecanica');
COMMIT;

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
`id`  int(10) NOT NULL AUTO_INCREMENT ,
`nome`  varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`senha`  varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=2

;

-- ----------------------------
-- Records of login
-- ----------------------------
BEGIN;
INSERT INTO `login` VALUES ('1', 'admin', 'admin');
COMMIT;

-- ----------------------------
-- Auto increment value for contato
-- ----------------------------
ALTER TABLE `contato` AUTO_INCREMENT=5;

-- ----------------------------
-- Auto increment value for cursos
-- ----------------------------
ALTER TABLE `cursos` AUTO_INCREMENT=12;

-- ----------------------------
-- Auto increment value for dados
-- ----------------------------
ALTER TABLE `dados` AUTO_INCREMENT=45;

-- ----------------------------
-- Auto increment value for login
-- ----------------------------
ALTER TABLE `login` AUTO_INCREMENT=2;
