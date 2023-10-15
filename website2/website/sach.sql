SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Cấu trúc bảng cho bảng `users`

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Đang đổ dữ liệu cho bảng `users`

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- Chỉ mục cho bảng `users`
--ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT cho bảng `users`
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
