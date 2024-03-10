import csv
import mysql.connector

# Connect to your MySQL DB
conn = mysql.connector.connect(
    host="127.0.0.1",
    user="root",
    password="",
    database="htsta"
)

# Open a cursor to perform database operations
cur = conn.cursor()

with open('productMulti.csv', 'r') as f:
    reader = csv.reader(f, delimiter=';')
    next(reader)  # Skip the header row.
    for row in reader:
        placeholders = ', '.join(['%s'] * len(row))
        query = f"INSERT INTO products VALUES ({placeholders})"
        cur.execute(query, row)

# Commit the transaction
conn.commit()

# Close communication with the database
cur.close()
conn.close()