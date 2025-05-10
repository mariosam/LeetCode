/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;

import org.junit.Test;

public class BuildArrayFromPermutationTest {

    @Test
	public void testBuildArrayFromPermutation() throws Exception {
        //Test 1
        int[] want = new int[]{0,1,2,4,5,3};
        int[] got = BuildArrayFromPermutation.buildArray( new int[]{0,2,1,5,3,4} );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[] {4,5,0,1,2,3};
        got = BuildArrayFromPermutation.buildArray( new int[]{5,0,1,2,3,4} );
        assertArrayEquals(want, got);
	}

}
