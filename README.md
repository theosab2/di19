create table user
(
    USER_ID           int auto_increment
        primary key,
    USER_NOM          varchar(50)  null,
    USER_PRENOM       varchar(50)  null,
    USER_EMAIL        varchar(250) null,
    USER_PASSWORD     varchar(100) null,
    USER_ISADMIN      tinyint(1)   null,
    USER_ACCEPT_EMAIL tinyint(1)   null,
    USER_STATUS       int          null
);

 <a class="btn btn-secondary" href="/Article/WriteOne/{{ article.id }}"><i class="fas fa-file-download"></i></a>
