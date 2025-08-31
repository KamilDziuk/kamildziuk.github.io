import { useState, useEffect } from "react";

export default function useLoadingUtils(): string[] | boolean {
  const [symbols, setOfSymbols] = useState<string[] | boolean>(true);

  function getRandomSymbol(): string {
    return TEXT_TABLE[Math.floor(Math.random() * TEXT_TABLE.length)];
  }

  function chandleSymbols(count: number) {
    const symbol: string[] = [...Array(count)].map(getRandomSymbol);
    setOfSymbols(symbol);
  }

  useEffect(() => {
    const intervalId = setInterval(() => {
      chandleSymbols(5);
    }, 100);

    setTimeout(() => {
      setOfSymbols(["Dziuk"]);
      clearInterval(intervalId);
    }, 1500);

    setTimeout(() => {
      setOfSymbols(false);
    }, 1900);

    return () => {
      clearInterval(intervalId);
    };
  }, []);

  return symbols;
}

export const TEXT_TABLE: string[] = [
  "D",
  "z",
  "i",
  "u",
  "k",
  "a",
  "v",
  "1",
  "ಠ_ಠ",
  ":-)",
  "$",
  "%",
  "!",
  "/",
  "-",
  "`",
  "( ͡° ͜ʖ ͡°)",
  "*",
  "@",
  "x",
  ";",
  "=",
  "_",
  "X",
  "?",
  "}",
  "(☞ﾟヮﾟ)☞",
];
