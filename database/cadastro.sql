-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS cadastroprodutos;
USE cadastroprodutos;

-- Criação da tabela `servicos`
CREATE TABLE IF NOT EXISTS servicos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    imagem VARCHAR(255),
    descricao TEXT
);

-- Inserção dos dados
INSERT INTO servicos (id, nome, imagem, descricao) VALUES
(2, 'Desenvolvimento de Software', '1747970452_1746030693_Desenvolvimento de software.png', 'Criamos softwares sob medida para atender às necessidades específicas do seu negócio. Seja para automação de processos, sistemas de gestão ou aplicativos personalizados, oferecemos soluções eficientes, seguras e escaláveis, com foco em performance e usabilidade.'),
(3, 'Segurança da Informação', '1747970539_1746048986_Segurança da Informação.png', 'Protegemos os dados da sua empresa contra ameaças digitais com soluções completas de segurança da informação. Atuamos na prevenção, detecção e resposta a incidentes, garantindo a confidencialidade, integridade e disponibilidade das suas informações.'),
(4, 'Tecnologia para Produtos Digitais', '1747970579_1746053240_Tecnologia para Produtos Digitais.png', 'Oferecemos suporte completo para a criação, desenvolvimento e otimização de produtos digitais, como aplicativos, plataformas web e serviços online. Utilizamos tecnologias modernas para garantir performance, escalabilidade e uma excelente experiência do usuário.'),
(5, 'Gerenciamento de Banco de Dados', '1747970635_Gerenciamento de Banco de Dados.png', 'Cuidamos da estrutura, manutenção e segurança dos seus bancos de dados para garantir alta disponibilidade, desempenho e integridade das informações. Atuamos com modelagem, otimização de consultas, backup e recuperação, além de monitoramento contínuo.'),
(6, 'Design UI/UX', '1747970678_1745981704_Design.png', 'Desenvolvemos interfaces intuitivas e atraentes, focadas na melhor experiência do usuário. Unimos estética e funcionalidade para criar designs que encantam, facilitam a navegação e aumentam o engajamento em sites, aplicativos e sistemas.'),
(7, 'Criação de APIs Personalizadas', '1747970801_1745983206_API.png', 'Criamos APIs eficientes e seguras para integrar sistemas, facilitar a comunicação entre aplicações e ampliar as funcionalidades do seu produto digital. Nossas soluções garantem alta performance, escalabilidade e facilidade de manutenção, adaptando-se às necessidades do seu negócio.');
