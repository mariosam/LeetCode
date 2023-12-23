/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class Search2DMatrixTest {

    @Test
	public void testSearch2DMatrix() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = Search2DMatrix.searchMatrix( new int[][]{{1,3,5,7},{10,11,16,20},{23,30,34,60}}, 3 );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = Search2DMatrix.searchMatrix( new int[][]{{1,3,5,7},{10,11,16,20},{23,30,34,60}}, 13 );
        assertEquals(want, got);
	}

}
