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

procedure BubbleSort(var arr: array of integer);
var
    i, j, temp: integer;
begin
    for i := Low(arr) to High(arr) - 1 do
        for j := Low(arr) to High(arr) - i - 1 do
            if arr[j] > arr[j + 1] then
            begin
                temp := arr[j];
                arr[j] := arr[j + 1];
                arr[j + 1] := temp;
            end;
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

    BubbleSort(numbers);
    WriteLn('Sorted numbers:');
    for i := 1 to 50 do
        Write(numbers[i], ' ');
    WriteLn;
end.