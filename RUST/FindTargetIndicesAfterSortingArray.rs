/**
 * @version RUST 1.95.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ rustc --test FindTargetIndicesAfterSortingArray.rs -o /tmp/runner && /tmp/runner
 */
pub struct FindTargetIndicesAfterSortingArray;

impl FindTargetIndicesAfterSortingArray {
    pub fn target_indices(nums: Vec<i32>, target: i32) -> Vec<i32> {
        let mut nums = nums;
        nums.sort_unstable();
        let mut ans = Vec::new();

        for i in 0..nums.len() {
            if nums[i] == target {
                ans.push(i as i32);
            }
        }
        ans
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_target_indices() {
        // Teste 1
        let want = vec![1, 2];
        let got = FindTargetIndicesAfterSortingArray::target_indices([1,2,5,2,3].to_vec(), 2);
        assert_eq!(got, want);

        // Teste 2
        let want = vec![3];
        let got = FindTargetIndicesAfterSortingArray::target_indices([1,2,5,2,3].to_vec(), 3);
        assert_eq!(got, want);

        // Teste 3
        let want = vec![4];
        let got = FindTargetIndicesAfterSortingArray::target_indices([1,2,5,2,3].to_vec(), 5);
        assert_eq!(got, want);
    }
}
