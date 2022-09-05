# json
A very basic JSON class for common tasks.
Basically a wrapper for php's standard encoding/decoding but using the JSON_THROW_EXCEPTION option so that invalid json always throws an exception.
Comes with some other things like applying the contents of JSON string to an object as properties so you can get code hints for common json responses by
pseudo typ-casting them into a DTO.

Plans for improving later but jsut want this as a package to install with other projects.
