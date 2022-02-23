from multiprocessing import connection
import sqlite3

connection = sqlite3.connect('movie.db')
sqlite3.Cursor = connection.cursor()
sqlite3.Cursor.execute('''CREATE TABLE IF NOT EXISTS shows (Title TEXT, Director TEXT, year date,actor text,actress text)''')

sqlite3.Cursor.execute('''
          INSERT INTO movie (Title, Director,year,actor,actress)

                VALUES
                ('vivah','Sooraj Barjatya',2006,'Shahid Kapoor','Amrita Rao'),
                ('yariyan','Divya Kumar Khoshla',2014,'Humanshu Kohali','Rakul preet singh ')

    
          ''')

connection.commit()
connection.close()
