/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindTheStringWithLCPTest {

    @Test
	public void testFindTheStringWithLCP() throws Exception {
        //Test 1
        String want = "abab";
        String got = FindTheStringWithLCP.findTheString( new int[][]{{4,0,2,0},{0,3,0,1},{2,0,2,0},{0,1,0,1}} );
        assertEquals(want, got);
        //Test 2
        want = "aaaa";
        got = FindTheStringWithLCP.findTheString( new int[][]{{4,3,2,1},{3,3,2,1},{2,2,2,1},{1,1,1,1}} );
        assertEquals(want, got);
        //Test 3
        want = "";
        got = FindTheStringWithLCP.findTheString( new int[][]{{4,3,2,1},{3,3,2,1},{2,2,2,1},{1,1,1,3}} );
        assertEquals(want, got);
	}

}
