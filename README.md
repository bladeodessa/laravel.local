# laravel.local
Создал модели в корне app - Comment.php и News.php. Папку models решил не создавать.
Миграции и сиды находятся в соответсвующих папках в корневой папке database.
Искомая по ТЗ команда artisan называется SendComments. Для своего удобства при проверке функционала, 
создал так же команду DeleteComments. Observer класс для комментария находится в /app/Observers/.
Сделал простой инкремент после создания и после удаления. Вроде работает.
Извините, если код вышел не очень - у меня был буквально один день, чтобы прочитать всю документацию,
когда до этого я про ларавель знал только одно название)