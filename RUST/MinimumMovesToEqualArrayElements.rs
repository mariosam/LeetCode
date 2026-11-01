/**
 * @version RUST 1.95.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ rustc --test MinimumMovesToEqualArrayElements.rs -o /tmp/runner && /tmp/runner
 */
pub struct MinimumMovesToEqualArrayElements;

impl MinimumMovesToEqualArrayElements {
    pub fn min_moves(nums: Vec<i32>) -> i32 {
        if nums.is_empty() {
            return 0;
        }

        let mut nums = nums;
        nums.sort_unstable();
        let min_num = nums[0];
        let mut ans = 0;

        for num in nums {
            ans += num - min_num;
        }
        ans
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_min_moves() {
        // Teste 1
        let want = 3;
        let got = MinimumMovesToEqualArrayElements::min_moves(vec![1, 2, 3]);
        assert_eq!(got, want);

        // Teste 2
        let want = 0;
        let got = MinimumMovesToEqualArrayElements::min_moves(vec![1, 1, 1]);
        assert_eq!(got, want);
    }
}
