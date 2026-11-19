/**
 * @version RUST 1.95.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ rustc --test MinimumScoreByChangingTwoElements.rs -o /tmp/runner && /tmp/runner
 */
pub struct MinimumScoreByChangingTwoElements;

impl MinimumScoreByChangingTwoElements {
    pub fn minimize_sum(nums: Vec<i32>) -> i32 {
        let mut nums = nums;
        nums.sort_unstable();

        let n = nums.len();
        let high_of_changing_two_mins = nums[n - 1] - nums[2];
        let high_of_changing_two_maxs = nums[n - 3] - nums[0];
        let high_of_changing_min_and_max = nums[n - 2] - nums[1];

        high_of_changing_two_mins
            .min(high_of_changing_two_maxs)
            .min(high_of_changing_min_and_max)
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_minimize_sum() {
        // Teste 1
        let want = 3;
        let got = MinimumScoreByChangingTwoElements::minimize_sum(vec![1,4,7,8,5]);
        assert_eq!(got, want);

        // Teste 2
        let want = 0;
        let got = MinimumScoreByChangingTwoElements::minimize_sum(vec![1,4,3]);
        assert_eq!(got, want);
    }
}
