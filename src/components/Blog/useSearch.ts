export default function useSearch(search: string) {
  const regex = new RegExp(search);
  return regex;
}
