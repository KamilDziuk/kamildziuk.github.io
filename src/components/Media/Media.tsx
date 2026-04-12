type Props = {
  media: string;
  alt?: string;
  mediaStyle: string;
};

export default function Media({ media, alt, mediaStyle }: Props) {
  return <img className={mediaStyle} src={media} alt={alt} loading="lazy" />;
}
