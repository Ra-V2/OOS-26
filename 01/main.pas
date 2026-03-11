program Hello;

var
    numbers: array[1..50] of integer;

procedure RandomNumbers(var results: array of integer);
var
    i: integer;
begin
    for i := 1 to 50 do
        results[i] := Random(101);
end;

var
    i: integer;
begin
    Randomize;
    RandomNumbers(numbers);
    WriteLn('Random numbers:');
    for i := 1 to 50 do
        Write(numbers[i], ' ');
    WriteLn;
end.