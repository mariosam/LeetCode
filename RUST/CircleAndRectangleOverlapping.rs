/**
 * @version RUST 1.95.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ rustc --test CircleAndRectangleOverlapping.rs -o /tmp/runner && /tmp/runner
 */
pub struct CircleAndRectangleOverlapping;

impl CircleAndRectangleOverlapping {
    pub fn heck_overlap(radius: i32, x_center: i32, y_center: i32, x1: i32, y1: i32, x2: i32, y2: i32) -> bool {
        let mut res = 0;

        if x_center < x1 || x_center > x2 {
            res += std::cmp::min(
                (x1 - x_center).pow(2),
                (x_center - x2).pow(2),
            );
        }

        if y_center < y1 || y_center > y2 {
            res += std::cmp::min(
                (y1 - y_center).pow(2),
                (y_center - y2).pow(2),
            );
        }
        res <= radius * radius
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_heck_overlap() {
        // Teste 1
        let want = true;
        let got = CircleAndRectangleOverlapping::heck_overlap(1, 0, 0, 1, -1, 3, 1);
        assert_eq!(got, want);

        // Teste 2
        let want = false;
        let got = CircleAndRectangleOverlapping::heck_overlap(1, 1, 1, 1, -3, 2, -1);
        assert_eq!(got, want);

        // Teste 3
        let want = true;
        let got = CircleAndRectangleOverlapping::heck_overlap(1, 0, 0, -1, 0, 0, 1);
        assert_eq!(got, want);
    }
}
