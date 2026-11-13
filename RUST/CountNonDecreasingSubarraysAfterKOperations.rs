/**
 * @version RUST 1.95.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ rustc --test CountNonDecreasingSubarraysAfterKOperations.rs -o /tmp/runner && /tmp/runner
 */
pub struct CountNonDecreasingSubarraysAfterKOperations;

impl CountNonDecreasingSubarraysAfterKOperations {
    pub fn count_non_decreasing_subarrays(nums: Vec<i32>, k: i32) -> i64 {
        let mut ans: i64 = 0;
        let mut cost: i64 = 0;
        let mut dq: std::collections::VecDeque<(i32, i32)> = std::collections::VecDeque::new();
        let mut j = nums.len() as isize - 1;

        for i in (0..nums.len()).rev() {
            let num = nums[i];
            let mut count = 1;

            while let Some(&(next_num, next_count)) = dq.back() {
                if next_num >= num {
                    break;
                }
                dq.pop_back();
                count += next_count;
                cost += (num - next_num) as i64 * next_count as i64;
            }
            dq.push_back((num, count));

            while cost > k as i64 {
                let (rightmost_num, rightmost_count) = dq.pop_front().unwrap();
                cost -= (rightmost_num - nums[j as usize]) as i64;
                j -= 1;

                if rightmost_count > 1 {
                    dq.push_front((rightmost_num, rightmost_count - 1));
                }
            }
            ans += (j - i as isize + 1) as i64;
        }
        ans
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_evaluate() {
        // Teste 1
        let want = 17;
        let got = CountNonDecreasingSubarraysAfterKOperations::count_non_decreasing_subarrays(vec![6,3,1,2,4,4], 7);
        assert_eq!(got, want);

        // Teste 2
        let want = 12;
        let got = CountNonDecreasingSubarraysAfterKOperations::count_non_decreasing_subarrays(vec![6,3,1,3,6].to_vec(), 4);
        assert_eq!(got, want);
    }
}
