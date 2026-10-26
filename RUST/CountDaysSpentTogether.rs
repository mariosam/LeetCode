/**
 * @version RUST 1.95.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ rustc --test CountDaysSpentTogether.rs -o /tmp/runner && /tmp/runner
 */
pub struct CountDaysSpentTogether;

impl CountDaysSpentTogether {
    pub fn ount_days_together(arrive_alice: String, leave_alice: String, arrive_bob: String, leave_bob: String) -> i32 {
        let days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

        if arrive_alice > leave_bob || arrive_bob > leave_alice {
            return 0;
        }
        if arrive_alice == leave_bob || arrive_bob == leave_alice {
            return 1;
        }

        let max_arrive = if arrive_alice > arrive_bob {
            &arrive_alice
        } else {
            &arrive_bob
        };

        let min_leave = if leave_alice < leave_bob {
            &leave_alice
        } else {
            &leave_bob
        };
        let (m1, d1) = Self::parse_date(max_arrive);
        let (m2, d2) = Self::parse_date(min_leave);

        if m1 == m2 {
            return d2 - d1 + 1;
        }
        let mut res = days[(m1 - 1) as usize] - d1 + 1;

        for i in (m1 + 1)..m2 {
            res += days[(i - 1) as usize];
        }
        res += d2;
        res
    }

    fn parse_date(date: &str) -> (usize, i32) {
        let mut parts = date.split('-');
        let month = parts.next().unwrap().parse::<usize>().unwrap();
        let day = parts.next().unwrap().parse::<i32>().unwrap();
        (month, day)
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_ount_days_together() {
        // Teste 1
        let want = 3;
        let got = CountDaysSpentTogether::ount_days_together("08-15".to_string(), "08-18".to_string(), "08-16".to_string(), "08-19".to_string());
        assert_eq!(got, want);

        // Teste 2
        let want = 0;
        let got = CountDaysSpentTogether::ount_days_together("10-01".to_string(), "10-31".to_string(), "11-01".to_string(), "12-31".to_string());
        assert_eq!(got, want);
    }
}
