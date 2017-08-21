use books;

/*insert borrowed_books (
user_id,
book_id)
values(
'11',
'10'
);*/

select full_name, student_number, title, isbn, ts from users_info i join borrowed_books r on
i.user_id = r.user_id join book_info d on r.book_id = d.book_id;

/*delete from borrowed_books where user_id = '6';*/