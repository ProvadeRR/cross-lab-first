# cross-lab-01

К18-2 Карноза Станислав

Лабораторная работа №1:
Задача:
Создаем класс User который:
хранит в себе информацию про логин, пароль, имя, фамилию, роль.
 должен уметь авторизоваться на сайт и выводить приветствие в зависимости от роли (что-то вроде “Здравствуйте менеджер Иван Иванов. Вы можете на сайте изменять, удалять и создавать клиентов”,
“Здравствуйте клиент Афанасий Авдотьев. Вы можете на сайте просматривать информацию доступную пользователям”,
“Здравствуйте админ Ада Байрон. Вы можете на сайте делать всё”)
От него наследуем классы admin,client,manager. 
Создаем форму авторизации где вводиться логин и пароль. Если введен логин и пароль клиента, создаем класс клиента и вызываем его приветствие, если введен класс менеджера создаем класс менеджера и выводим его приветствие, соответственно для админа. 
Итого у нас должно получиться: 
форма ввода логина и пароля(во избежание слива пароля метод передачи данных - POST)
вывод на экран приветствия вошедшего пользователя
вывод ошибки о неверности логина и пароля при вводе данных которые не подходят ни одному пользователю.
