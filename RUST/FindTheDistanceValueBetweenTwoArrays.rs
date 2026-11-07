/**
 * @version RUST 1.95.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ rustc --test FindTheDistanceValueBetweenTwoArrays.rs -o /tmp/runner && /tmp/runner
 */
pub struct FindTheDistanceValueBetweenTwoArrays;

impl FindTheDistanceValueBetweenTwoArrays {
    pub fn find_the_distance_value(arr1: Vec<i32>, arr2: Vec<i32>, d: i32) -> i32 {
        let mut res = 0;

        for num1 in arr1 {
            let mut valid = true;

            for num2 in &arr2 {
                let delta = (num1 - num2).abs();

                if delta <= d {
                    valid = false;
                    break;
                }
            }

            if valid {
                res += 1;
            }
        }
        res
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_find_the_distance_value() {
        // Teste 1
        let want = 2;
        let got = FindTheDistanceValueBetweenTwoArrays::find_the_distance_value(vec![4,5,8], vec![10,9,1,8], 2);
        assert_eq!(got, want);

        // Teste 2
        let want = 2;
        let got = FindTheDistanceValueBetweenTwoArrays::find_the_distance_value(vec![1,4,2,3], vec![-4,-3,6,10,20,30], 3);
        assert_eq!(got, want);

        // Teste 3
        let want = 1;
        let got = FindTheDistanceValueBetweenTwoArrays::find_the_distance_value(vec![2,1,100,3], vec![-5,-2,10,-3,7], 6);
        assert_eq!(got, want);
    }
}
