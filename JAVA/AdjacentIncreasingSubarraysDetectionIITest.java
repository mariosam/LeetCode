/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import java.util.Arrays;
import java.util.List;

import org.junit.Test;

public class AdjacentIncreasingSubarraysDetectionIITest {

    @Test
	public void testAdjacentIncreasingSubarraysDetectionII() throws Exception {
        // Test 1
    int want = 3;
    List<Integer> nums1 = Arrays.asList(2, 5, 7, 8, 9, 2, 3, 4, 3, 1);
    int got = AdjacentIncreasingSubarraysDetectionII.maxIncreasingSubarrays(nums1);
    assertEquals(want, got);

    // Test 2
    want = 2;
    List<Integer> nums2 = Arrays.asList(1, 2, 3, 4, 4, 4, 4, 5, 6, 7);
    got = AdjacentIncreasingSubarraysDetectionII.maxIncreasingSubarrays(nums2);
    assertEquals(want, got);
	}

}
