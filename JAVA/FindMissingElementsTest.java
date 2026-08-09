/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import org.junit.Test;

public class FindMissingElementsTest {

    @Test
	public void testFindMissingElements() throws Exception {
        //Test 1
        List<Integer> want = Arrays.asList(3);
        List<Integer> got = FindMissingElements.findMissingElements( new int[]{1,4,2,5} );
        assertEquals(want, got);
        //Test 2
        want = Arrays.asList(0);
        got = FindMissingElements.findMissingElements( new int[]{7,8,6,9} );
        assertEquals(want, got);
        //Test 3
        want = Arrays.asList(2,3,4);
        got = FindMissingElements.findMissingElements( new int[]{5,1} );
        assertEquals(want, got);
	}

}
