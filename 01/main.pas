program Hello;

procedure RandomNumbers(fromNumber, toNumber, count: integer; var results: array of integer);
var
    i: integer;
begin
    for i := Low(results) to High(results) do
        results[i] := Random(toNumber - fromNumber + 1) + fromNumber;
end;

procedure BubbleSort(var arr: array of integer);
var
    i, j, temp: integer;
begin
    for i := Low(arr) to High(arr) - 1 do
        for j := Low(arr) to High(arr) - (i - Low(arr)) - 1 do
            if arr[j] > arr[j + 1] then
            begin
                temp := arr[j];
                arr[j] := arr[j + 1];
                arr[j + 1] := temp;
            end;
end;

var
    i: integer;
    size: integer;
    numbers: array of integer;
begin
    Randomize;
    size := 100;
    SetLength(numbers, size);
    RandomNumbers(100, 500, size, numbers);
    WriteLn('Random numbers:');
    for i := Low(numbers) to High(numbers) do
        Write(numbers[i], ' ');
    WriteLn;

    BubbleSort(numbers);
    WriteLn('Sorted numbers:');
    for i := Low(numbers) to High(numbers) do
        Write(numbers[i], ' ');
    WriteLn;
end.