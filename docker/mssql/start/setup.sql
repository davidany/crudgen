/*

Enter custom T-SQL here that would run after SQL Server has started up.

*/

-- DECLARE @database_name NVARCHAR(128) = N'my_database';
--
-- IF NOT EXISTS (SELECT name FROM sys.databases WHERE name = @database_name)
-- BEGIN
--     CREATE DATABASE @database_name;
-- END

-- CREATE DATABASE crudgen;
-- GO
--
CREATE DATABASE mkdocker;
GO
CREATE DATABASE dconnect;
GO


IF NOT EXISTS (SELECT name FROM sys.databases WHERE name = N'crudgen')
BEGIN
CREATE DATABASE crudgen;
END

IF NOT EXISTS (SELECT name FROM sys.databases WHERE name = N'mkdocker')
BEGIN
CREATE DATABASE mkdocker;
END

IF NOT EXISTS (SELECT name FROM sys.databases WHERE name = N'dconnect')
BEGIN
    CREATE DATABASE dconnect;
END
GO;
