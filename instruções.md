# videos uteis 
Batist
https://www.youtube.com/watch?v=qH7rsZBENJo&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG

coments 
https://www.youtube.com/watch?v=V66VbP4p0Wc&list=PLVSNL1PHDWvSOFpHtRi1-oZjBll69lehn&index=4

https://pt.stackoverflow.com/questions/136163/deploy-de-projeto-laravel-pelo-git

https://www.youtube.com/watch?v=gFAB9GKtxEs

https://www.google.com/search?q=ux+login&tbm=isch&ved=2ahUKEwjbqdLS-Y73AhUyL7kGHee5AjIQ2-cCegQIABAA&oq=ux+login&gs_lcp=CgNpbWcQAzIFCAAQgAQyBAgAEB4yBAgAEB4yBAgAEB4yBAgAEB4yBggAEAUQHjIGCAAQBRAeMgYIABAFEB4yBggAEAUQHjIGCAAQCBAeOgcIIxDvAxAnOgQIABBDOgsIABCABBCxAxCDAToICAAQgAQQsQM6BwgAELEDEENQyQlY7xtgxx5oAHAAeACAAewBiAHHCpIBBTAuOC4xmAEAoAEBqgELZ3dzLXdpei1pbWfAAQE&sclient=img&ei=jKlVYtszst7k5Q_n84qQAw&bih=752&biw=1432#imgrc=ABY2udvR-pYW6M

ondas com translate 

# deploy laravel 
git clone git@github.com:seuprojeto
cd seuprojeto
composer install --no-scripts
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm install
bower install
gulp



# autenticação  jetstream

composer require laravel/jetstream
php artisan jetstream:install livewire
php artisan migrate:status
npm install
npm run dev

# banco de dados 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=123456

# migrations 
php artisan make:migration add_user_id_to_posts_table




# Banco de dados 

INSERT INTO posts (title, content, user_id ) VALUES ('‘Viúva de Ferro’: uma trama distópica (e não-binária) sobre a China', '“Escrevi três livros antes de Viúva de Ferro, que é o primeiro a apresentar uma protagonista chinesa e minha cultura fortemente”, contou Xiran à VEJA. “Agora, eu escrevo em tempo integral, porque a pa... 
Leia mais em: https://veja.abril.com.br/cultura/viuva-de-ferro-uma-trama-distopica-e-nao-binaria-sobre-a-china/', 1);

INSERT INTO posts (title, content, user_id ) VALUES ('‘Povos originários: guerreiros do tempo’, um livro de Ricardo Stuckert', 'O fotógrafo Ricardo Stuckert lança nos próximos dias o livro Povos originários: guerreiros do tempo, pela Tordesilhas Livros. 
Leia mais em: https://veja.abril.com.br/coluna/radar/povos-originarios-guerreiros-do-tempo-um-livro-de-ricardo-stuckert/', 1);

INSERT INTO posts (title, content, user_id ) VALUES ('Morre aos 92 anos o britânico Jack Higgins', 'Autor de romances de espionagem de sucesso como A águia pousou e A noite da raposa, ele vendeu cerca de 150 milhões de exemplares no mundo todo, apesar de receber severas críticas da imprensa especializada', 1);

INSERT INTO posts (title, content, user_id ) VALUES ('Chanceler da Áustria relata "conversa dura" com Putin em Moscou', 'Primeira visita de um líder ocidental à Rússia após início da invasão à Ucrânia "não deixou margem para otimismo". Karl Nehammer relatou conversa franca e aberta, na qual teria defendido punições pelo massacre em Bucha.', 1);

INSERT INTO posts (title, content, user_id ) VALUES ('Diretor de O Homem do Norte não gosta de filmes de heróis, mas viu Batman por causa de Robert Pattinson', 'Em entrevista ao The Guardian sobre O Homem do Norte, Robert Eggers comentou que deixou os super-heróis para trás em sua vida com os quadrinhos de sua infância, mas resolveu assistir o novo Batman somente porque Robert Pattinson estava nele, mas aprendeu muito assistindo ao filme. “Eu vi isso [Batman] realmente só porque Rob [Pattinson] é meu amigo. Mas eu gostei, e aprendi muitas coisas com isso, francamente. Eu aplaudo Matt Reeves por manter uma identidade e fazer um filme assim. Eu não posso imaginar. Acho que acabei de fazer um grande filme [O Homem do Norte], mas não é a mesma coisa”.Robert Eggers trabalhou anteriormente com Robert Pattinson em O Farol, um dos papéis mais aclamados do ator antes de interpretar a nova versão do Bruce Wayne / Batman nos cinemas. No filme, Eggers constroi um forte suspense claustrofóbico com apenas dois personagens, interpretados por Pattinson e Willem Dafoe, e o perfeccionismo do diretor criou uma tensão no set, que inclusive fez Robert Pattinson querer socar Robert Eggers por causa da repetição de uma cena específica diversas vezes.  ', 1);




INSERT INTO posts (title, content, user_id ) VALUES ('Livro de brasileira será usado na educação de filhos de finlandeses', 'A editora Jaguatirica, do Rio de Janeiro, vai publicar, no próximo mês, o livro infantil Uma amiga de outro Mundo. De autoria da jornalista Flávia Corrêa e com ilustração de Fran Junqueira, a publicação...', 1);

INSERT INTO posts (title, content, user_id ) VALUES ('', '', 1);
INSERT INTO posts (title, content, user_id ) VALUES ('', '', 1);
INSERT INTO posts (title, content, user_id ) VALUES ('', '', 1);

INSERT INTO posts (title, content, user_id ) VALUES ('', '', 1);
INSERT INTO posts (title, content, user_id ) VALUES ('', '', 1);
INSERT INTO posts (title, content, user_id ) VALUES ('', '', 1);
INSERT INTO posts (title, content, user_id ) VALUES ('', '', 1);
INSERT INTO posts (title, content, user_id ) VALUES ('', '', 1);

INSERT INTO posts (title, content, user_id ) VALUES ('', '', 1);
INSERT INTO posts (title, content, user_id ) VALUES ('', '', 1);
INSERT INTO posts (title, content, user_id ) VALUES ('', '', 1);
INSERT INTO posts (title, content, user_id ) VALUES ('', '', 1);
INSERT INTO posts (title, content, user_id ) VALUES ('', '', 1);

