/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class SortTheJumbledNumbersTest {

    @Test
	public void testSortTheJumbledNumbers() throws Exception {
        //Test 1
        int[] want = new int[]{338,38,991};
        int[] got = SortTheJumbledNumbers.sortJumbled( new int[]{8,9,4,0,2,1,3,5,7,6}, new int[]{991,338,38} );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[]{123,456,789};
        got = SortTheJumbledNumbers.sortJumbled( new int[]{0,1,2,3,4,5,6,7,8,9}, new int[]{789,456,123} );
        assertArrayEquals(want, got);
	}

}
